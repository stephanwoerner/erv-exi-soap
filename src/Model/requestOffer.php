<?php

namespace StephanWoerner\ErvExiSoap\Model;

class requestOffer
{

    /**
     * @var systemRqType $system
     */
    protected $system = null;

    /**
     * @var agentType $agent
     */
    protected $agent = null;

    /**
     * @var providerDataType $providerData
     */
    protected $providerData = null;

    /**
     * @var productSpecType $productSpec
     */
    protected $productSpec = null;

    /**
     * @var AlphaStringLength3 $customerResidenceCountryCode
     */
    protected $customerResidenceCountryCode = null;

    /**
     * @var travelType $travel
     */
    protected $travel = null;

    /**
     * @var searchTravelersType $searchTravelers
     */
    protected $searchTravelers = null;

    /**
     * @var extensionsType $extensions
     */
    protected $extensions = null;

    /**
     * @var requestIDType $requestID
     */
    protected $requestID = null;

    /**
     * @param systemRqType $system
     * @param agentType $agent
     * @param providerDataType $providerData
     * @param productSpecType $productSpec
     * @param AlphaStringLength3 $customerResidenceCountryCode
     * @param travelType $travel
     * @param searchTravelersType $searchTravelers
     * @param extensionsType $extensions
     * @param requestIDType $requestID
     */
    public function __construct($system, $agent, $providerData, $productSpec, $customerResidenceCountryCode, $travel, $searchTravelers, $extensions, $requestID)
    {
      $this->system = $system;
      $this->agent = $agent;
      $this->providerData = $providerData;
      $this->productSpec = $productSpec;
      $this->customerResidenceCountryCode = $customerResidenceCountryCode;
      $this->travel = $travel;
      $this->searchTravelers = $searchTravelers;
      $this->extensions = $extensions;
      $this->requestID = $requestID;
    }

    /**
     * @return systemRqType
     */
    public function getSystem()
    {
      return $this->system;
    }

    /**
     * @param systemRqType $system
     * @return \StephanWoerner\ErvExiSoap\Model\requestOffer
     */
    public function setSystem($system)
    {
      $this->system = $system;
      return $this;
    }

    /**
     * @return agentType
     */
    public function getAgent()
    {
      return $this->agent;
    }

    /**
     * @param agentType $agent
     * @return \StephanWoerner\ErvExiSoap\Model\requestOffer
     */
    public function setAgent($agent)
    {
      $this->agent = $agent;
      return $this;
    }

    /**
     * @return providerDataType
     */
    public function getProviderData()
    {
      return $this->providerData;
    }

    /**
     * @param providerDataType $providerData
     * @return \StephanWoerner\ErvExiSoap\Model\requestOffer
     */
    public function setProviderData($providerData)
    {
      $this->providerData = $providerData;
      return $this;
    }

    /**
     * @return productSpecType
     */
    public function getProductSpec()
    {
      return $this->productSpec;
    }

    /**
     * @param productSpecType $productSpec
     * @return \StephanWoerner\ErvExiSoap\Model\requestOffer
     */
    public function setProductSpec($productSpec)
    {
      $this->productSpec = $productSpec;
      return $this;
    }

    /**
     * @return AlphaStringLength3
     */
    public function getCustomerResidenceCountryCode()
    {
      return $this->customerResidenceCountryCode;
    }

    /**
     * @param AlphaStringLength3 $customerResidenceCountryCode
     * @return \StephanWoerner\ErvExiSoap\Model\requestOffer
     */
    public function setCustomerResidenceCountryCode($customerResidenceCountryCode)
    {
      $this->customerResidenceCountryCode = $customerResidenceCountryCode;
      return $this;
    }

    /**
     * @return travelType
     */
    public function getTravel()
    {
      return $this->travel;
    }

    /**
     * @param travelType $travel
     * @return \StephanWoerner\ErvExiSoap\Model\requestOffer
     */
    public function setTravel($travel)
    {
      $this->travel = $travel;
      return $this;
    }

    /**
     * @return searchTravelersType
     */
    public function getSearchTravelers()
    {
      return $this->searchTravelers;
    }

    /**
     * @param searchTravelersType $searchTravelers
     * @return \StephanWoerner\ErvExiSoap\Model\requestOffer
     */
    public function setSearchTravelers($searchTravelers)
    {
      $this->searchTravelers = $searchTravelers;
      return $this;
    }

    /**
     * @return extensionsType
     */
    public function getExtensions()
    {
      return $this->extensions;
    }

    /**
     * @param extensionsType $extensions
     * @return \StephanWoerner\ErvExiSoap\Model\requestOffer
     */
    public function setExtensions($extensions)
    {
      $this->extensions = $extensions;
      return $this;
    }

    /**
     * @return requestIDType
     */
    public function getRequestID()
    {
      return $this->requestID;
    }

    /**
     * @param requestIDType $requestID
     * @return \StephanWoerner\ErvExiSoap\Model\requestOffer
     */
    public function setRequestID($requestID)
    {
      $this->requestID = $requestID;
      return $this;
    }

}
