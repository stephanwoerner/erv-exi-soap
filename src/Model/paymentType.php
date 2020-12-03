<?php

namespace StephanWoerner\ErvExiSoap\Model;

class paymentType
{

    /**
     * @var paymentMethodType $method
     */
    protected $method = null;

    /**
     * @var ccPaymentType $cc
     */
    protected $cc = null;

    /**
     * @var bankPaymentType $bank
     */
    protected $bank = null;

    /**
     * @var apPaymentType $amazonPay
     */
    protected $amazonPay = null;

    /**
     * @param paymentMethodType $method
     * @param ccPaymentType $cc
     * @param bankPaymentType $bank
     * @param apPaymentType $amazonPay
     */
    public function __construct($method, $cc, $bank, $amazonPay)
    {
      $this->method = $method;
      $this->cc = $cc;
      $this->bank = $bank;
      $this->amazonPay = $amazonPay;
    }

    /**
     * @return paymentMethodType
     */
    public function getMethod()
    {
      return $this->method;
    }

    /**
     * @param paymentMethodType $method
     * @return \StephanWoerner\ErvExiSoap\Model\paymentType
     */
    public function setMethod($method)
    {
      $this->method = $method;
      return $this;
    }

    /**
     * @return ccPaymentType
     */
    public function getCc()
    {
      return $this->cc;
    }

    /**
     * @param ccPaymentType $cc
     * @return \StephanWoerner\ErvExiSoap\Model\paymentType
     */
    public function setCc($cc)
    {
      $this->cc = $cc;
      return $this;
    }

    /**
     * @return bankPaymentType
     */
    public function getBank()
    {
      return $this->bank;
    }

    /**
     * @param bankPaymentType $bank
     * @return \StephanWoerner\ErvExiSoap\Model\paymentType
     */
    public function setBank($bank)
    {
      $this->bank = $bank;
      return $this;
    }

    /**
     * @return apPaymentType
     */
    public function getAmazonPay()
    {
      return $this->amazonPay;
    }

    /**
     * @param apPaymentType $amazonPay
     * @return \StephanWoerner\ErvExiSoap\Model\paymentType
     */
    public function setAmazonPay($amazonPay)
    {
      $this->amazonPay = $amazonPay;
      return $this;
    }

}
