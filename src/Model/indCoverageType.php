<?php

namespace StephanWoerner\ErvExiSoap\Model;

class indCoverageType
{

    /**
     * @var tripCost $tripCost
     */
    protected $tripCost = null;

    /**
     * @var coveredLuggage $coveredLuggage
     */
    protected $coveredLuggage = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return tripCost
     */
    public function getTripCost()
    {
      return $this->tripCost;
    }

    /**
     * @param tripCost $tripCost
     * @return \StephanWoerner\ErvExiSoap\Model\indCoverageType
     */
    public function setTripCost($tripCost)
    {
      $this->tripCost = $tripCost;
      return $this;
    }

    /**
     * @return coveredLuggage
     */
    public function getCoveredLuggage()
    {
      return $this->coveredLuggage;
    }

    /**
     * @param coveredLuggage $coveredLuggage
     * @return \StephanWoerner\ErvExiSoap\Model\indCoverageType
     */
    public function setCoveredLuggage($coveredLuggage)
    {
      $this->coveredLuggage = $coveredLuggage;
      return $this;
    }

}
