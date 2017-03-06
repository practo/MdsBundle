<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Practo\MdsBundle\RPC {

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
     * @param \Practo\MdsBundle\RPC\AddDrugManufacturerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function add(\Practo\MdsBundle\RPC\AddDrugManufacturerRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MdsBundle.RPC.DrugManufacturer/add',
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
      return $this->_simpleRequest('/Practo.MdsBundle.RPC.DrugManufacturer/fetch',
      $argument,
      ['\Practo\MdsBundle\RPC\DrugManufacturerModel', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MdsBundle\RPC\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAll(\Practo\MdsBundle\RPC\FetchAllRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MdsBundle.RPC.DrugManufacturer/fetchAll',
      $argument,
      ['\Practo\MdsBundle\RPC\FetchAllDrugManufacturerResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MdsBundle\RPC\FetchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchExtended(\Practo\MdsBundle\RPC\FetchRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MdsBundle.RPC.DrugManufacturer/fetchExtended',
      $argument,
      ['\Practo\MdsBundle\RPC\DrugManufacturerExtendedModel', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MdsBundle\RPC\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAllExtended(\Practo\MdsBundle\RPC\FetchAllRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MdsBundle.RPC.DrugManufacturer/fetchAllExtended',
      $argument,
      ['\Practo\MdsBundle\RPC\FetchAllDrugManufacturerExtendedResponse', 'decode'],
      $metadata, $options);
    }

  }

}
