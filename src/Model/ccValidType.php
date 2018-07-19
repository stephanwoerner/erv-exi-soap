<?php

namespace StephanWoerner\ErvExiSoap\Model;

class ccValidType
{

    /**
     * @var mm $mm
     */
    protected $mm = null;

    /**
     * @var yyyy $yyyy
     */
    protected $yyyy = null;

    /**
     * @param mm $mm
     * @param yyyy $yyyy
     */
    public function __construct($mm, $yyyy)
    {
      $this->mm = $mm;
      $this->yyyy = $yyyy;
    }

    /**
     * @return mm
     */
    public function getMm()
    {
      return $this->mm;
    }

    /**
     * @param mm $mm
     * @return \StephanWoerner\ErvExiSoap\Model\ccValidType
     */
    public function setMm($mm)
    {
      $this->mm = $mm;
      return $this;
    }

    /**
     * @return yyyy
     */
    public function getYyyy()
    {
      return $this->yyyy;
    }

    /**
     * @param yyyy $yyyy
     * @return \StephanWoerner\ErvExiSoap\Model\ccValidType
     */
    public function setYyyy($yyyy)
    {
      $this->yyyy = $yyyy;
      return $this;
    }

}
