<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Practo\MDS\Model {

  class CountryClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Practo\MDS\Model\AddCountryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function add(\Practo\MDS\Model\AddCountryRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.Country/add',
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
      return $this->_simpleRequest('/Practo.MDS.Model.Country/fetch',
      $argument,
      ['\Practo\MDS\Model\FetchCountryResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAll(\Practo\MDS\Model\FetchAllRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.Country/fetchAll',
      $argument,
      ['\Practo\MDS\Model\FetchAllCountryResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\FetchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchExtended(\Practo\MDS\Model\FetchRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.Country/fetchExtended',
      $argument,
      ['\Practo\MDS\Model\FetchCountryExtendedResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\FetchAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fetchAllExtended(\Practo\MDS\Model\FetchAllRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.Country/fetchAllExtended',
      $argument,
      ['\Practo\MDS\Model\FetchAllCountryExtendedResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Practo\MDS\Model\CountrySearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function search(\Practo\MDS\Model\CountrySearchRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/Practo.MDS.Model.Country/search',
      $argument,
      ['\Practo\MDS\Model\FetchAllCountryResponse', 'decode'],
      $metadata, $options);
    }

  }

}
