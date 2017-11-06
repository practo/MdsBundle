<?php
//Rest client for mds
namespace Practo\MDS\Utility;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\BadResponseException;
use Practo\MDS\Utility\AuthUtility as AuthUtility;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBType;
use Practo\MDS\Utility\Status as Status;

class RestUtility {

    private $method;

    private $path;

    private $headers;

    private $query;

    private $data;

    private $responseType;

    private $responseClass;

    private $responseMethod;

    private $fetchAllResponseClass;

    public function __construct($source, $secret, $baseUrl) {
        $this->source = $source;
        $this->secret = $secret;
        $this->baseUrl = $baseUrl;
        
        $this->client = new Client();
    }

    public function setMethod($method){
        $this->method = $method;
    }

    public function setPath($path){
        $this->path = $path;
    }

    public function setDefaultHeaders(){
        $this->headers = [
            'domain' => $this->source[0],
            'Content-Type' => 'application/json'
        ];
    }

    public function setHeaders($headers){
        $this->headers = $headers;
    }

    public function setQuery($query){
        $this->query = $query;
    }

    public function setData($data){
        $this->data = $data;
    }

    public function setResponseType($responseType) {
        $this->responseType = $responseType;
    }

    public function setResponseClass($responseClass) {
        $this->responseClass = $responseClass;
    }

    public function setResponseMethod($responseMethod) {
        $this->responseMethod = $responseMethod;
    }

    public function setFetchAllResponseClass($responseClass) {
        $this->fetchAllResponseClass = $responseClass;
    }

    public function getSignature($route, $params, $domain, $secret) {
        $authString = $route.$params.$domain.$secret;
        $shaDigest = sha1($authString);
            
        return base64_encode($shaDigest);
    }

    public function getKey($prefix, $key) {
        if ($prefix != "") {
            return $prefix . "[" . $key . "]";
        }
        return $key;
    }

    public function toQueryParts($key, $obj) {
        $params = array();
        if (is_array($obj)){
            foreach ($obj as $entry => $value) {
                $params[] = $this->toQueryParts(
                    $this->getKey($key, $entry), $value);
            }
        } else if ($obj !== NULL) {
            if ($obj === true) {
                $obj = 'true';
            } else if ($obj === false) {
                $obj = 'false';
            }
            $params[] = $key . "=" .$obj;
        } else {
            return null;
        }
        sort($params);
        return implode("&", $params);
    }

    public function getRequestURL() {
        return $this->baseUrl[0] . $this->path;
    }

    public function prepareParams() {
        if ($this->method == "GET") {
            $queryParams['query'] = $this->query;
            $strQuery = $this->toQueryParts("", $queryParams['query']);
        } else {
            $queryParams['body'] = $this->data;
            $strQuery = $this->toQueryParts("", json_decode($queryParams['body'], true));
        }
        $signature = $this->getSignature($this->path, $strQuery,
            $this->source[0], $this->secret[0]);
        // Add all request headers
        $queryParams['headers'] = $this->headers;
        $queryParams['headers']['signature'] = $signature;

        return $queryParams;
    }

    public function deSerializeData($response){
        $serializer = \JMS\Serializer\SerializerBuilder::create()->build();
        $jsonData = json_decode($response->getBody(), false);
        if (isset($jsonData->concepts)) {
            $jsonData = $jsonData->concepts;
        }
        $jsonData = $this->truncate_sys_fields_prefix($jsonData);
        //case when a list is returned.
        if ($this->fetchAllResponseClass != '') {
            $data = new RepeatedField($this->responseType);
            foreach ($jsonData as $key => $value) {
                $object = $serializer->deserialize(json_encode($value),
                    $this->responseType, 'json');
                $data[] = $object;
            }
            $resObjList = new $this->responseClass();
            $resFetchAllResObj = new $this->fetchAllResponseClass();
            call_user_func_array(array($resObjList, $this->responseMethod), array(&$data));
            call_user_func_array(array($resFetchAllResObj, $this->responseMethod), array(&$resObjList));

            return $resFetchAllResObj;
        } else {
            $data = $serializer->deserialize(json_encode($jsonData),
                $this->responseType, 'json');
            $responseObject = new $this->responseClass();
            call_user_func_array(array($responseObject, $this->responseMethod), array(&$data));

            return $responseObject;
        }
    }

    public function wait(){
        $status = new Status();
        try {
            $response = $this->client->request($this->method,
                $this->getRequestURL(), $this->prepareParams());
            // Set success status and details
            $status->code = 0;
            $status->details = "success";

            return [$this->deSerializeData($response), $status];
        } catch (ClientException $e) {
            $status->code = $e->getResponse()->getStatusCode();
            $status->details = json_decode(
                $e->getResponse()->getBody()->getContents(),
                true
            );
        } catch (BadResponseException $e)     {
            $status->code = $e->getResponse()->getStatusCode();
            $status->details = json_decode(
                $e->getResponse()->getBody()->getContents(),
                true
            );
        }
        return [array(), $status];
    }

    public function truncate_sys_fields_prefix($jsonData) {
        $newJson = [];
        foreach ($jsonData as $key => $value) {
            $newValue = $value;
            $newKey = $key;
            if ($key[0] == '$') {
               $newKey = substr($key, 1);
            } elseif (is_object($value) || is_array($value)) {
                $newKey = $key;
                $newValue = $this->truncate_sys_fields_prefix($value);
            }
            $newJson[$newKey] = $newValue;
        }

        return $newJson;
    }
}
