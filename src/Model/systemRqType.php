<?php

namespace StephanWoerner\ErvExiSoap\Model;

class systemRqType
{

    /**
     * @var boolean $testIdentifier
     */
    protected $testIdentifier = null;

    /**
     * @var localisationType $localisation
     */
    protected $localisation = null;

    /**
     * @var version $version
     */
    protected $version = null;

    /**
     * @param boolean $testIdentifier
     * @param localisationType $localisation
     */
    public function __construct($testIdentifier, $localisation)
    {
      $this->testIdentifier = $testIdentifier;
      $this->localisation = $localisation;
    }

    /**
     * @return boolean
     */
    public function getTestIdentifier()
    {
      return $this->testIdentifier;
    }

    /**
     * @param boolean $testIdentifier
     * @return \StephanWoerner\ErvExiSoap\Model\systemRqType
     */
    public function setTestIdentifier($testIdentifier)
    {
      $this->testIdentifier = $testIdentifier;
      return $this;
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
     * @return \StephanWoerner\ErvExiSoap\Model\systemRqType
     */
    public function setLocalisation($localisation)
    {
      $this->localisation = $localisation;
      return $this;
    }

    /**
     * @return version
     */
    public function getVersion()
    {
      return $this->version;
    }

    /**
     * @param version $version
     * @return \StephanWoerner\ErvExiSoap\Model\systemRqType
     */
    public function setVersion($version)
    {
      $this->version = $version;
      return $this;
    }

}
