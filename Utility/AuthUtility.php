<?php

namespace Practo\MDS\Utility;

class AuthUtility {

  static private $source;

  static private $secret;


    /**
    * @param $metaData user provided metaData to rpc call
    * @param $jwtAudUri the auth uri for the jwt
    * @param $methodName invoked method name
    * @param $requestObject request object of rpc call
    *
    * @return array
    */  
    static public function attachHeaders($metaData, $jwtAudUri, $methodName, $requestObject) {
      $methodName = AuthUtility::getExceptedMethodName($methodName);
      $request = AuthUtility::convertObjectToString($requestObject);

      $callFunc = function($entry) {
        return sprintf("%02X",$entry);
      };

      $hexPayLoad = implode("", array_map($callFunc, unpack("C*", $request)));

      $payLoad = $methodName . $hexPayLoad . AuthUtility::$source;
      $payLoadWithSecret = $payLoad . AuthUtility::$secret;
      $signature = AuthUtility::generateSignature($payLoadWithSecret);

      $metaData['domain'] = [AuthUtility::$source];
      $metaData['client_ip'] = [gethostbyname(gethostname())];
      $metaData['client_name'] = [gethostname()];
      $metaData['signature'] = [$signature];

      return $metaData;
    }


    /**
    * @param $methodName fully qualified mehthod name with additional slaches
    *
    * @return string
    */
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
        
      return $service_name.'/'.$name;
    }


    /**
    * @param $payLoad payLoad with secret attached
    * 
    * @return string
    */
    static public function generateSignature($payLoad) {
      $shaDigest = sha1($payLoad);

      return base64_encode($shaDigest);
    }


    /**
    * @param $requestObject incoming request payload
    *
    * @return string 
    */
    static public function convertObjectToString($requestObject) {

      return $requestObject->encode();
    }

    static public function setSource($source) {
      AuthUtility::$source = $source;
    }

    static public function setSecret($secret) {
      AuthUtility::$secret = $secret;
    }
}
