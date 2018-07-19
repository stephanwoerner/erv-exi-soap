<?php

namespace StephanWoerner\ErvExiSoap\Model;

class systemRpType
{

    /**
     * @var localisationType $localisation
     */
    protected $localisation = null;

    /**
     * @param localisationType $localisation
     */
    public function __construct($localisation)
    {
      $this->localisation = $localisation;
    }

    /**
     * @return localisationType
     */
    public function getLocalisation()
    {
      return $this->localisation;
    }

    /**
     * @param localisationType $localisation
     * @return \StephanWoerner\ErvExiSoap\Model\systemRpType
     */
    public function setLocalisation($localisation)
    {
      $this->localisation = $localisation;
      return $this;
    }

}
