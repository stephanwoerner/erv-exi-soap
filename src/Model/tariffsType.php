<?php

namespace StephanWoerner\ErvExiSoap\Model;

class tariffsType
{

    /**
     * @var tariff[] $tariff
     */
    protected $tariff = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return tariff[]
     */
    public function getTariff()
    {
      return $this->tariff;
    }

    /**
     * @param tariff[] $tariff
     * @return \StephanWoerner\ErvExiSoap\Model\tariffsType
     */
    public function setTariff(array $tariff = null)
    {
      $this->tariff = $tariff;
      return $this;
    }

}
