<?php

namespace StephanWoerner\ErvExiSoap\Model;

class responsePayPageUrl
{

    /**
     * @var systemRpType $system
     */
    protected $system = null;

    /**
     * @var payPageUrl $payPageUrl
     */
    protected $payPageUrl = null;

    /**
     * @var systemErrorContainerType $systemError
     */
    protected $systemError = null;

    /**
     * @var userErrorContainerType $userError
     */
    protected $userError = null;

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
     * @param payPageUrl $payPageUrl
     * @param systemErrorContainerType $systemError
     * @param userErrorContainerType $userError
     * @param requestIDType $requestID
     * @param responseIDType $responseID
     */
    public function __construct($system, $payPageUrl, $systemError, $userError, $requestID, $responseID)
    {
      $this->system = $system;
      $this->payPageUrl = $payPageUrl;
      $this->systemError = $systemError;
      $this->userError = $userError;
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
     * @return \StephanWoerner\ErvExiSoap\Model\responsePayPageUrl
     */
    public function setSystem($system)
    {
      $this->system = $system;
      return $this;
    }

    /**
     * @return payPageUrl
     */
    public function getPayPageUrl()
    {
      return $this->payPageUrl;
    }

    /**
     * @param payPageUrl $payPageUrl
     * @return \StephanWoerner\ErvExiSoap\Model\responsePayPageUrl
     */
    public function setPayPageUrl($payPageUrl)
    {
      $this->payPageUrl = $payPageUrl;
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
     * @return \StephanWoerner\ErvExiSoap\Model\responsePayPageUrl
     */
    public function setSystemError($systemError)
    {
      $this->systemError = $systemError;
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
     * @return \StephanWoerner\ErvExiSoap\Model\responsePayPageUrl
     */
    public function setUserError($userError)
    {
      $this->userError = $userError;
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
     * @return \StephanWoerner\ErvExiSoap\Model\responsePayPageUrl
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
     * @return \StephanWoerner\ErvExiSoap\Model\responsePayPageUrl
     */
    public function setResponseID($responseID)
    {
      $this->responseID = $responseID;
      return $this;
    }

}
