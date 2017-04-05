<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Practo\MDS\Model {

  class DrugManufacturerClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Practo\MDS\Model\AddDrugManufacturerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function add(\Practo\MDS\Model\AddDrugManufacturerRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.DrugManufacturer/add',
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
      return $this->_simpleRequest('/Practo.MDS.Model.DrugManufacturer/fetch',
      $argument,
      ['\Practo\MDS\Model\FetchDrugManufacturerResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAll(\Practo\MDS\Model\FetchAllRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.DrugManufacturer/fetchAll',
      $argument,
      ['\Practo\MDS\Model\FetchAllDrugManufacturerResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\FetchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchExtended(\Practo\MDS\Model\FetchRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.DrugManufacturer/fetchExtended',
      $argument,
      ['\Practo\MDS\Model\FetchDrugManufacturerExtendedResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAllExtended(\Practo\MDS\Model\FetchAllRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.DrugManufacturer/fetchAllExtended',
      $argument,
      ['\Practo\MDS\Model\FetchAllDrugManufacturerExtendedResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\DrugManufacturerSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function search(\Practo\MDS\Model\DrugManufacturerSearchRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.DrugManufacturer/search',
      $argument,
      ['\Practo\MDS\Model\FetchAllDrugManufacturerResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\FetchByIdsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchByIds(\Practo\MDS\Model\FetchByIdsRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.DrugManufacturer/fetchByIds',
      $argument,
      ['\Practo\MDS\Model\FetchAllDrugManufacturerResponse', 'decode'],
      $metadata, $options);
    }

  }

}
