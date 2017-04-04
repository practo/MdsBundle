<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Practo\MDS\Model {

  class DrugBrandClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Practo\MDS\Model\AddDrugBrandRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function add(\Practo\MDS\Model\AddDrugBrandRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.DrugBrand/add',
      $argument,
      ['\Practo\MDS\Model\AddResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\FetchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetch(\Practo\MDS\Model\FetchRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.DrugBrand/fetch',
      $argument,
      ['\Practo\MDS\Model\FetchDrugBrandResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAll(\Practo\MDS\Model\FetchAllRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.DrugBrand/fetchAll',
      $argument,
      ['\Practo\MDS\Model\FetchAllDrugBrandResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\FetchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchExtended(\Practo\MDS\Model\FetchRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.DrugBrand/fetchExtended',
      $argument,
      ['\Practo\MDS\Model\FetchDrugBrandExtendedResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAllExtended(\Practo\MDS\Model\FetchAllRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.DrugBrand/fetchAllExtended',
      $argument,
      ['\Practo\MDS\Model\FetchAllDrugBrandExtendedResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\DosageFormSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function search(\Practo\MDS\Model\DosageFormSearchRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.DrugBrand/search',
      $argument,
      ['\Practo\MDS\Model\FetchAllDrugBrandResponse', 'decode'],
      $metadata, $options);
    }

  }

}
