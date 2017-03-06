<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Practo\MdsBundle\RPC {

  class DrugRegulatoryClassificationClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Practo\MdsBundle\RPC\AddDrugRegulatoryClassificationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function add(\Practo\MdsBundle\RPC\AddDrugRegulatoryClassificationRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MdsBundle.RPC.DrugRegulatoryClassification/add',
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
      return $this->_simpleRequest('/Practo.MdsBundle.RPC.DrugRegulatoryClassification/fetch',
      $argument,
      ['\Practo\MdsBundle\RPC\DrugRegulatoryClassificationModel', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MdsBundle\RPC\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAll(\Practo\MdsBundle\RPC\FetchAllRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MdsBundle.RPC.DrugRegulatoryClassification/fetchAll',
      $argument,
      ['\Practo\MdsBundle\RPC\FetchAllDrugRegulatoryClassificationResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MdsBundle\RPC\FetchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchExtended(\Practo\MdsBundle\RPC\FetchRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MdsBundle.RPC.DrugRegulatoryClassification/fetchExtended',
      $argument,
      ['\Practo\MdsBundle\RPC\DrugRegulatoryClassificationExtendedModel', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MdsBundle\RPC\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAllExtended(\Practo\MdsBundle\RPC\FetchAllRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MdsBundle.RPC.DrugRegulatoryClassification/fetchAllExtended',
      $argument,
      ['\Practo\MdsBundle\RPC\FetchAllDrugRegulatoryClassificationExtendedResponse', 'decode'],
      $metadata, $options);
    }

  }

}
