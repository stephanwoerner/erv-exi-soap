<?php

namespace StephanWoerner\ErvExiSoap\Model;

class offersRqType
{

    /**
     * @var offerRq $offer
     */
    protected $offer = null;

    /**
     * @param offerRq $offer
     */
    public function __construct($offer)
    {
      $this->offer = $offer;
    }

    /**
     * @return offerRq
     */
    public function getOffer()
    {
      return $this->offer;
    }

    /**
     * @param offerRq $offer
     * @return \StephanWoerner\ErvExiSoap\Model\offersRqType
     */
    public function setOffer($offer)
    {
      $this->offer = $offer;
      return $this;
    }

}
