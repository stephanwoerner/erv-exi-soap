<?php

namespace StephanWoerner\ErvExiSoap\Model;

class tariff
{

    /**
     * @var StringLength1to6 $key
     */
    protected $key = null;

    /**
     * @var premium $premium
     */
    protected $premium = null;

    /**
     * @var renewalPremium $renewalPremium
     */
    protected $renewalPremium = null;

    /**
     * @param StringLength1to6 $key
     * @param premium $premium
     * @param renewalPremium $renewalPremium
     */
    public function __construct($key, $premium, $renewalPremium)
    {
      $this->key = $key;
      $this->premium = $premium;
      $this->renewalPremium = $renewalPremium;
    }

    /**
     * @return StringLength1to6
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param StringLength1to6 $key
     * @return \StephanWoerner\ErvExiSoap\Model\tariff
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return premium
     */
    public function getPremium()
    {
      return $this->premium;
    }

    /**
     * @param premium $premium
     * @return \StephanWoerner\ErvExiSoap\Model\tariff
     */
    public function setPremium($premium)
    {
      $this->premium = $premium;
      return $this;
    }

    /**
     * @return renewalPremium
     */
    public function getRenewalPremium()
    {
      return $this->renewalPremium;
    }

    /**
     * @param renewalPremium $renewalPremium
     * @return \StephanWoerner\ErvExiSoap\Model\tariff
     */
    public function setRenewalPremium($renewalPremium)
    {
      $this->renewalPremium = $renewalPremium;
      return $this;
    }

}
