<?php

namespace StephanWoerner\ErvExiSoap\Model;

class personType
{

    /**
     * @var personNameType $personName
     */
    protected $personName = null;

    /**
     * @var date $birthdate
     */
    protected $birthdate = null;

    /**
     * @var int $age
     */
    protected $age = null;

    /**
     * @param personNameType $personName
     * @param date $birthdate
     * @param int $age
     */
    public function __construct($personName, $birthdate, $age)
    {
      $this->personName = $personName;
      $this->birthdate = $birthdate;
      $this->age = $age;
    }

    /**
     * @return personNameType
     */
    public function getPersonName()
    {
      return $this->personName;
    }

    /**
     * @param personNameType $personName
     * @return \StephanWoerner\ErvExiSoap\Model\personType
     */
    public function setPersonName($personName)
    {
      $this->personName = $personName;
      return $this;
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
     * @return \StephanWoerner\ErvExiSoap\Model\personType
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
     * @return \StephanWoerner\ErvExiSoap\Model\personType
     */
    public function setAge($age)
    {
      $this->age = $age;
      return $this;
    }

}
