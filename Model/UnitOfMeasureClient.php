<?php

// GENERATED CODE -- DO NOT EDIT!

namespace Practo\MDS\Model {

  class UnitOfMeasureClient {

    public function __construct($restUtility) {
      $this->restUtility = $restUtility;
    }

    public function search(\Practo\MDS\Model\UnitOfMeasureSearchRequest $argument,
      $metadata = [], $options = []) {
      $searchParams = array(
        'q' => $argument->getQ(),
        'offset' => $argument->getOffset()
      );
      if ($argument->getLimit()) {
        $searchParams['limit'] = $argument->getLimit();
      }
      $this->restUtility->setPath('/search/unit_of_measure');
      $this->restUtility->setMethod('GET');
      $this->restUtility->setDefaultHeaders();
      $this->restUtility->setQuery($searchParams);
      $this->restUtility->setResponseType('Practo\MDS\Model\UnitOfMeasureModel');
      $this->restUtility->setResponseClass('Practo\MDS\Model\UnitOfMeasureModelList');
      $this->restUtility->setResponseMethod('setUnitOfMeasure');
      $this->restUtility->setFetchAllResponseClass('Practo\MDS\Model\FetchAllUnitOfMeasureResponse');

      return $this->restUtility;
    }

    /**
     * @param \Practo\MDS\Model\UnitOfMeasureSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function searchExtended(\Practo\MDS\Model\UnitOfMeasureSearchRequest $argument,
      $metadata = [], $options = []) {

      $searchParams = array(
        'q' => $argument->getQ(),
        'extended' => "true",
        'offset' => $argument->getOffset()
      );

      if ($argument->getLimit()) {
        $searchParams['limit'] = $argument->getLimit();
      }

      $this->restUtility->setPath('/search/unit_of_measure');
      $this->restUtility->setMethod('GET');
      $this->restUtility->setDefaultHeaders();
      $this->restUtility->setQuery($searchParams);
      $this->restUtility->setResponseType('Practo\MDS\Model\UnitOfMeasureExtendedModel');
      $this->restUtility->setResponseClass('Practo\MDS\Model\UnitOfMeasureExtendedModelList');
      $this->restUtility->setResponseMethod('setUnitOfMeasure');
      $this->restUtility->setFetchAllResponseClass('Practo\MDS\Model\FetchAllUnitOfMeasureExtendedResponse');

      return $this->restUtility;
    }

   /**
    * @param \Practo\MDS\Model\FetchRequest $argument input argument
    * @param array $metadata metadata
    * @param array $options call options
    */
   public function fetch(\Practo\MDS\Model\FetchRequest $argument,
     $metadata = [], $options = []) {

       $path = /concept/unit_of_measure/".$argument->getConceptId();
       $this->restUtility->setPath($path);
       $this->restUtility->setMethod('GET');
       $this->restUtility->setDefaultHeaders();
       $this->restUtility->setResponseType('Practo\MDS\Model\UnitOfMeasureModel');
       $this->restUtility->setResponseClass('Practo\MDS\Model\FetchUnitOfMeasureResponse');
       $this->restUtility->setResponseMethod('setUnitOfMeasure');

       return $this->restUtility;
   }
   /**
    * @param \Practo\MDS\Model\FetchRequest $argument input argument
    * @param array $metadata metadata
    * @param array $options call options
    */
   public function fetchExtended(\Practo\MDS\Model\FetchRequest $argument,
     $metadata = [], $options = []) {

       $path = '/concept/unit_of_measure/'.$argument->getConceptId();
       $this->restUtility->setPath($path);
       $this->restUtility->setMethod('GET');

       $searchParams = array(
        'extended' => "true",
       );
       $this->restUtility->setQuery($searchParams);
       $this->restUtility->setDefaultHeaders();
       $this->restUtility->setResponseType('Practo\MDS\Model\UnitOfMeasureExtendedModel');
       $this->restUtility->setResponseClass('Practo\MDS\Model\FetchUnitOfMeasureClientExtendedResponse');
       $this->restUtility->setResponseMethod('setUnitOfMeasure');

       return $this->restUtility;
   }

   /**
     * @param \Practo\MDS\Model\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAll(\Practo\MDS\Model\FetchAllRequest $argument,
      $metadata = [], $options = []) {

      $searchParams = array(
        'offset' => $argument->getOffset()
      );
      if ($argument->getLimit()) {
        $searchParams['limit'] = $argument->getLimit();
      }
      $this->restUtility->setPath('/concept/unit_of_measure');
      $this->restUtility->setMethod('GET');
      $this->restUtility->setDefaultHeaders();
      $this->restUtility->setQuery($searchParams);
      $this->restUtility->setResponseType('Practo\MDS\Model\UnitOfMeasureModel');
      $this->restUtility->setResponseClass('Practo\MDS\Model\UnitOfMeasureModelList');
      $this->restUtility->setResponseMethod('setUnitOfMeasure');
      $this->restUtility->setFetchAllResponseClass('Practo\MDS\Model\FetchAllUnitOfMeasureResponse');

      return $this->restUtility;
    }

   /**
     * @param \Practo\MDS\Model\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAllExtended(\Practo\MDS\Model\FetchAllRequest $argument,
      $metadata = [], $options = []) {
        $this->restUtility->setPath('/concept/unit_of_measure');
        $this->restUtility->setMethod('GET');

        $searchParams = array(
         'extended' => "true",
         'offset' => $argument->getOffset()
        );
        $this->restUtility->setQuery($searchParams);
        $this->restUtility->setDefaultHeaders();
        $this->restUtility->setResponseType('Practo\MDS\Model\UnitOfMeasureExtendedModel');
        $this->restUtility->setResponseClass('Practo\MDS\Model\UnitOfMeasureExtendedModelList');
        $this->restUtility->setResponseMethod('setUnitOfMeasure');
        $this->restUtility->setFetchAllResponseClass('Practo\MDS\Model\FetchAllUnitOfMeasureExtendedResponse');

        return $this->restUtility;
    }

  }
}