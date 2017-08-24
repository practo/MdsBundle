<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Practo\MDS\Model;

use \Practo\Mds\Utility\RestUtility;
use \JMS\Serializer\SerializationContext;

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
      
      $this->restUtility->setPath('/search/drug_product');
      $this->restUtility->setMethod('GET');
      $this->restUtility->setDefaultHeaders();
      $this->restUtility->setQuery($searchParams);
      $this->restUtility->setResponseType('Practo\MDS\Model\DrugProductModel');
      $this->restUtility->setResponseClass('Practo\MDS\Model\DrugProductModelList');
      $this->restUtility->setResponseMethod('setDrugProduct');
      $this->restUtility->setFetchAllResponseClass('Practo\MDS\Model\FetchAllDrugProductResponse');

      return $this->restUtility;
    }

   /**
    * @param \Practo\MDS\Model\AddDrugProductRequest $argument input argument
    * @param array $metadata metadata
    * @param array $options call options
    */
   public function add(\Practo\MDS\Model\AddDrugProductRequest $argument,
     $metadata = [], $options = []) {
       $this->restUtility->setPath('/concept/drug_product');
       $this->restUtility->setMethod('POST');
       $this->restUtility->setDefaultHeaders();
       $serializer = \JMS\Serializer\SerializerBuilder::create()->build();
       $context = new SerializationContext();
       $context->setSerializeNull(false);
       $this->restUtility->setData($serializer->serialize($argument->getDrugProduct(), 'json', $context));
       $this->restUtility->setResponseType('Practo\MDS\Model\AddResponseModel');
       $this->restUtility->setResponseClass('Practo\MDS\Model\AddResponse');
       $this->restUtility->setResponseMethod('setAddResponseModel');
 
       return $this->restUtility;
   }

}
