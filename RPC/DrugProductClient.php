<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Practo\MdsBundle\RPC {

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
     * @param \Practo\MdsBundle\RPC\AddDrugProductRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function add(\Practo\MdsBundle\RPC\AddDrugProductRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MdsBundle.RPC.DrugProduct/add',
      $argument,
      ['\Practo\MdsBundle\RPC\AddResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MdsBundle\RPC\FetchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetch(\Practo\MdsBundle\RPC\FetchRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MdsBundle.RPC.DrugProduct/fetch',
      $argument,
      ['\Practo\MdsBundle\RPC\DrugProductModel', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MdsBundle\RPC\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAll(\Practo\MdsBundle\RPC\FetchAllRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MdsBundle.RPC.DrugProduct/fetchAll',
      $argument,
      ['\Practo\MdsBundle\RPC\FetchAllDrugProductResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MdsBundle\RPC\FetchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchExtended(\Practo\MdsBundle\RPC\FetchRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MdsBundle.RPC.DrugProduct/fetchExtended',
      $argument,
      ['\Practo\MdsBundle\RPC\DrugProductExtendedModel', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MdsBundle\RPC\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAllExtended(\Practo\MdsBundle\RPC\FetchAllRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MdsBundle.RPC.DrugProduct/fetchAllExtended',
      $argument,
      ['\Practo\MdsBundle\RPC\FetchAllDrugProductExtendedResponse', 'decode'],
      $metadata, $options);
    }

  }

}
