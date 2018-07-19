<?php

namespace StephanWoerner\ErvExiSoap\Model;

class personNameType
{

    /**
     * @var addressTravellerType $address
     */
    protected $address = null;

    /**
     * @var StringLength1to30 $prename
     */
    protected $prename = null;

    /**
     * @var StringLength1to60 $surname
     */
    protected $surname = null;

    /**
     * @param StringLength1to30 $prename
     * @param StringLength1to60 $surname
     */
    public function __construct($prename, $surname)
    {
      $this->prename = $prename;
      $this->surname = $surname;
    }

    /**
     * @return addressTravellerType
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param addressTravellerType $address
     * @return \StephanWoerner\ErvExiSoap\Model\personNameType
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return StringLength1to30
     */
    public function getPrename()
    {
      return $this->prename;
    }

    /**
     * @param StringLength1to30 $prename
     * @return \StephanWoerner\ErvExiSoap\Model\personNameType
     */
    public function setPrename($prename)
    {
      $this->prename = $prename;
      return $this;
    }

    /**
     * @return StringLength1to60
     */
    public function getSurname()
    {
      return $this->surname;
    }

    /**
     * @param StringLength1to60 $surname
     * @return \StephanWoerner\ErvExiSoap\Model\personNameType
     */
    public function setSurname($surname)
    {
      $this->surname = $surname;
      return $this;
    }

}
