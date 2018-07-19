<?php

namespace StephanWoerner\ErvExiSoap\Model;

class destinationType
{

    /**
     * @var AlphaStringLength3[] $countryCode
     */
    protected $countryCode = null;

    /**
     * @var AlphaStringLength3[] $airportCode
     */
    protected $airportCode = null;

    /**
     * @param AlphaStringLength3[] $countryCode
     * @param AlphaStringLength3[] $airportCode
     */
    public function __construct(array $countryCode, array $airportCode)
    {
      $this->countryCode = $countryCode;
      $this->airportCode = $airportCode;
    }

    /**
     * @return AlphaStringLength3[]
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param AlphaStringLength3[] $countryCode
     * @return \StephanWoerner\ErvExiSoap\Model\destinationType
     */
    public function setCountryCode(array $countryCode)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

    /**
     * @return AlphaStringLength3[]
     */
    public function getAirportCode()
    {
      return $this->airportCode;
    }

    /**
     * @param AlphaStringLength3[] $airportCode
     * @return \StephanWoerner\ErvExiSoap\Model\destinationType
     */
    public function setAirportCode(array $airportCode)
    {
      $this->airportCode = $airportCode;
      return $this;
    }

}
