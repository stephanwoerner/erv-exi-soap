<?php

namespace StephanWoerner\ErvExiSoap\Model;

class tripCost
{

    /**
     * @var money $amount
     */
    protected $amount = null;

    /**
     * @var currencyCodeISO4217 $currencyCode
     */
    protected $currencyCode = null;

    /**
     * @param money $amount
     * @param currencyCodeISO4217 $currencyCode
     */
    public function __construct($amount, $currencyCode)
    {
      $this->amount = $amount;
      $this->currencyCode = $currencyCode;
    }

    /**
     * @return money
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param money $amount
     * @return \StephanWoerner\ErvExiSoap\Model\tripCost
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return currencyCodeISO4217
     */
    public function getCurrencyCode()
    {
      return $this->currencyCode;
    }

    /**
     * @param currencyCodeISO4217 $currencyCode
     * @return \StephanWoerner\ErvExiSoap\Model\tripCost
     */
    public function setCurrencyCode($currencyCode)
    {
      $this->currencyCode = $currencyCode;
      return $this;
    }

}
