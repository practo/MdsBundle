<?php

namespace Practo\MDS\Utility;

class AuthUtility {

	static private $source;

	static private $secret;


	/**
	* @param $metaData user provided metaData to rpc call
	* @param $methodName invoked method name
	* @param $requestObject request object of rpc call
	*
	* @return array
	*/  
  	static public function attachHeaders($metaData, $methodName, $requestObject) {
  		$methodName = AuthUtility::getExceptedMethodName($methodName);
  		
  		$newMetaData = array();
  		$newMetaData['source'] = AuthUtility::$source;
  		$newMetaData['signature'] = ""; 

  		return $newMetaData;
  	}

  	static public function getExceptedMethodName($methodName) {
  		$last_slash_idx = strrpos($methodName, '/');
        if ($last_slash_idx == false) {
            throw new \InvalidArgumentException(
                'service name must have a slash');
        }

        $name = substr($methodName, $last_slash_idx, strlen($methodName));
        $service_name = substr($methodName, 0, $last_slash_idx);
        $service_name = str_replace('/', '', $service_name);
        $name = str_replace('/', '', $name);
        
        return $service_name.'.'.$name;
  	}


  	static public function sortArray() {


  	}


  	static public function generateSignature() {


  	}


  	static public function convertObjectToString() {


  	}


  	static public function convertObjectToArray() {

  	}
}
