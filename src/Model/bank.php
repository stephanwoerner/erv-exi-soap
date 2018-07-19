<?php

namespace StephanWoerner\ErvExiSoap\Model;

class bank
{

    /**
     * @var boolean $accepted
     */
    protected $accepted = null;

    /**
     * @param boolean $accepted
     */
    public function __construct($accepted)
    {
      $this->accepted = $accepted;
    }

    /**
     * @return boolean
     */
    public function getAccepted()
    {
      return $this->accepted;
    }

    /**
     * @param boolean $accepted
     * @return \StephanWoerner\ErvExiSoap\Model\bank
     */
    public function setAccepted($accepted)
    {
      $this->accepted = $accepted;
      return $this;
    }

}
