<?php
//Rest client for mds
namespace Practo\MDS\Utility;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\BadResponseException;
use Practo\MDS\Utility\AuthUtility as AuthUtility

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
        ]
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
        $authString = $route.$params.$domain[0].$secret[0];
        $shaDigest = sha1($authString);
        
        return base64_encode($shaDigest);
    }

    public static function toQueryParts(key, obj) {
        params = [];
        if (is_array($obj)){
            foreach ($obj as $key => $value) {
                if (is_int($key)) {
                    params[] = $value;
                } else {
                    params[] = RestUtility::toQueryParts($key, $value);
                }
            }
        } else {
            params[] = key . "=" . (string) obj;
        }

        return params;
    }

    public function getRequestURL() {
        return $this->baseUrl . $this->path;
    }

    public function prepareParams() {
        $queryParams = [];
        if ($this->method == "GET") {
            $queryParams['query'] = $this->query;
        } else {
            $queryParams['body'] = $this->body;
        }

        $queryParams = RestUtility::toQueryParts("", $queryParams);
        $signature = $this->getSignature($this->path, $queryParams,
            $this->source, $this->secret);

        // Add all request headers
        $queryParams['headers'] = $this->headers;
        $queryParams['headers']['signature'] = $signature;

        return $queryParams;
    }

    public function deSerializeData($response){
        $serializer = JMS\Serializer\SerializerBuilder::create()->build();
        $object = $serializer->deserialize($response,
            $this->responseType, 'json');

        $responseObject = new $this->responseClass();

        call_user_func(array($responseObject, $this->responseMethod, $object));

        return $responseObject;
    }

    public function wait(){
        $status = [];
        try {
            $response = $client->request($this->method,
                $this->getRequestURL, $this->prepareParams());
        } catch (ClientException $e) {
            $status["http_status"] = $e->getResponse()->getStatusCode();
            $status["result"]      = json_decode(
                $e->getResponse()->getBody()->getContents(),
                true
            );
        } catch (BadResponseException $e)     {
            $status["http_status"] = $e->getResponse()->getStatusCode();
            $status["result"]      = json_decode(
                $e->getResponse()->getBody()->getContents(),
                true
            );
        }

        return [$this->deSerializeData($response), $status];
    }
}
