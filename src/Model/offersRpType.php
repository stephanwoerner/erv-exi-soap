<?php

namespace StephanWoerner\ErvExiSoap\Model;

class offersRpType extends serviceType
{

    /**
     * @var offer[] $offer
     */
    protected $offer = null;

    /**
     * @param StringLength1to100 $serviceDesc
     * @param servicePremium $servicePremium
     * @param StringLength0to100 $serviceDescAndPremium
     * @param tariffsType $tariffs
     */
    public function __construct($serviceDesc, $servicePremium, $serviceDescAndPremium, $tariffs)
    {
      parent::__construct($serviceDesc, $servicePremium, $serviceDescAndPremium, $tariffs);
    }

    /**
     * @return offer[]
     */
    public function getOffer()
    {
      return $this->offer;
    }

    /**
     * @param offer[] $offer
     * @return \StephanWoerner\ErvExiSoap\Model\offersRpType
     */
    public function setOffer(array $offer = null)
    {
      $this->offer = $offer;
      return $this;
    }

}
