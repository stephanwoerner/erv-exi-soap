<?php

namespace StephanWoerner\ErvExiSoap\Model;

class requestPayPageUrl
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
     * @var payPageData $payPageData
     */
    protected $payPageData = null;

    /**
     * @var requestIDType $requestID
     */
    protected $requestID = null;

    /**
     * @param systemRqType $system
     * @param agentType $agent
     * @param payPageData $payPageData
     * @param requestIDType $requestID
     */
    public function __construct($system, $agent, $payPageData, $requestID)
    {
      $this->system = $system;
      $this->agent = $agent;
      $this->payPageData = $payPageData;
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
     * @return \StephanWoerner\ErvExiSoap\Model\requestPayPageUrl
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
     * @return \StephanWoerner\ErvExiSoap\Model\requestPayPageUrl
     */
    public function setAgent($agent)
    {
      $this->agent = $agent;
      return $this;
    }

    /**
     * @return payPageData
     */
    public function getPayPageData()
    {
      return $this->payPageData;
    }

    /**
     * @param payPageData $payPageData
     * @return \StephanWoerner\ErvExiSoap\Model\requestPayPageUrl
     */
    public function setPayPageData($payPageData)
    {
      $this->payPageData = $payPageData;
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
     * @return \StephanWoerner\ErvExiSoap\Model\requestPayPageUrl
     */
    public function setRequestID($requestID)
    {
      $this->requestID = $requestID;
      return $this;
    }

}
