<?php
//Rest client for mds
namespace Practo\MDS\Utility {

use Buzz\Message\Response;


class RestUtility {

	public RestUtility() {
		$this->source = $source;
		$this->secret = $secret;
		$this->baseUrl = $baseUrl
		
		$this->client = new \Buzz\Client\Curl();
        $this->client->setTimeout(20);
		$this->buzz = new \Buzz\Browser($this->client);
	}

	public function get($route, $params) {
		try {
			$headers = array(
				'domain' => $this->source,
				'signature' => $this->getSignature($route, $params, $this->domain, $this->secret),
				'Content-type' => 'application/json'
			);
			$url = $baseUrl.$route
			$response = $this->buzz->get($url, $headers, $params);

			return $response;
		} catch (\HttpException $ex) {
            return $this->makeExceptionResponse($ex);
        }
    }

    public funtion getSignature($route, $params, $domain, $secret) {
    	$authString = '';
    	for ($param in $params) {
    		if ($authString === '') {
    			$authString = $param.'='.$params[$param];
    		} else {
    			$authString = $authString.'&'.$param.'='.$params[$param];
    		}
    	}
    	$authString = $route.$authString.$domain.$secret;
    	$shaDigest = sha1($authString);
    	$signature = base64_encode($shaDigest)

    	return $signature
    }

}
