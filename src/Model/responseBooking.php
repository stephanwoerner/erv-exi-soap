<?php

namespace StephanWoerner\ErvExiSoap\Model;

class responseBooking
{

    /**
     * @var systemRpType $system
     */
    protected $system = null;

    /**
     * @var agentWarningType $agent
     */
    protected $agent = null;

    /**
     * @var policy $policy
     */
    protected $policy = null;

    /**
     * @var thanx $thanx
     */
    protected $thanx = null;

    /**
     * @var extensionsType $extensions
     */
    protected $extensions = null;

    /**
     * @var userErrorContainerType $userError
     */
    protected $userError = null;

    /**
     * @var systemErrorContainerType $systemError
     */
    protected $systemError = null;

    /**
     * @var requestIDType $requestID
     */
    protected $requestID = null;

    /**
     * @var responseIDType $responseID
     */
    protected $responseID = null;

    /**
     * @param systemRpType $system
     * @param agentWarningType $agent
     * @param policy $policy
     * @param thanx $thanx
     * @param extensionsType $extensions
     * @param userErrorContainerType $userError
     * @param systemErrorContainerType $systemError
     * @param requestIDType $requestID
     * @param responseIDType $responseID
     */
    public function __construct($system, $agent, $policy, $thanx, $extensions, $userError, $systemError, $requestID, $responseID)
    {
      $this->system = $system;
      $this->agent = $agent;
      $this->policy = $policy;
      $this->thanx = $thanx;
      $this->extensions = $extensions;
      $this->userError = $userError;
      $this->systemError = $systemError;
      $this->requestID = $requestID;
      $this->responseID = $responseID;
    }

    /**
     * @return systemRpType
     */
    public function getSystem()
    {
      return $this->system;
    }

    /**
     * @param systemRpType $system
     * @return \StephanWoerner\ErvExiSoap\Model\responseBooking
     */
    public function setSystem($system)
    {
      $this->system = $system;
      return $this;
    }

    /**
     * @return agentWarningType
     */
    public function getAgent()
    {
      return $this->agent;
    }

    /**
     * @param agentWarningType $agent
     * @return \StephanWoerner\ErvExiSoap\Model\responseBooking
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
     * @return \StephanWoerner\ErvExiSoap\Model\responseBooking
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

    /**
     * @return thanx
     */
    public function getThanx()
    {
      return $this->thanx;
    }

    /**
     * @param thanx $thanx
     * @return \StephanWoerner\ErvExiSoap\Model\responseBooking
     */
    public function setThanx($thanx)
    {
      $this->thanx = $thanx;
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
     * @return \StephanWoerner\ErvExiSoap\Model\responseBooking
     */
    public function setExtensions($extensions)
    {
      $this->extensions = $extensions;
      return $this;
    }

    /**
     * @return userErrorContainerType
     */
    public function getUserError()
    {
      return $this->userError;
    }

    /**
     * @param userErrorContainerType $userError
     * @return \StephanWoerner\ErvExiSoap\Model\responseBooking
     */
    public function setUserError($userError)
    {
      $this->userError = $userError;
      return $this;
    }

    /**
     * @return systemErrorContainerType
     */
    public function getSystemError()
    {
      return $this->systemError;
    }

    /**
     * @param systemErrorContainerType $systemError
     * @return \StephanWoerner\ErvExiSoap\Model\responseBooking
     */
    public function setSystemError($systemError)
    {
      $this->systemError = $systemError;
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
     * @return \StephanWoerner\ErvExiSoap\Model\responseBooking
     */
    public function setRequestID($requestID)
    {
      $this->requestID = $requestID;
      return $this;
    }

    /**
     * @return responseIDType
     */
    public function getResponseID()
    {
      return $this->responseID;
    }

    /**
     * @param responseIDType $responseID
     * @return \StephanWoerner\ErvExiSoap\Model\responseBooking
     */
    public function setResponseID($responseID)
    {
      $this->responseID = $responseID;
      return $this;
    }

}
