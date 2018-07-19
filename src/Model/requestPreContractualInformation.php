<?php

namespace StephanWoerner\ErvExiSoap\Model;

class requestPreContractualInformation
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
     * @var offerID $offerID
     */
    protected $offerID = null;

    /**
     * @var travelType $travel
     */
    protected $travel = null;

    /**
     * @var coveredTravelersType $coveredTravelers
     */
    protected $coveredTravelers = null;

    /**
     * @var customerType $customer
     */
    protected $customer = null;

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
     * @param offerID $offerID
     * @param travelType $travel
     * @param coveredTravelersType $coveredTravelers
     * @param customerType $customer
     * @param extensionsType $extensions
     * @param requestIDType $requestID
     */
    public function __construct($system, $agent, $offerID, $travel, $coveredTravelers, $customer, $extensions, $requestID)
    {
      $this->system = $system;
      $this->agent = $agent;
      $this->offerID = $offerID;
      $this->travel = $travel;
      $this->coveredTravelers = $coveredTravelers;
      $this->customer = $customer;
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
     * @return \StephanWoerner\ErvExiSoap\Model\requestPreContractualInformation
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
     * @return \StephanWoerner\ErvExiSoap\Model\requestPreContractualInformation
     */
    public function setAgent($agent)
    {
      $this->agent = $agent;
      return $this;
    }

    /**
     * @return offerID
     */
    public function getOfferID()
    {
      return $this->offerID;
    }

    /**
     * @param offerID $offerID
     * @return \StephanWoerner\ErvExiSoap\Model\requestPreContractualInformation
     */
    public function setOfferID($offerID)
    {
      $this->offerID = $offerID;
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
     * @return \StephanWoerner\ErvExiSoap\Model\requestPreContractualInformation
     */
    public function setTravel($travel)
    {
      $this->travel = $travel;
      return $this;
    }

    /**
     * @return coveredTravelersType
     */
    public function getCoveredTravelers()
    {
      return $this->coveredTravelers;
    }

    /**
     * @param coveredTravelersType $coveredTravelers
     * @return \StephanWoerner\ErvExiSoap\Model\requestPreContractualInformation
     */
    public function setCoveredTravelers($coveredTravelers)
    {
      $this->coveredTravelers = $coveredTravelers;
      return $this;
    }

    /**
     * @return customerType
     */
    public function getCustomer()
    {
      return $this->customer;
    }

    /**
     * @param customerType $customer
     * @return \StephanWoerner\ErvExiSoap\Model\requestPreContractualInformation
     */
    public function setCustomer($customer)
    {
      $this->customer = $customer;
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
     * @return \StephanWoerner\ErvExiSoap\Model\requestPreContractualInformation
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
     * @return \StephanWoerner\ErvExiSoap\Model\requestPreContractualInformation
     */
    public function setRequestID($requestID)
    {
      $this->requestID = $requestID;
      return $this;
    }

}
