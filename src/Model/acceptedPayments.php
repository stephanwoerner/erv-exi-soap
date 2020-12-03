<?php

namespace StephanWoerner\ErvExiSoap\Model;

class acceptedPayments
{

    /**
     * @var cc $cc
     */
    protected $cc = null;

    /**
     * @var bank $bank
     */
    protected $bank = null;

    /**
     * @var agencyCollection $agencyCollection
     */
    protected $agencyCollection = null;

    /**
     * @var amazonPayment $amazonPayment
     */
    protected $amazonPayment = null;

    /**
     * @param cc $cc
     * @param bank $bank
     * @param agencyCollection $agencyCollection
     * @param amazonPayment $amazonPayment
     */
    public function __construct($cc, $bank, $agencyCollection, $amazonPayment)
    {
      $this->cc = $cc;
      $this->bank = $bank;
      $this->agencyCollection = $agencyCollection;
      $this->amazonPayment = $amazonPayment;
    }

    /**
     * @return cc
     */
    public function getCc()
    {
      return $this->cc;
    }

    /**
     * @param cc $cc
     * @return \StephanWoerner\ErvExiSoap\Model\acceptedPayments
     */
    public function setCc($cc)
    {
      $this->cc = $cc;
      return $this;
    }

    /**
     * @return bank
     */
    public function getBank()
    {
      return $this->bank;
    }

    /**
     * @param bank $bank
     * @return \StephanWoerner\ErvExiSoap\Model\acceptedPayments
     */
    public function setBank($bank)
    {
      $this->bank = $bank;
      return $this;
    }

    /**
     * @return agencyCollection
     */
    public function getAgencyCollection()
    {
      return $this->agencyCollection;
    }

    /**
     * @param agencyCollection $agencyCollection
     * @return \StephanWoerner\ErvExiSoap\Model\acceptedPayments
     */
    public function setAgencyCollection($agencyCollection)
    {
      $this->agencyCollection = $agencyCollection;
      return $this;
    }

    /**
     * @return amazonPayment
     */
    public function getAmazonPayment()
    {
      return $this->amazonPayment;
    }

    /**
     * @param amazonPayment $amazonPayment
     * @return \StephanWoerner\ErvExiSoap\Model\acceptedPayments
     */
    public function setAmazonPayment($amazonPayment)
    {
      $this->amazonPayment = $amazonPayment;
      return $this;
    }

}
