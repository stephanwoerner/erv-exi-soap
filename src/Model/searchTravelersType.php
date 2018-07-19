<?php

namespace StephanWoerner\ErvExiSoap\Model;

class searchTravelersType
{

    /**
     * @var searchTravelerType[] $searchTraveler
     */
    protected $searchTraveler = null;

    /**
     * @param searchTravelerType[] $searchTraveler
     */
    public function __construct(array $searchTraveler)
    {
      $this->searchTraveler = $searchTraveler;
    }

    /**
     * @return searchTravelerType[]
     */
    public function getSearchTraveler()
    {
      return $this->searchTraveler;
    }

    /**
     * @param searchTravelerType[] $searchTraveler
     * @return \StephanWoerner\ErvExiSoap\Model\searchTravelersType
     */
    public function setSearchTraveler(array $searchTraveler)
    {
      $this->searchTraveler = $searchTraveler;
      return $this;
    }

}
