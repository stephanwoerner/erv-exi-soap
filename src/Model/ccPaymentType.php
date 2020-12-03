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
     * @var psd2ParameterType $psd2Parameter
     */
    protected $psd2Parameter = null;

    /**
     * @var secureHandleIDType $ccSecureHandleID
     */
    protected $ccSecureHandleID = null;

    /**
     * @var payPageHandleIDType $ccPayPageHandleId
     */
    protected $ccPayPageHandleId = null;

    /**
     * @param ccNrType $ccNr
     * @param cardHolderType $ccHolder
     * @param ccType $ccType
     * @param ccValidType $ccValid
     * @param secureHandleIDType $ccSecureHandleID
     * @param payPageHandleIDType $ccPayPageHandleId
     */
    public function __construct($ccNr, $ccHolder, $ccType, $ccValid, $ccSecureHandleID, $ccPayPageHandleId)
    {
      $this->ccNr = $ccNr;
      $this->ccHolder = $ccHolder;
      $this->ccType = $ccType;
      $this->ccValid = $ccValid;
      $this->ccSecureHandleID = $ccSecureHandleID;
      $this->ccPayPageHandleId = $ccPayPageHandleId;
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
     * @return psd2ParameterType
     */
    public function getPsd2Parameter()
    {
      return $this->psd2Parameter;
    }

    /**
     * @param psd2ParameterType $psd2Parameter
     * @return \StephanWoerner\ErvExiSoap\Model\ccPaymentType
     */
    public function setPsd2Parameter($psd2Parameter)
    {
      $this->psd2Parameter = $psd2Parameter;
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

    /**
     * @return payPageHandleIDType
     */
    public function getCcPayPageHandleId()
    {
      return $this->ccPayPageHandleId;
    }

    /**
     * @param payPageHandleIDType $ccPayPageHandleId
     * @return \StephanWoerner\ErvExiSoap\Model\ccPaymentType
     */
    public function setCcPayPageHandleId($ccPayPageHandleId)
    {
      $this->ccPayPageHandleId = $ccPayPageHandleId;
      return $this;
    }

}
