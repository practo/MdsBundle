<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Practo\MDS\RPC {

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
     * @param \Practo\MDS\RPC\AddDrugBrandRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function add(\Practo\MDS\RPC\AddDrugBrandRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.RPC.DrugBrand/add',
      $argument,
      ['\Practo\MDS\RPC\AddResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\RPC\FetchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetch(\Practo\MDS\RPC\FetchRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.RPC.DrugBrand/fetch',
      $argument,
      ['\Practo\MDS\RPC\FetchDrugBrandResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\RPC\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAll(\Practo\MDS\RPC\FetchAllRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.RPC.DrugBrand/fetchAll',
      $argument,
      ['\Practo\MDS\RPC\FetchAllDrugBrandResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\RPC\FetchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchExtended(\Practo\MDS\RPC\FetchRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.RPC.DrugBrand/fetchExtended',
      $argument,
      ['\Practo\MDS\RPC\FetchDrugBrandExtendedResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\RPC\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAllExtended(\Practo\MDS\RPC\FetchAllRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.RPC.DrugBrand/fetchAllExtended',
      $argument,
      ['\Practo\MDS\RPC\FetchAllDrugBrandExtendedResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\RPC\DosageFormSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function search(\Practo\MDS\RPC\DosageFormSearchRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.RPC.DrugBrand/search',
      $argument,
      ['\Practo\MDS\RPC\FetchAllDrugBrandResponse', 'decode'],
      $metadata, $options);
    }

  }

}
