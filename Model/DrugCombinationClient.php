<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Practo\MDS\Model;

use \Practo\Mds\Utility\RestUtility;
use \JMS\Serializer\SerializationContext;

class DrugCombinationClient {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($restUtility) {
      $this->restUtility = $restUtility;
    }
    
    /**
     * @param \Practo\MDS\Model\DrugCombinationSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function search(\Practo\MDS\Model\DrugCombinationSearchRequest $argument,
      $metadata = [], $options = []) {
      
      $searchParams = array(
        'q' => $argument->getQ()
      );
      
      $this->restUtility->setPath('/search/drug_combination');
      $this->restUtility->setMethod('GET');
      $this->restUtility->setDefaultHeaders();
      $this->restUtility->setQuery($searchParams);
      $this->restUtility->setResponseType('Practo\MDS\Model\DrugCombinationModel');
      $this->restUtility->setResponseClass('Practo\MDS\Model\DrugCombinationModelList');
      $this->restUtility->setResponseMethod('setDrugCombination');
      $this->restUtility->setFetchAllResponseClass('Practo\MDS\Model\FetchAllDrugCombinationResponse');

      return $this->restUtility;
    }

    /**
     * @param \Practo\MDS\Model\DrugCombinationSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function searchExtended(\Practo\MDS\Model\DrugCombinationSearchRequest $argument,
      $metadata = [], $options = []) {
      
      $searchParams = array(
        'q' => $argument->getQ(),
        'extended' => "true",
      );
      
      $this->restUtility->setPath('/search/drug_product');
      $this->restUtility->setMethod('GET');
      $this->restUtility->setDefaultHeaders();
      $this->restUtility->setQuery($searchParams);
      $this->restUtility->setResponseType('Practo\MDS\Model\DrugCombinationExtendedModel');
      $this->restUtility->setResponseClass('Practo\MDS\Model\DrugCombinationExtendedModelList');
      $this->restUtility->setResponseMethod('setDrugCombination');
      $this->restUtility->setFetchAllResponseClass('Practo\MDS\Model\FetchAllDrugCombinationExtendedResponse');
      
      return $this->restUtility;
    }

   /**
    * @param \Practo\MDS\Model\AddDrugCombinationRequest $argument input argument
    * @param array $metadata metadata
    * @param array $options call options
    */
   public function add(\Practo\MDS\Model\AddDrugCombinationRequest $argument,
     $metadata = [], $options = []) {
       $this->restUtility->setPath('/concept/drug_combination');
       $this->restUtility->setMethod('POST');
       $this->restUtility->setDefaultHeaders();
       $serializer = \JMS\Serializer\SerializerBuilder::create()->build();
       $context = new SerializationContext();
       $context->setSerializeNull(false);
       $this->restUtility->setData($serializer->serialize($argument->getDrugCombination(), 'json', $context));
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

       $path = "/concept/drug_combination/".$argument->getConceptId();
       $this->restUtility->setPath($path);
       $this->restUtility->setMethod('GET');
       $this->restUtility->setDefaultHeaders();
       $this->restUtility->setResponseType('Practo\MDS\Model\DrugCombinationModel');
       $this->restUtility->setResponseClass('Practo\MDS\Model\FetchDrugCombinationResponse');
       $this->restUtility->setResponseMethod('setDrugCombination');
 
       return $this->restUtility;
   }

   /**
     * @param \Practo\MDS\Model\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAll(\Practo\MDS\Model\FetchAllRequest $argument,
      $metadata = [], $options = []) {

      $this->restUtility->setPath('/concept/drug_combination');
      $this->restUtility->setMethod('GET');
      $this->restUtility->setDefaultHeaders();
      $this->restUtility->setResponseType('Practo\MDS\Model\DrugCombinationModel');
      $this->restUtility->setResponseClass('Practo\MDS\Model\DrugCombinationModelList');
      $this->restUtility->setResponseMethod('setDrugCombination');
      $this->restUtility->setFetchAllResponseClass('Practo\MDS\Model\FetchAllDrugCombinationResponse');

      return $this->restUtility;
    }

   /**
    * @param \Practo\MDS\Model\FetchRequest $argument input argument
    * @param array $metadata metadata
    * @param array $options call options
    */
   public function fetchExtended(\Practo\MDS\Model\FetchRequest $argument,
     $metadata = [], $options = []) {

       $path = "/concept/drug_combination/".$argument->getConceptId();
       $this->restUtility->setPath($path);
       $this->restUtility->setMethod('GET');
       
       $searchParams = array(
        'extended' => "true"
       );
       $this->restUtility->setQuery($searchParams);
       $this->restUtility->setDefaultHeaders();
       $this->restUtility->setResponseType('Practo\MDS\Model\DrugCombinationExtendedModel');
       $this->restUtility->setResponseClass('Practo\MDS\Model\FetchDrugCombinationExtendedResponse');
       $this->restUtility->setResponseMethod('setDrugCombination');
 
       return $this->restUtility;
   }

   /**
     * @param \Practo\MDS\Model\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAllExtended(\Practo\MDS\Model\FetchAllRequest $argument,
      $metadata = [], $options = []) {
        $this->restUtility->setPath('/concept/drug_combination');
        $this->restUtility->setMethod('GET');

        $searchParams = array(
         'extended' => "true"
        );
        $this->restUtility->setQuery($searchParams);
        $this->restUtility->setDefaultHeaders();
        $this->restUtility->setResponseType('Practo\MDS\Model\DrugCombinationExtendedModel');
        $this->restUtility->setResponseClass('Practo\MDS\Model\DrugCombinationExtendedModelList');
        $this->restUtility->setResponseMethod('setDrugCombination');
        $this->restUtility->setFetchAllResponseClass('Practo\MDS\Model\FetchAllDrugCombinationExtendedResponse');

        return $this->restUtility;
    }
}
