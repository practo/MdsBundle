<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Practo\MDS\Model;

use \Practo\Mds\Utility\RestUtility;
use \JMS\Serializer\SerializationContext;

class DrugProductClient {

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

   /**
    * @param \Practo\MDS\Model\FetchRequest $argument input argument
    * @param array $metadata metadata
    * @param array $options call options
    */
   public function fetch(\Practo\MDS\Model\FetchRequest $argument,
     $metadata = [], $options = []) {

       $path = "/concept/drug_product/".$argument->getConceptId();
       $this->restUtility->setPath($path);
       $this->restUtility->setMethod('GET');
       $this->restUtility->setDefaultHeaders();
       $this->restUtility->setResponseType('Practo\MDS\Model\DrugProductModel');
       $this->restUtility->setResponseClass('Practo\MDS\Model\FetchDrugProductResponse');
       $this->restUtility->setResponseMethod('setDrugProduct');
 
       return $this->restUtility;
   }

   /**
     * @param \Practo\MDS\Model\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAll(\Practo\MDS\Model\FetchAllRequest $argument,
      $metadata = [], $options = []) {

      $this->restUtility->setPath('/concept/drug_product');
      $this->restUtility->setMethod('GET');
      $this->restUtility->setDefaultHeaders();
      $this->restUtility->setResponseType('Practo\MDS\Model\DrugProductModel');
      $this->restUtility->setResponseClass('Practo\MDS\Model\DrugProductModelList');
      $this->restUtility->setResponseMethod('setDrugProduct');
      $this->restUtility->setFetchAllResponseClass('Practo\MDS\Model\FetchAllDrugProductResponse');

      return $this->restUtility;
    }

   /**
    * @param \Practo\MDS\Model\FetchRequest $argument input argument
    * @param array $metadata metadata
    * @param array $options call options
    */
   public function fetchExtended(\Practo\MDS\Model\FetchRequest $argument,
     $metadata = [], $options = []) {

       $path = "/concept/drug_product/".$argument->getConceptId();
       $this->restUtility->setPath($path);
       $this->restUtility->setMethod('GET');
       
       $searchParams = array(
        'extended' => "true"
       );
       $this->restUtility->setQuery($searchParams);
       $this->restUtility->setDefaultHeaders();
       $this->restUtility->setResponseType('Practo\MDS\Model\DrugProductExtendedModel');
       $this->restUtility->setResponseClass('Practo\MDS\Model\FetchDrugProductExtendedResponse');
       $this->restUtility->setResponseMethod('setDrugProduct');
 
       return $this->restUtility;
   }

   /**
     * @param \Practo\MDS\Model\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAllExtended(\Practo\MDS\Model\FetchAllRequest $argument,
      $metadata = [], $options = []) {
        $this->restUtility->setPath('/concept/drug_product');
        $this->restUtility->setMethod('GET');

        $searchParams = array(
         'extended' => "true"
        );
        $this->restUtility->setQuery($searchParams);
        $this->restUtility->setDefaultHeaders();
        $this->restUtility->setResponseType('Practo\MDS\Model\DrugProductExtendedModel');
        $this->restUtility->setResponseClass('Practo\MDS\Model\DrugProductExtendedModelList');
        $this->restUtility->setResponseMethod('setDrugProduct');
        $this->restUtility->setFetchAllResponseClass('Practo\MDS\Model\FetchAllDrugProductExtendedResponse');

        return $this->restUtility;
    }

    /**
     * @param \Practo\MDS\Model\FetchByIdsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchByIds(\Practo\MDS\Model\FetchByIdsRequest $argument,
      $metadata = [], $options = []) {
        $this->restUtility->setPath('/concept/fetchByIds');
        $this->restUtility->setMethod('GET');

        $searchParams = array(
          'concept_ids' => $argument->getConceptIds()
        );
        $this->restUtility->setQuery($searchParams);
        $this->restUtility->setDefaultHeaders();
        $this->restUtility->setResponseType('Practo\MDS\Model\DrugProductModel');
        $this->restUtility->setResponseClass('Practo\MDS\Model\DrugProductModelList');
        $this->restUtility->setResponseMethod('setDrugProduct');
        $this->restUtility->setFetchAllResponseClass('Practo\MDS\Model\FetchAllDrugProductResponse');

        return $this->restUtility;
    }

    /**
     * @param \Practo\MDS\Model\VisibilityChangeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function visiblityChange(\Practo\MDS\Model\VisibilityChangeRequest $argument,
      $metadata = [], $options = []) {

        $path = "/concept/drug_product/".$argument->getConceptId()."/visibility";
        $this->restUtility->setPath($path);
        $this->restUtility->setMethod('PATCH');

        $serializer = \JMS\Serializer\SerializerBuilder::create()->build();
        $context = new SerializationContext();
        $context->setSerializeNull(false);
        $this->restUtility->setData($serializer->serialize($argument->getVisible(), 'json', $context));
        $this->restUtility->setResponseType('string');
        $this->restUtility->setResponseClass('Practo\MDS\Model\VisibilityChangeResponse');
        $this->restUtility->setResponseMethod('setAddResponseModel');

        return $this->restUtility;
    }
}
