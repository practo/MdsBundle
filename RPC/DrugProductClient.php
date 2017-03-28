<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Practo\MDS\RPC {

  class DrugProductClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Practo\MDS\RPC\AddDrugProductRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function add(\Practo\MDS\RPC\AddDrugProductRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.RPC.DrugProduct/add',
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
      return $this->_simpleRequest('/Practo.MDS.RPC.DrugProduct/fetch',
      $argument,
      ['\Practo\MDS\RPC\FetchDrugProductResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\RPC\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAll(\Practo\MDS\RPC\FetchAllRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.RPC.DrugProduct/fetchAll',
      $argument,
      ['\Practo\MDS\RPC\FetchAllDrugProductResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\RPC\FetchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchExtended(\Practo\MDS\RPC\FetchRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.RPC.DrugProduct/fetchExtended',
      $argument,
      ['\Practo\MDS\RPC\FetchDrugProductExtendedResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\RPC\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAllExtended(\Practo\MDS\RPC\FetchAllRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.RPC.DrugProduct/fetchAllExtended',
      $argument,
      ['\Practo\MDS\RPC\FetchAllDrugProductExtendedResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\RPC\DrugProductSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function search(\Practo\MDS\RPC\DrugProductSearchRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.RPC.DrugProduct/search',
      $argument,
      ['\Practo\MDS\RPC\FetchAllDrugProductResponse', 'decode'],
      $metadata, $options);
    }

  }

}
