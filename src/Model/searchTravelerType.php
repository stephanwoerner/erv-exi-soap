<?php

namespace StephanWoerner\ErvExiSoap\Model;

class searchTravelerType
{

    /**
     * @var date $birthdate
     */
    protected $birthdate = null;

    /**
     * @var int $age
     */
    protected $age = null;

    /**
     * @var indCoverageType $indCoverage
     */
    protected $indCoverage = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @param date $birthdate
     * @param int $age
     * @param int $id
     */
    public function __construct($birthdate, $age, $id)
    {
      $this->birthdate = $birthdate;
      $this->age = $age;
      $this->id = $id;
    }

    /**
     * @return date
     */
    public function getBirthdate()
    {
      return $this->birthdate;
    }

    /**
     * @param date $birthdate
     * @return \StephanWoerner\ErvExiSoap\Model\searchTravelerType
     */
    public function setBirthdate($birthdate)
    {
      $this->birthdate = $birthdate;
      return $this;
    }

    /**
     * @return int
     */
    public function getAge()
    {
      return $this->age;
    }

    /**
     * @param int $age
     * @return \StephanWoerner\ErvExiSoap\Model\searchTravelerType
     */
    public function setAge($age)
    {
      $this->age = $age;
      return $this;
    }

    /**
     * @return indCoverageType
     */
    public function getIndCoverage()
    {
      return $this->indCoverage;
    }

    /**
     * @param indCoverageType $indCoverage
     * @return \StephanWoerner\ErvExiSoap\Model\searchTravelerType
     */
    public function setIndCoverage($indCoverage)
    {
      $this->indCoverage = $indCoverage;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \StephanWoerner\ErvExiSoap\Model\searchTravelerType
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

}
