<?php

namespace StephanWoerner\ErvExiSoap\Model;

class offerRq
{

    /**
     * @var sequence $sequence
     */
    protected $sequence = null;

    /**
     * @var offerID $offerID
     */
    protected $offerID = null;

    /**
     * @var serviceRq $service
     */
    protected $service = null;

    /**
     * @var acceptedPayments $acceptedPayments
     */
    protected $acceptedPayments = null;

    /**
     * @var benefits $benefits
     */
    protected $benefits = null;

    /**
     * @param sequence $sequence
     * @param offerID $offerID
     * @param serviceRq $service
     */
    public function __construct($sequence, $offerID, $service)
    {
      $this->sequence = $sequence;
      $this->offerID = $offerID;
      $this->service = $service;
      $this->acceptedPayments = new \stdClass();
      $this->benefits = new \stdClass();
    }

    /**
     * @return sequence
     */
    public function getSequence()
    {
      return $this->sequence;
    }

    /**
     * @param sequence $sequence
     * @return \StephanWoerner\ErvExiSoap\Model\offer
     */
    public function setSequence($sequence)
    {
      $this->sequence = $sequence;
      return $this;
    }

    /**
     * @return offerID
     */
    public function getOfferID()
    {
      return $this->offerID;
    }

    /**
     * @param offerID $offerID
     * @return \StephanWoerner\ErvExiSoap\Model\offer
     */
    public function setOfferID($offerID)
    {
      $this->offerID = $offerID;
      return $this;
    }

    /**
     * @return serviceRq
     */
    public function getService()
    {
      return $this->service;
    }

    /**
     * @param serviceRq $service
     * @return \StephanWoerner\ErvExiSoap\Model\offer
     */
    public function setService($service)
    {
      $this->service = $service;
      return $this;
    }

    /**
     * @return acceptedPayments
     */
    public function getAcceptedPayments()
    {
      return $this->acceptedPayments;
    }

    /**
     * @param acceptedPayments $acceptedPayments
     * @return \StephanWoerner\ErvExiSoap\Model\offer
     */
    public function setAcceptedPayments($acceptedPayments)
    {
      $this->acceptedPayments = $acceptedPayments;
      return $this;
    }

    /**
     * @return benefits
     */
    public function getBenefits()
    {
      return $this->benefits;
    }

    /**
     * @param benefits $benefits
     * @return \StephanWoerner\ErvExiSoap\Model\offer
     */
    public function setBenefits($benefits)
    {
      $this->benefits = $benefits;
      return $this;
    }

}
