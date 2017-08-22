<?php
//Rest client for mds
namespace Practo\MDS\Utility;

use Buzz\Message\Response;


class RestUtility {

	public function __construct($source, $secret, $baseUrl) {
		$this->source = $source;
		$this->secret = $secret;
		$this->baseUrl = $baseUrl;
		
		$this->client = new \Buzz\Client\Curl();
        $this->client->setTimeout(20);
		$this->buzz = new \Buzz\Browser($this->client);
	}

	public function get($route, $params) {
		try {
			$signArr = $this->getSignature($route, $params, $this->source, $this->secret);
			$headers = array(
				'domain' => $this->source[0],
				'signature' => $signArr['signature'],
				'Content-type' => 'application/json'
			);
			$url = $this->baseUrl[0].$signArr["routeString"];
			$response = $this->buzz->get($url, $headers, $params);

			return $response;
		} catch (\HttpException $ex) {
            return $this->makeExceptionResponse($ex);
        }
    }

    public function getSignature($route, $params, $domain, $secret) {
    	$authString = '';
    	foreach ($params as $key => $value) {    	 
    		if ($authString === '') {
    			$authString = $key.'='.$value;
    		} else {
    			$authString = $authString.'&'.$key.'='.$value;
    		}
    	}
    	$routeString = $route.'?'.$authString; 
    	$authString = $route.$authString.$domain[0].$secret[0];
    	$shaDigest = sha1($authString);
    	$signature = base64_encode($shaDigest);

    	return array(
    		'routeString' => $routeString,
    		'signature' => $signature
    	);
    }

}
