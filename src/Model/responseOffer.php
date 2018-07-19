<?php

namespace StephanWoerner\ErvExiSoap\Model;

class responseOffer
{

    /**
     * @var systemRpType $system
     */
    protected $system = null;

    /**
     * @var StringLength1to250 $noCustomerCountryInfoText
     */
    protected $noCustomerCountryInfoText = null;

    /**
     * @var offersRpType $offers
     */
    protected $offers = null;

    /**
     * @var insConditionsType $insConditions
     */
    protected $insConditions = null;

    /**
     * @var ProlongationRpType $prolongation
     */
    protected $prolongation = null;

    /**
     * @var extensionsType $extensions
     */
    protected $extensions = null;

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
     * @param StringLength1to250 $noCustomerCountryInfoText
     * @param offersRpType $offers
     * @param insConditionsType $insConditions
     * @param ProlongationRpType $prolongation
     * @param extensionsType $extensions
     * @param systemErrorContainerType $systemError
     * @param userErrorContainerType $userError
     * @param requestIDType $requestID
     * @param responseIDType $responseID
     */
    public function __construct($system, $noCustomerCountryInfoText, $offers, $insConditions, $prolongation, $extensions, $systemError, $userError, $requestID, $responseID)
    {
      $this->system = $system;
      $this->noCustomerCountryInfoText = $noCustomerCountryInfoText;
      $this->offers = $offers;
      $this->insConditions = $insConditions;
      $this->prolongation = $prolongation;
      $this->extensions = $extensions;
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
     * @return \StephanWoerner\ErvExiSoap\Model\responseOffer
     */
    public function setSystem($system)
    {
      $this->system = $system;
      return $this;
    }

    /**
     * @return StringLength1to250
     */
    public function getNoCustomerCountryInfoText()
    {
      return $this->noCustomerCountryInfoText;
    }

    /**
     * @param StringLength1to250 $noCustomerCountryInfoText
     * @return \StephanWoerner\ErvExiSoap\Model\responseOffer
     */
    public function setNoCustomerCountryInfoText($noCustomerCountryInfoText)
    {
      $this->noCustomerCountryInfoText = $noCustomerCountryInfoText;
      return $this;
    }

    /**
     * @return offersRpType
     */
    public function getOffers()
    {
      return $this->offers;
    }

    /**
     * @param offersRpType $offers
     * @return \StephanWoerner\ErvExiSoap\Model\responseOffer
     */
    public function setOffers($offers)
    {
      $this->offers = $offers;
      return $this;
    }

    /**
     * @return insConditionsType
     */
    public function getInsConditions()
    {
      return $this->insConditions;
    }

    /**
     * @param insConditionsType $insConditions
     * @return \StephanWoerner\ErvExiSoap\Model\responseOffer
     */
    public function setInsConditions($insConditions)
    {
      $this->insConditions = $insConditions;
      return $this;
    }

    /**
     * @return ProlongationRpType
     */
    public function getProlongation()
    {
      return $this->prolongation;
    }

    /**
     * @param ProlongationRpType $prolongation
     * @return \StephanWoerner\ErvExiSoap\Model\responseOffer
     */
    public function setProlongation($prolongation)
    {
      $this->prolongation = $prolongation;
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
     * @return \StephanWoerner\ErvExiSoap\Model\responseOffer
     */
    public function setExtensions($extensions)
    {
      $this->extensions = $extensions;
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
     * @return \StephanWoerner\ErvExiSoap\Model\responseOffer
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
     * @return \StephanWoerner\ErvExiSoap\Model\responseOffer
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
     * @return \StephanWoerner\ErvExiSoap\Model\responseOffer
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
     * @return \StephanWoerner\ErvExiSoap\Model\responseOffer
     */
    public function setResponseID($responseID)
    {
      $this->responseID = $responseID;
      return $this;
    }

}
