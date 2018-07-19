<?php

namespace StephanWoerner\ErvExiSoap\Model;

class ccPaymentType
{

    /**
     * @var ccNrType $ccNr
     */
    protected $ccNr = null;

    /**
     * @var cardHolderType $ccHolder
     */
    protected $ccHolder = null;

    /**
     * @var ccType $ccType
     */
    protected $ccType = null;

    /**
     * @var cvc2Type $cvc2
     */
    protected $cvc2 = null;

    /**
     * @var ccValidType $ccValid
     */
    protected $ccValid = null;

    /**
     * @var secureHandleIDType $ccSecureHandleID
     */
    protected $ccSecureHandleID = null;

    /**
     * @param ccNrType $ccNr
     * @param cardHolderType $ccHolder
     * @param ccType $ccType
     * @param ccValidType $ccValid
     * @param secureHandleIDType $ccSecureHandleID
     */
    public function __construct($ccNr, $ccHolder, $ccType, $ccValid, $ccSecureHandleID)
    {
      $this->ccNr = $ccNr;
      $this->ccHolder = $ccHolder;
      $this->ccType = $ccType;
      $this->ccValid = $ccValid;
      $this->ccSecureHandleID = $ccSecureHandleID;
    }

    /**
     * @return ccNrType
     */
    public function getCcNr()
    {
      return $this->ccNr;
    }

    /**
     * @param ccNrType $ccNr
     * @return \StephanWoerner\ErvExiSoap\Model\ccPaymentType
     */
    public function setCcNr($ccNr)
    {
      $this->ccNr = $ccNr;
      return $this;
    }

    /**
     * @return cardHolderType
     */
    public function getCcHolder()
    {
      return $this->ccHolder;
    }

    /**
     * @param cardHolderType $ccHolder
     * @return \StephanWoerner\ErvExiSoap\Model\ccPaymentType
     */
    public function setCcHolder($ccHolder)
    {
      $this->ccHolder = $ccHolder;
      return $this;
    }

    /**
     * @return ccType
     */
    public function getCcType()
    {
      return $this->ccType;
    }

    /**
     * @param ccType $ccType
     * @return \StephanWoerner\ErvExiSoap\Model\ccPaymentType
     */
    public function setCcType($ccType)
    {
      $this->ccType = $ccType;
      return $this;
    }

    /**
     * @return cvc2Type
     */
    public function getCvc2()
    {
      return $this->cvc2;
    }

    /**
     * @param cvc2Type $cvc2
     * @return \StephanWoerner\ErvExiSoap\Model\ccPaymentType
     */
    public function setCvc2($cvc2)
    {
      $this->cvc2 = $cvc2;
      return $this;
    }

    /**
     * @return ccValidType
     */
    public function getCcValid()
    {
      return $this->ccValid;
    }

    /**
     * @param ccValidType $ccValid
     * @return \StephanWoerner\ErvExiSoap\Model\ccPaymentType
     */
    public function setCcValid($ccValid)
    {
      $this->ccValid = $ccValid;
      return $this;
    }

    /**
     * @return secureHandleIDType
     */
    public function getCcSecureHandleID()
    {
      return $this->ccSecureHandleID;
    }

    /**
     * @param secureHandleIDType $ccSecureHandleID
     * @return \StephanWoerner\ErvExiSoap\Model\ccPaymentType
     */
    public function setCcSecureHandleID($ccSecureHandleID)
    {
      $this->ccSecureHandleID = $ccSecureHandleID;
      return $this;
    }

}
