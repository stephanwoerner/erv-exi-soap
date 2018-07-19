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
     * @param paymentMethodType $method
     * @param ccPaymentType $cc
     * @param bankPaymentType $bank
     */
    public function __construct($method, $cc, $bank)
    {
      $this->method = $method;
      $this->cc = $cc;
      $this->bank = $bank;
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

}
