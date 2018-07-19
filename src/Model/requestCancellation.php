<?php

namespace StephanWoerner\ErvExiSoap\Model;

class requestCancellation
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
     * @var policy $policy
     */
    protected $policy = null;

    /**
     * @var requestIDType $requestID
     */
    protected $requestID = null;

    /**
     * @param systemRqType $system
     * @param agentType $agent
     * @param policyRq $policy
     * @param requestIDType $requestID
     */
    public function __construct($system, $agent, $policy, $requestID)
    {
      $this->system = $system;
      $this->agent = $agent;
      $this->policy = $policy;
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
     * @return \StephanWoerner\ErvExiSoap\Model\requestCancellation
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
     * @return \StephanWoerner\ErvExiSoap\Model\requestCancellation
     */
    public function setAgent($agent)
    {
      $this->agent = $agent;
      return $this;
    }

    /**
     * @return policy
     */
    public function getPolicy()
    {
      return $this->policy;
    }

    /**
     * @param policy $policy
     * @return \StephanWoerner\ErvExiSoap\Model\requestCancellation
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
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
     * @return \StephanWoerner\ErvExiSoap\Model\requestCancellation
     */
    public function setRequestID($requestID)
    {
      $this->requestID = $requestID;
      return $this;
    }

}
