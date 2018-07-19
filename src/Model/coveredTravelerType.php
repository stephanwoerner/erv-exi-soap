<?php

namespace StephanWoerner\ErvExiSoap\Model;

class coveredTravelerType
{

    /**
     * @var personType $coveredPerson
     */
    protected $coveredPerson = null;

    /**
     * @var indCoverageType $indCoverage
     */
    protected $indCoverage = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @param personType $coveredPerson
     * @param int $ID
     */
    public function __construct($coveredPerson, $ID)
    {
      $this->coveredPerson = $coveredPerson;
      $this->ID = $ID;
    }

    /**
     * @return personType
     */
    public function getCoveredPerson()
    {
      return $this->coveredPerson;
    }

    /**
     * @param personType $coveredPerson
     * @return \StephanWoerner\ErvExiSoap\Model\coveredTravelerType
     */
    public function setCoveredPerson($coveredPerson)
    {
      $this->coveredPerson = $coveredPerson;
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
     * @return \StephanWoerner\ErvExiSoap\Model\coveredTravelerType
     */
    public function setIndCoverage($indCoverage)
    {
      $this->indCoverage = $indCoverage;
      return $this;
    }

    /**
     * @return int
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param int $ID
     * @return \StephanWoerner\ErvExiSoap\Model\coveredTravelerType
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

}
