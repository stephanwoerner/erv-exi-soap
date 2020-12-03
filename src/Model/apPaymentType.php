<?php

namespace StephanWoerner\ErvExiSoap\Model;

class apPaymentType
{

    /**
     * @var string $apSellerId
     */
    protected $apSellerId = null;

    /**
     * @var boolean $apExternalAuthorization
     */
    protected $apExternalAuthorization = null;

    /**
     * @var string $apAuthorizationId
     */
    protected $apAuthorizationId = null;

    /**
     * @var string $apOrderId
     */
    protected $apOrderId = null;

    /**
     * @var string $apBillingAgreementId
     */
    protected $apBillingAgreementId = null;

    /**
     * @var apAmount $apAmount
     */
    protected $apAmount = null;

    /**
     * @param string $apSellerId
     * @param boolean $apExternalAuthorization
     */
    public function __construct($apSellerId, $apExternalAuthorization)
    {
      $this->apSellerId = $apSellerId;
      $this->apExternalAuthorization = $apExternalAuthorization;
    }

    /**
     * @return string
     */
    public function getApSellerId()
    {
      return $this->apSellerId;
    }

    /**
     * @param string $apSellerId
     * @return \StephanWoerner\ErvExiSoap\Model\apPaymentType
     */
    public function setApSellerId($apSellerId)
    {
      $this->apSellerId = $apSellerId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getApExternalAuthorization()
    {
      return $this->apExternalAuthorization;
    }

    /**
     * @param boolean $apExternalAuthorization
     * @return \StephanWoerner\ErvExiSoap\Model\apPaymentType
     */
    public function setApExternalAuthorization($apExternalAuthorization)
    {
      $this->apExternalAuthorization = $apExternalAuthorization;
      return $this;
    }

    /**
     * @return string
     */
    public function getApAuthorizationId()
    {
      return $this->apAuthorizationId;
    }

    /**
     * @param string $apAuthorizationId
     * @return \StephanWoerner\ErvExiSoap\Model\apPaymentType
     */
    public function setApAuthorizationId($apAuthorizationId)
    {
      $this->apAuthorizationId = $apAuthorizationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getApOrderId()
    {
      return $this->apOrderId;
    }

    /**
     * @param string $apOrderId
     * @return \StephanWoerner\ErvExiSoap\Model\apPaymentType
     */
    public function setApOrderId($apOrderId)
    {
      $this->apOrderId = $apOrderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getApBillingAgreementId()
    {
      return $this->apBillingAgreementId;
    }

    /**
     * @param string $apBillingAgreementId
     * @return \StephanWoerner\ErvExiSoap\Model\apPaymentType
     */
    public function setApBillingAgreementId($apBillingAgreementId)
    {
      $this->apBillingAgreementId = $apBillingAgreementId;
      return $this;
    }

    /**
     * @return apAmount
     */
    public function getApAmount()
    {
      return $this->apAmount;
    }

    /**
     * @param apAmount $apAmount
     * @return \StephanWoerner\ErvExiSoap\Model\apPaymentType
     */
    public function setApAmount($apAmount)
    {
      $this->apAmount = $apAmount;
      return $this;
    }

}
