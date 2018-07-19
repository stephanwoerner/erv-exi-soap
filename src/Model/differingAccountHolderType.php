<?php

namespace StephanWoerner\ErvExiSoap\Model;

class differingAccountHolderType
{

    /**
     * @var addressDifferingAccountHolderType $address
     */
    protected $address = null;

    /**
     * @var StringLength0to30 $prename
     */
    protected $prename = null;

    /**
     * @var StringLength1to30 $surname
     */
    protected $surname = null;

    /**
     * @var StringLength1to30 $streetAndNr
     */
    protected $streetAndNr = null;

    /**
     * @var StringLength1to7 $zipCode
     */
    protected $zipCode = null;

    /**
     * @var StringLength1to30 $city
     */
    protected $city = null;

    /**
     * @var AlphaStringLength3 $countryCode
     */
    protected $countryCode = null;

    /**
     * @var StringLength1to100 $email
     */
    protected $email = null;

    /**
     * @param StringLength0to30 $prename
     * @param StringLength1to30 $surname
     * @param StringLength1to30 $streetAndNr
     * @param StringLength1to7 $zipCode
     * @param StringLength1to30 $city
     * @param AlphaStringLength3 $countryCode
     * @param StringLength1to100 $email
     */
    public function __construct($prename, $surname, $streetAndNr, $zipCode, $city, $countryCode, $email)
    {
      $this->prename = $prename;
      $this->surname = $surname;
      $this->streetAndNr = $streetAndNr;
      $this->zipCode = $zipCode;
      $this->city = $city;
      $this->countryCode = $countryCode;
      $this->email = $email;
    }

    /**
     * @return addressDifferingAccountHolderType
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param addressDifferingAccountHolderType $address
     * @return \StephanWoerner\ErvExiSoap\Model\differingAccountHolderType
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return StringLength0to30
     */
    public function getPrename()
    {
      return $this->prename;
    }

    /**
     * @param StringLength0to30 $prename
     * @return \StephanWoerner\ErvExiSoap\Model\differingAccountHolderType
     */
    public function setPrename($prename)
    {
      $this->prename = $prename;
      return $this;
    }

    /**
     * @return StringLength1to30
     */
    public function getSurname()
    {
      return $this->surname;
    }

    /**
     * @param StringLength1to30 $surname
     * @return \StephanWoerner\ErvExiSoap\Model\differingAccountHolderType
     */
    public function setSurname($surname)
    {
      $this->surname = $surname;
      return $this;
    }

    /**
     * @return StringLength1to30
     */
    public function getStreetAndNr()
    {
      return $this->streetAndNr;
    }

    /**
     * @param StringLength1to30 $streetAndNr
     * @return \StephanWoerner\ErvExiSoap\Model\differingAccountHolderType
     */
    public function setStreetAndNr($streetAndNr)
    {
      $this->streetAndNr = $streetAndNr;
      return $this;
    }

    /**
     * @return StringLength1to7
     */
    public function getZipCode()
    {
      return $this->zipCode;
    }

    /**
     * @param StringLength1to7 $zipCode
     * @return \StephanWoerner\ErvExiSoap\Model\differingAccountHolderType
     */
    public function setZipCode($zipCode)
    {
      $this->zipCode = $zipCode;
      return $this;
    }

    /**
     * @return StringLength1to30
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param StringLength1to30 $city
     * @return \StephanWoerner\ErvExiSoap\Model\differingAccountHolderType
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return AlphaStringLength3
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param AlphaStringLength3 $countryCode
     * @return \StephanWoerner\ErvExiSoap\Model\differingAccountHolderType
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

    /**
     * @return StringLength1to100
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param StringLength1to100 $email
     * @return \StephanWoerner\ErvExiSoap\Model\differingAccountHolderType
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

}
