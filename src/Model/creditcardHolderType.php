<?php

namespace StephanWoerner\ErvExiSoap\Model;

class creditcardHolderType
{

    /**
     * @var StringLength0to30 $prename
     */
    protected $prename = null;

    /**
     * @var StringLength1to60 $surname
     */
    protected $surname = null;

    /**
     * @var StringLength1to50 $streetAndNumber
     */
    protected $streetAndNumber = null;

    /**
     * @var StringLength1to7 $zipCode
     */
    protected $zipCode = null;

    /**
     * @var StringLength1to30 $city
     */
    protected $city = null;

    /**
     * @var AlphaStringLength2 $countryCode
     */
    protected $countryCode = null;

    /**
     * @var StringLength1to100 $email
     */
    protected $email = null;

    /**
     * @param StringLength0to30 $prename
     * @param StringLength1to60 $surname
     * @param StringLength1to50 $streetAndNumber
     * @param StringLength1to7 $zipCode
     * @param StringLength1to30 $city
     * @param AlphaStringLength2 $countryCode
     */
    public function __construct($prename, $surname, $streetAndNumber, $zipCode, $city, $countryCode)
    {
      $this->prename = $prename;
      $this->surname = $surname;
      $this->streetAndNumber = $streetAndNumber;
      $this->zipCode = $zipCode;
      $this->city = $city;
      $this->countryCode = $countryCode;
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
     * @return \StephanWoerner\ErvExiSoap\Model\creditcardHolderType
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
     * @return \StephanWoerner\ErvExiSoap\Model\creditcardHolderType
     */
    public function setSurname($surname)
    {
      $this->surname = $surname;
      return $this;
    }

    /**
     * @return StringLength1to50
     */
    public function getStreetAndNumber()
    {
      return $this->streetAndNumber;
    }

    /**
     * @param StringLength1to50 $streetAndNumber
     * @return \StephanWoerner\ErvExiSoap\Model\creditcardHolderType
     */
    public function setStreetAndNumber($streetAndNumber)
    {
      $this->streetAndNumber = $streetAndNumber;
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
     * @return \StephanWoerner\ErvExiSoap\Model\creditcardHolderType
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
     * @return \StephanWoerner\ErvExiSoap\Model\creditcardHolderType
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return AlphaStringLength2
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param AlphaStringLength2 $countryCode
     * @return \StephanWoerner\ErvExiSoap\Model\creditcardHolderType
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
     * @return \StephanWoerner\ErvExiSoap\Model\creditcardHolderType
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

}
