<?php

namespace StephanWoerner\ErvExiSoap\Model;

class insConditionsRqType
{

    /**
     * @var agreed $agreed
     */
    protected $agreed = null;

    /**
     * @param agreed $agreed
     */
    public function __construct($agreed)
    {
      $this->agreed = $agreed;
    }

    /**
     * @return agreed
     */
    public function getAgreed()
    {
      return $this->agreed;
    }

    /**
     * @param agreed $agreed
     * @return \StephanWoerner\ErvExiSoap\Model\insConditionsRqType
     */
    public function setAgreed($agreed)
    {
      $this->agreed = $agreed;
      return $this;
    }

}
