<?php

namespace StephanWoerner\ErvExiSoap\Model;

class coveredTravelersType
{

    /**
     * @var coveredTravelerType[] $coveredTraveler
     */
    protected $coveredTraveler = null;

    /**
     * @param coveredTravelerType[] $coveredTraveler
     */
    public function __construct(array $coveredTraveler)
    {
      $this->coveredTraveler = $coveredTraveler;
    }

    /**
     * @return coveredTravelerType[]
     */
    public function getCoveredTraveler()
    {
      return $this->coveredTraveler;
    }

    /**
     * @param coveredTravelerType[] $coveredTraveler
     * @return \StephanWoerner\ErvExiSoap\Model\coveredTravelersType
     */
    public function setCoveredTraveler(array $coveredTraveler)
    {
      $this->coveredTraveler = $coveredTraveler;
      return $this;
    }

}
