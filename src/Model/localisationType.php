<?php

namespace StephanWoerner\ErvExiSoap\Model;

class localisationType
{

    /**
     * @var AlphaStringLength3 $countryCode
     */
    protected $countryCode = null;

    /**
     * @var AlphaStringLength2 $languageCode
     */
    protected $languageCode = null;

    /**
     * @var AlphaStringLength3 $currencyCode
     */
    protected $currencyCode = null;

    /**
     * @param AlphaStringLength3 $countryCode
     * @param AlphaStringLength2 $languageCode
     * @param AlphaStringLength3 $currencyCode
     */
    public function __construct($countryCode, $languageCode, $currencyCode)
    {
      $this->countryCode = $countryCode;
      $this->languageCode = $languageCode;
      $this->currencyCode = $currencyCode;
    }

    /**
     * @return AlphaStringLength3
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param AlphaStringLength3 $countryCode
     * @return \StephanWoerner\ErvExiSoap\Model\localisationType
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

    /**
     * @return AlphaStringLength2
     */
    public function getLanguageCode()
    {
      return $this->languageCode;
    }

    /**
     * @param AlphaStringLength2 $languageCode
     * @return \StephanWoerner\ErvExiSoap\Model\localisationType
     */
    public function setLanguageCode($languageCode)
    {
      $this->languageCode = $languageCode;
      return $this;
    }

    /**
     * @return AlphaStringLength3
     */
    public function getCurrencyCode()
    {
      return $this->currencyCode;
    }

    /**
     * @param AlphaStringLength3 $currencyCode
     * @return \StephanWoerner\ErvExiSoap\Model\localisationType
     */
    public function setCurrencyCode($currencyCode)
    {
      $this->currencyCode = $currencyCode;
      return $this;
    }

}
