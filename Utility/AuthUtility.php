<?php

namespace Practo\MDS\Utility;

class AuthUtility {

  static private $source;

  static private $secret;


    /**
    * @param $metaData user provided metaData to rpc call
    * @param $jwtAudUri the auth uri for the jwt
    *
    * @return array
    */  
    static public function attachHeaders($metaData, $jwtAudUri) {
      $payLoad = $metaData['_auth_payload'] . AuthUtility::$source . AuthUtility::$secret;
      $shaDigest = sha1($payLoad);
      $signature = base64_encode($shaDigest);
      unset($metaData['_auth_payload']);

      $metaData['domain'] = [AuthUtility::$source];
      $metaData['client_ip'] = [gethostbyname(gethostname())];
      $metaData['client_name'] = [gethostname()];
      $metaData['signature'] = [$signature];
      return $metaData;
    }

    static public function setSource($source) {
      AuthUtility::$source = $source;
    }

    static public function setSecret($secret) {
      AuthUtility::$secret = $secret;
    }
}
