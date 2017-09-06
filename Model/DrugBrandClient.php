<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Practo\MDS\Model {

  class DrugBrandClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($restUtility) {
      $this->restUtility = $restUtility;
    }
    
    /**
     * @param \Practo\MDS\Model\DrugBrandSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function search(\Practo\MDS\Model\DrugBrandSearchRequest $argument,
      $metadata = [], $options = []) {
      
      $searchParams = array(
        'q' => $argument->getQ()
      );
      
      $this->restUtility->setPath('/search/drug_brand');
      $this->restUtility->setMethod('GET');
      $this->restUtility->setDefaultHeaders();
      $this->restUtility->setQuery($searchParams);
      $this->restUtility->setResponseType('Practo\MDS\Model\DrugBrandModel');
      $this->restUtility->setResponseClass('Practo\MDS\Model\DrugBrandModelList');
      $this->restUtility->setResponseMethod('setDrugBrand');
      $this->restUtility->setFetchAllResponseClass('Practo\MDS\Model\FetchAllDrugBrandResponse');

      return $this->restUtility;
    }

   /**
    * @param \Practo\MDS\Model\AddDrugBrandRequest $argument input argument
    * @param array $metadata metadata
    * @param array $options call options
    */
   public function add(\Practo\MDS\Model\AddDrugBrandRequest $argument,
     $metadata = [], $options = []) {
       $this->restUtility->setPath('/concept/drug_brand');
       $this->restUtility->setMethod('POST');
       $this->restUtility->setDefaultHeaders();
       $serializer = \JMS\Serializer\SerializerBuilder::create()->build();
       $context = new SerializationContext();
       $context->setSerializeNull(false);
       $this->restUtility->setData($serializer->serialize($argument->getDrugBrand(), 'json', $context));
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

       $path = "/concept/drug_brand/".$argument->getConceptId();
       $this->restUtility->setPath($path);
       $this->restUtility->setMethod('GET');
       $this->restUtility->setDefaultHeaders();
       $this->restUtility->setResponseType('Practo\MDS\Model\DrugBrandModel');
       $this->restUtility->setResponseClass('Practo\MDS\Model\FetchDrugBrandResponse');
       $this->restUtility->setResponseMethod('setDrugBrand');
 
       return $this->restUtility;
   }

   /**
     * @param \Practo\MDS\Model\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAll(\Practo\MDS\Model\FetchAllRequest $argument,
      $metadata = [], $options = []) {

      $this->restUtility->setPath('/concept/drug_brand');
      $this->restUtility->setMethod('GET');
      $this->restUtility->setDefaultHeaders();
      $this->restUtility->setResponseType('Practo\MDS\Model\DrugBrandModel');
      $this->restUtility->setResponseClass('Practo\MDS\Model\DrugBrandModelList');
      $this->restUtility->setResponseMethod('setDrugBrand');
      $this->restUtility->setFetchAllResponseClass('Practo\MDS\Model\FetchAllDrugBrandResponse');

      return $this->restUtility;
    }

   /**
    * @param \Practo\MDS\Model\FetchRequest $argument input argument
    * @param array $metadata metadata
    * @param array $options call options
    */
   public function fetchExtended(\Practo\MDS\Model\FetchRequest $argument,
     $metadata = [], $options = []) {

       $path = "/concept/drug_brand/".$argument->getConceptId();
       $this->restUtility->setPath($path);
       $this->restUtility->setMethod('GET');
       
       $searchParams = array(
        'extended' => "true"
       );
       $this->restUtility->setQuery($searchParams);
       $this->restUtility->setDefaultHeaders();
       $this->restUtility->setResponseType('Practo\MDS\Model\DrugBrandExtendedModel');
       $this->restUtility->setResponseClass('Practo\MDS\Model\FetchDrugBrandExtendedResponse');
       $this->restUtility->setResponseMethod('setDrugBrand');
 
       return $this->restUtility;
   }

   /**
     * @param \Practo\MDS\Model\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAllExtended(\Practo\MDS\Model\FetchAllRequest $argument,
      $metadata = [], $options = []) {
        $this->restUtility->setPath('/concept/drug_brand');
        $this->restUtility->setMethod('GET');

        $searchParams = array(
         'extended' => "true"
        );
        $this->restUtility->setQuery($searchParams);
        $this->restUtility->setDefaultHeaders();
        $this->restUtility->setResponseType('Practo\MDS\Model\DrugBrandExtendedModel');
        $this->restUtility->setResponseClass('Practo\MDS\Model\DrugBrandExtendedModelList');
        $this->restUtility->setResponseMethod('setDrugBrand');
        $this->restUtility->setFetchAllResponseClass('Practo\MDS\Model\FetchAllDrugBrandExtendedResponse');

        return $this->restUtility;
    }

  }

}
