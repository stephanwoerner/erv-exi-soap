<?php

namespace StephanWoerner\ErvExiSoap\Model;

class travelType
{

    /**
     * @var time $time
     */
    protected $time = null;

    /**
     * @var TripTypeType $tripType
     */
    protected $tripType = null;

    /**
     * @var destinationType $destination
     */
    protected $destination = null;

    /**
     * @var totalTripCost $totalTripCost
     */
    protected $totalTripCost = null;

    /**
     * @var tariffCategoryType $tariffCategory
     */
    protected $tariffCategory = null;

    /**
     * @param time $time
     * @param destinationType $destination
     */
    public function __construct($time, $destination)
    {
      $this->time = $time;
      $this->destination = $destination;
    }

    /**
     * @return time
     */
    public function getTime()
    {
      return $this->time;
    }

    /**
     * @param time $time
     * @return \StephanWoerner\ErvExiSoap\Model\travelType
     */
    public function setTime($time)
    {
      $this->time = $time;
      return $this;
    }

    /**
     * @return TripTypeType
     */
    public function getTripType()
    {
      return $this->tripType;
    }

    /**
     * @param TripTypeType $tripType
     * @return \StephanWoerner\ErvExiSoap\Model\travelType
     */
    public function setTripType($tripType)
    {
      $this->tripType = $tripType;
      return $this;
    }

    /**
     * @return destinationType
     */
    public function getDestination()
    {
      return $this->destination;
    }

    /**
     * @param destinationType $destination
     * @return \StephanWoerner\ErvExiSoap\Model\travelType
     */
    public function setDestination($destination)
    {
      $this->destination = $destination;
      return $this;
    }

    /**
     * @return totalTripCost
     */
    public function getTotalTripCost()
    {
      return $this->totalTripCost;
    }

    /**
     * @param totalTripCost $totalTripCost
     * @return \StephanWoerner\ErvExiSoap\Model\travelType
     */
    public function setTotalTripCost($totalTripCost)
    {
      $this->totalTripCost = $totalTripCost;
      return $this;
    }

    /**
     * @return tariffCategoryType
     */
    public function getTariffCategory()
    {
      return $this->tariffCategory;
    }

    /**
     * @param tariffCategoryType $tariffCategory
     * @return \StephanWoerner\ErvExiSoap\Model\travelType
     */
    public function setTariffCategory($tariffCategory)
    {
      $this->tariffCategory = $tariffCategory;
      return $this;
    }

}
