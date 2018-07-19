<?php

namespace StephanWoerner\ErvExiSoap\Model;

class ProlongationRqType
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
     * @return \StephanWoerner\ErvExiSoap\Model\ProlongationRqType
     */
    public function setAgreed($agreed)
    {
      $this->agreed = $agreed;
      return $this;
    }

}
