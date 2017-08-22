<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Practo\MDS\Model {

use \Practo\Mds\Utility\RestUtility;

  class DrugProductClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($restUtility) {
      $this->restUtility = $restUtility;
    }
    
    /**
     * @param \Practo\MDS\Model\DrugProductSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function search(\Practo\MDS\Model\DrugProductSearchRequest $argument,
      $metadata = [], $options = []) {
      
      $searchParams = array(
        'q' => $argument->getQ()
      );
      $route = '/search/drug_product';
      $drugProductSearchJsonResponse =  $this->restUtility->get($route, $searchParams);
      $drugProductModel = new DrugProductModel($unserialize($jsonResponse))

      return $drugProductModel
    }

}
