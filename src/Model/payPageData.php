<?php

namespace StephanWoerner\ErvExiSoap\Model;

class payPageData
{

    /**
     * @var anyURI $successUrl
     */
    protected $successUrl = null;

    /**
     * @var anyURI $errorUrl
     */
    protected $errorUrl = null;

    /**
     * @var anyURI $notificationFailedUrl
     */
    protected $notificationFailedUrl = null;

    /**
     * @var ClientTypeType $clientType
     */
    protected $clientType = null;

    /**
     * @var creditcardHolderType $creditCardHolder
     */
    protected $creditCardHolder = null;

    /**
     * @param anyURI $successUrl
     * @param anyURI $errorUrl
     * @param anyURI $notificationFailedUrl
     * @param ClientTypeType $clientType
     * @param creditcardHolderType $creditCardHolder
     */
    public function __construct($successUrl, $errorUrl, $notificationFailedUrl, $clientType, $creditCardHolder)
    {
      $this->successUrl = $successUrl;
      $this->errorUrl = $errorUrl;
      $this->notificationFailedUrl = $notificationFailedUrl;
      $this->clientType = $clientType;
      $this->creditCardHolder = $creditCardHolder;
    }

    /**
     * @return anyURI
     */
    public function getSuccessUrl()
    {
      return $this->successUrl;
    }

    /**
     * @param anyURI $successUrl
     * @return \StephanWoerner\ErvExiSoap\Model\payPageData
     */
    public function setSuccessUrl($successUrl)
    {
      $this->successUrl = $successUrl;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getErrorUrl()
    {
      return $this->errorUrl;
    }

    /**
     * @param anyURI $errorUrl
     * @return \StephanWoerner\ErvExiSoap\Model\payPageData
     */
    public function setErrorUrl($errorUrl)
    {
      $this->errorUrl = $errorUrl;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getNotificationFailedUrl()
    {
      return $this->notificationFailedUrl;
    }

    /**
     * @param anyURI $notificationFailedUrl
     * @return \StephanWoerner\ErvExiSoap\Model\payPageData
     */
    public function setNotificationFailedUrl($notificationFailedUrl)
    {
      $this->notificationFailedUrl = $notificationFailedUrl;
      return $this;
    }

    /**
     * @return ClientTypeType
     */
    public function getClientType()
    {
      return $this->clientType;
    }

    /**
     * @param ClientTypeType $clientType
     * @return \StephanWoerner\ErvExiSoap\Model\payPageData
     */
    public function setClientType($clientType)
    {
      $this->clientType = $clientType;
      return $this;
    }

    /**
     * @return creditcardHolderType
     */
    public function getCreditCardHolder()
    {
      return $this->creditCardHolder;
    }

    /**
     * @param creditcardHolderType $creditCardHolder
     * @return \StephanWoerner\ErvExiSoap\Model\payPageData
     */
    public function setCreditCardHolder($creditCardHolder)
    {
      $this->creditCardHolder = $creditCardHolder;
      return $this;
    }

}
