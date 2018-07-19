<?php

namespace StephanWoerner\ErvExiSoap\Model;

class bankPaymentType
{

    /**
     * @var bankNumberType $bankNumber
     */
    protected $bankNumber = null;

    /**
     * @var accountNumberType $accountNumber
     */
    protected $accountNumber = null;

    /**
     * @var differingAccountHolderType $differingAccountHolder
     */
    protected $differingAccountHolder = null;

    /**
     * @var secureHandleIDType $bankSecureHandleID
     */
    protected $bankSecureHandleID = null;

    /**
     * @param accountNumberType $accountNumber
     * @param secureHandleIDType $bankSecureHandleID
     */
    public function __construct($accountNumber, $bankSecureHandleID)
    {
      $this->accountNumber = $accountNumber;
      $this->bankSecureHandleID = $bankSecureHandleID;
    }

    /**
     * @return bankNumberType
     */
    public function getBankNumber()
    {
      return $this->bankNumber;
    }

    /**
     * @param bankNumberType $bankNumber
     * @return \StephanWoerner\ErvExiSoap\Model\bankPaymentType
     */
    public function setBankNumber($bankNumber)
    {
      $this->bankNumber = $bankNumber;
      return $this;
    }

    /**
     * @return accountNumberType
     */
    public function getAccountNumber()
    {
      return $this->accountNumber;
    }

    /**
     * @param accountNumberType $accountNumber
     * @return \StephanWoerner\ErvExiSoap\Model\bankPaymentType
     */
    public function setAccountNumber($accountNumber)
    {
      $this->accountNumber = $accountNumber;
      return $this;
    }

    /**
     * @return differingAccountHolderType
     */
    public function getDifferingAccountHolder()
    {
      return $this->differingAccountHolder;
    }

    /**
     * @param differingAccountHolderType $differingAccountHolder
     * @return \StephanWoerner\ErvExiSoap\Model\bankPaymentType
     */
    public function setDifferingAccountHolder($differingAccountHolder)
    {
      $this->differingAccountHolder = $differingAccountHolder;
      return $this;
    }

    /**
     * @return secureHandleIDType
     */
    public function getBankSecureHandleID()
    {
      return $this->bankSecureHandleID;
    }

    /**
     * @param secureHandleIDType $bankSecureHandleID
     * @return \StephanWoerner\ErvExiSoap\Model\bankPaymentType
     */
    public function setBankSecureHandleID($bankSecureHandleID)
    {
      $this->bankSecureHandleID = $bankSecureHandleID;
      return $this;
    }

}
