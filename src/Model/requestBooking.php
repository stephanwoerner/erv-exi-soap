<?php

namespace StephanWoerner\ErvExiSoap\Model;

class requestBooking
{

    /**
     * @var systemRqType $system
     */
    protected $system = null;

    /**
     * @var agentType $agent
     */
    protected $agent = null;

    /**
     * @var policyAsLink $policyAsLink
     */
    protected $policyAsLink = null;

    /**
     * @var providerDataType $providerData
     */
    protected $providerData = null;

    /**
     * @var productSpecType $productSpec
     */
    protected $productSpec = null;

    /**
     * @var travelType $travel
     */
    protected $travel = null;

    /**
     * @var coveredTravelersType $coveredTravelers
     */
    protected $coveredTravelers = null;

    /**
     * @var offersRqType $offers
     */
    protected $offers = null;

    /**
     * @var StringLength1to50 $preContractualInformationID
     */
    protected $preContractualInformationID = null;

    /**
     * @var customerType $customer
     */
    protected $customer = null;

    /**
     * @var paymentType $payment
     */
    protected $payment = null;

    /**
     * @var insConditionsRqType $insConditions
     */
    protected $insConditions = null;

    /**
     * @var ProlongationRqType $prolongationAgreement
     */
    protected $prolongationAgreement = null;

    /**
     * @var extensionsType $extensions
     */
    protected $extensions = null;

    /**
     * @var requestIDType $requestID
     */
    protected $requestID = null;

    /**
     * @param systemRqType $system
     * @param agentType $agent
     * @param policyAsLink $policyAsLink
     * @param providerDataType $providerData
     * @param productSpecType $productSpec
     * @param travelType $travel
     * @param coveredTravelersType $coveredTravelers
     * @param offersRqType $offers
     * @param StringLength1to50 $preContractualInformationID
     * @param customerType $customer
     * @param paymentType $payment
     * @param insConditionsRqType $insConditions
     * @param ProlongationRqType $prolongationAgreement
     * @param extensionsType $extensions
     * @param requestIDType $requestID
     */
    public function __construct($system, $agent, $policyAsLink, $providerData, $productSpec, $travel, $coveredTravelers, $offers, $preContractualInformationID, $customer, $payment, $insConditions, $prolongationAgreement, $extensions, $requestID)
    {
      $this->system = $system;
      $this->agent = $agent;
      $this->policyAsLink = $policyAsLink;
      $this->providerData = $providerData;
      $this->productSpec = $productSpec;
      $this->travel = $travel;
      $this->coveredTravelers = $coveredTravelers;
      $this->offers = $offers;
      $this->preContractualInformationID = $preContractualInformationID;
      $this->customer = $customer;
      $this->payment = $payment;
      $this->insConditions = $insConditions;
      $this->prolongationAgreement = $prolongationAgreement;
      $this->extensions = $extensions;
      $this->requestID = $requestID;
    }

    /**
     * @return systemRqType
     */
    public function getSystem()
    {
      return $this->system;
    }

    /**
     * @param systemRqType $system
     * @return \StephanWoerner\ErvExiSoap\Model\requestBooking
     */
    public function setSystem($system)
    {
      $this->system = $system;
      return $this;
    }

    /**
     * @return agentType
     */
    public function getAgent()
    {
      return $this->agent;
    }

    /**
     * @param agentType $agent
     * @return \StephanWoerner\ErvExiSoap\Model\requestBooking
     */
    public function setAgent($agent)
    {
      $this->agent = $agent;
      return $this;
    }

    /**
     * @return policyAsLink
     */
    public function getPolicyAsLink()
    {
      return $this->policyAsLink;
    }

    /**
     * @param policyAsLink $policyAsLink
     * @return \StephanWoerner\ErvExiSoap\Model\requestBooking
     */
    public function setPolicyAsLink($policyAsLink)
    {
      $this->policyAsLink = $policyAsLink;
      return $this;
    }

    /**
     * @return providerDataType
     */
    public function getProviderData()
    {
      return $this->providerData;
    }

