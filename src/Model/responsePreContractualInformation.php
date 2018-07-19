<?php

namespace StephanWoerner\ErvExiSoap\Model;

class responsePreContractualInformation
{

    /**
     * @var systemRpType $system
     */
    protected $system = null;

    /**
     * @var StringLength1to50 $preContractualInformationID
     */
    protected $preContractualInformationID = null;

    /**
     * @var anyURI $recordOfAdviceUrl
     */
    protected $recordOfAdviceUrl = null;

    /**
     * @var preContractualInformationType $preContractualInformation
     */
    protected $preContractualInformation = null;

    /**
     * @var preContractualInformationText $preContractualInformationText
     */
    protected $preContractualInformationText = null;

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
     * @param StringLength1to50 $preContractualInformationID
     * @param anyURI $recordOfAdviceUrl
     * @param preContractualInformationType $preContractualInformation
     * @param preContractualInformationText $preContractualInformationText
     * @param extensionsType $extensions
     * @param userErrorContainerType $userError
     * @param systemErrorContainerType $systemError
     * @param requestIDType $requestID
     * @param responseIDType $responseID
     */
    public function __construct($system, $preContractualInformationID, $recordOfAdviceUrl, $preContractualInformation, $preContractualInformationText, $extensions, $userError, $systemError, $requestID, $responseID)
    {
      $this->system = $system;
      $this->preContractualInformationID = $preContractualInformationID;
      $this->recordOfAdviceUrl = $recordOfAdviceUrl;
      $this->preContractualInformation = $preContractualInformation;
      $this->preContractualInformationText = $preContractualInformationText;
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
     * @return \StephanWoerner\ErvExiSoap\Model\responsePreContractualInformation
     */
    public function setSystem($system)
    {
      $this->system = $system;
      return $this;
    }

    /**
     * @return StringLength1to50
     */
    public function getPreContractualInformationID()
    {
      return $this->preContractualInformationID;
    }

    /**
     * @param StringLength1to50 $preContractualInformationID
     * @return \StephanWoerner\ErvExiSoap\Model\responsePreContractualInformation
     */
    public function setPreContractualInformationID($preContractualInformationID)
    {
      $this->preContractualInformationID = $preContractualInformationID;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getRecordOfAdviceUrl()
    {
      return $this->recordOfAdviceUrl;
    }

    /**
     * @param anyURI $recordOfAdviceUrl
     * @return \StephanWoerner\ErvExiSoap\Model\responsePreContractualInformation
     */
    public function setRecordOfAdviceUrl($recordOfAdviceUrl)
    {
      $this->recordOfAdviceUrl = $recordOfAdviceUrl;
      return $this;
    }

    /**
     * @return preContractualInformationType
     */
    public function getPreContractualInformation()
    {
      return $this->preContractualInformation;
    }

    /**
     * @param preContractualInformationType $preContractualInformation
     * @return \StephanWoerner\ErvExiSoap\Model\responsePreContractualInformation
     */
    public function setPreContractualInformation($preContractualInformation)
    {
      $this->preContractualInformation = $preContractualInformation;
      return $this;
    }

    /**
     * @return preContractualInformationText
     */
    public function getPreContractualInformationText()
    {
      return $this->preContractualInformationText;
    }

    /**
     * @param preContractualInformationText $preContractualInformationText
     * @return \StephanWoerner\ErvExiSoap\Model\responsePreContractualInformation
     */
    public function setPreContractualInformationText($preContractualInformationText)
    {
      $this->preContractualInformationText = $preContractualInformationText;
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
     * @return \StephanWoerner\ErvExiSoap\Model\responsePreContractualInformation
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
     * @return \StephanWoerner\ErvExiSoap\Model\responsePreContractualInformation
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
     * @return \StephanWoerner\ErvExiSoap\Model\responsePreContractualInformation
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
     * @return \StephanWoerner\ErvExiSoap\Model\responsePreContractualInformation
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
     * @return \StephanWoerner\ErvExiSoap\Model\responsePreContractualInformation
     */
    public function setResponseID($responseID)
    {
      $this->responseID = $responseID;
      return $this;
    }

}
