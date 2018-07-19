<?php

namespace StephanWoerner\ErvExiSoap\Model;

class responseCancellation
{

    /**
     * @var systemRpType $system
     */
    protected $system = null;

    /**
     * @var policy $policy
     */
    protected $policy = null;

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
     * @param policy $policy
     * @param userErrorContainerType $userError
     * @param systemErrorContainerType $systemError
     * @param requestIDType $requestID
     * @param responseIDType $responseID
     */
    public function __construct($system, $policy, $userError, $systemError, $requestID, $responseID)
    {
      $this->system = $system;
      $this->policy = $policy;
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
     * @return \StephanWoerner\ErvExiSoap\Model\responseCancellation
     */
    public function setSystem($system)
    {
      $this->system = $system;
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
     * @return \StephanWoerner\ErvExiSoap\Model\responseCancellation
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
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
     * @return \StephanWoerner\ErvExiSoap\Model\responseCancellation
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
     * @return \StephanWoerner\ErvExiSoap\Model\responseCancellation
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
     * @return \StephanWoerner\ErvExiSoap\Model\responseCancellation
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
     * @return \StephanWoerner\ErvExiSoap\Model\responseCancellation
     */
    public function setResponseID($responseID)
    {
      $this->responseID = $responseID;
      return $this;
    }

}