    /**
     * @param providerDataType $providerData
     * @return \StephanWoerner\ErvExiSoap\Model\requestBooking
     */
    public function setProviderData($providerData)
    {
      $this->providerData = $providerData;
      return $this;
    }

    /**
     * @return productSpecType
     */
    public function getProductSpec()
    {
      return $this->productSpec;
    }

    /**
     * @param productSpecType $productSpec
     * @return \StephanWoerner\ErvExiSoap\Model\requestBooking
     */
    public function setProductSpec($productSpec)
    {
      $this->productSpec = $productSpec;
      return $this;
    }

    /**
     * @return travelType
     */
    public function getTravel()
    {
      return $this->travel;
    }

    /**
     * @param travelType $travel
     * @return \StephanWoerner\ErvExiSoap\Model\requestBooking
     */
    public function setTravel($travel)
    {
      $this->travel = $travel;
      return $this;
    }

    /**
     * @return coveredTravelersType
     */
    public function getCoveredTravelers()
    {
      return $this->coveredTravelers;
    }

    /**
     * @param coveredTravelersType $coveredTravelers
     * @return \StephanWoerner\ErvExiSoap\Model\requestBooking
     */
    public function setCoveredTravelers($coveredTravelers)
    {
      $this->coveredTravelers = $coveredTravelers;
      return $this;
    }

    /**
     * @return offersRqType
     */
    public function getOffers()
    {
      return $this->offers;
    }

    /**
     * @param offersRqType $offers
     * @return \StephanWoerner\ErvExiSoap\Model\requestBooking
     */
    public function setOffers($offers)
    {
      $this->offers = $offers;
      return $this;
    }

    /**
     * @return StringLength1to50
     */
    public function getPreContractualInformationID()
    {
      return $this->preContractualInformationID;
    }

    /**
     * @param StringLength1to50 $preContractualInformationID
     * @return \StephanWoerner\ErvExiSoap\Model\requestBooking
     */
    public function setPreContractualInformationID($preContractualInformationID)
    {
      $this->preContractualInformationID = $preContractualInformationID;
      return $this;
    }

    /**
     * @return customerType
     */
    public function getCustomer()
    {
      return $this->customer;
    }

    /**
     * @param customerType $customer
     * @return \StephanWoerner\ErvExiSoap\Model\requestBooking
     */
    public function setCustomer($customer)
    {
      $this->customer = $customer;
      return $this;
    }

    /**
     * @return paymentType
     */
    public function getPayment()
    {
      return $this->payment;
    }

    /**
     * @param paymentType $payment
     * @return \StephanWoerner\ErvExiSoap\Model\requestBooking
     */
    public function setPayment($payment)
    {
      $this->payment = $payment;
      return $this;
    }

    /**
     * @return insConditionsRqType
     */
    public function getInsConditions()
    {
      return $this->insConditions;
    }

    /**
     * @param insConditionsRqType $insConditions
     * @return \StephanWoerner\ErvExiSoap\Model\requestBooking
     */
    public function setInsConditions($insConditions)
    {
      $this->insConditions = $insConditions;
      return $this;
    }

    /**
     * @return ProlongationRqType
     */
    public function getProlongationAgreement()
    {
      return $this->prolongationAgreement;
    }

    /**
     * @param ProlongationRqType $prolongationAgreement
     * @return \StephanWoerner\ErvExiSoap\Model\requestBooking
     */
    public function setProlongationAgreement($prolongationAgreement)
    {
      $this->prolongationAgreement = $prolongationAgreement;
      return $this;
    }

    /**
     * @return extensionsType
     */
    public function getExtensions()
    {
      return $this->extensions;
    }

    /**
     * @param extensionsType $extensions
     * @return \StephanWoerner\ErvExiSoap\Model\requestBooking
     */
    public function setExtensions($extensions)
    {
      $this->extensions = $extensions;
      return $this;
    }

    /**
     * @return requestIDType
     */
    public function getRequestID()
    {
      return $this->requestID;
    }

    /**
     * @param requestIDType $requestID
     * @return \StephanWoerner\ErvExiSoap\Model\requestBooking
     */
    public function setRequestID($requestID)
    {
      $this->requestID = $requestID;
      return $this;
    }

}
