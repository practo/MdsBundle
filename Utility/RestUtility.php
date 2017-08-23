<?php
//Rest client for mds
namespace Practo\MDS\Utility;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\BadResponseException;
use Practo\MDS\Utility\AuthUtility as AuthUtility;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBType;

class RestUtility {

    private $method;

    private $path;

    private $headers;

    private $query;

    private $data;

    private $responseType;

    private $responseClass;

    private $responseMethod;

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

    public function getSignature($route, $params, $domain, $secret) {
        $authString = $route.$params.$domain.$secret;
        $shaDigest = sha1($authString);
        
        return base64_encode($shaDigest);
    }

    public function toQueryParts($key, $obj) {
        $params = array();
        if (is_array($obj)){
            foreach ($obj as $key => $value) {
                $params[] = $this->toQueryParts($key, $value);
            }
        } else {
            $params[] = $key . "=" . (string) $obj;
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
        } else {
            $queryParams['body'] = $this->body;
        }
        $strQuery = $this->toQueryParts("", $queryParams);
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
        $data = new RepeatedField($this->responseType);
        foreach ($jsonData as $key => $value) {
            $object = $serializer->deserialize(json_encode($value),
                $this->responseType, 'json');
            $data[] = $object;
        }
        $responseObject = new $this->responseClass();
        call_user_func_array(array($responseObject, $this->responseMethod), array(&$data));

        return $responseObject;
    }

    public function wait(){
        $status = [];
        try {
            $response = $this->client->request($this->method,
                $this->getRequestURL(), $this->prepareParams());
            return [$this->deSerializeData($response), $status];
        } catch (ClientException $e) {
            $status["http_status"] = $e->getResponse()->getStatusCode();
            $status["result"]      = json_decode(
                $e->getResponse()->getBody()->getContents(),
                true
            );
            var_dump($status);
        } catch (BadResponseException $e)     {
            $status["http_status"] = $e->getResponse()->getStatusCode();
            $status["result"]      = json_decode(
                $e->getResponse()->getBody()->getContents(),
                true
            );
            var_dump($status);
        }
    }
}
