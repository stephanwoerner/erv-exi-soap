<?php

namespace StephanWoerner\ErvExiSoap\Model;

class cc
{

    /**
     * @var acceptedCard $acceptedCard
     */
    protected $acceptedCard = null;

    /**
     * @var boolean $accepted
     */
    protected $accepted = null;

    /**
     * @param acceptedCard $acceptedCard
     * @param boolean $accepted
     */
    public function __construct($acceptedCard, $accepted)
    {
      $this->acceptedCard = $acceptedCard;
      $this->accepted = $accepted;
    }

    /**
     * @return acceptedCard
     */
    public function getAcceptedCard()
    {
      return $this->acceptedCard;
    }

    /**
     * @param acceptedCard $acceptedCard
     * @return \StephanWoerner\ErvExiSoap\Model\cc
     */
    public function setAcceptedCard($acceptedCard)
    {
      $this->acceptedCard = $acceptedCard;
      return $this;
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
     * @return \StephanWoerner\ErvExiSoap\Model\cc
     */
    public function setAccepted($accepted)
    {
      $this->accepted = $accepted;
      return $this;
    }

}
