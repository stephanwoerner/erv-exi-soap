<?php

namespace StephanWoerner\ErvExiSoap\Model;

class serviceType
{

    /**
     * @var StringLength1to100 $serviceDesc
     */
    protected $serviceDesc = null;

    /**
     * @var servicePremium $servicePremium
     */
    protected $servicePremium = null;

    /**
     * @var serviceRenewalPremium $serviceRenewalPremium
     */
    protected $serviceRenewalPremium = null;

    /**
     * @var StringLength0to100 $serviceDescAndPremium
     */
    protected $serviceDescAndPremium = null;

    /**
     * @var StringLength0to100 $serviceDescAndRenewalPremium
     */
    protected $serviceDescAndRenewalPremium = null;

    /**
     * @var tariffsType $tariffs
     */
    protected $tariffs = null;

    /**
     * @param StringLength1to100 $serviceDesc
     * @param servicePremium $servicePremium
     * @param StringLength0to100 $serviceDescAndPremium
     * @param tariffsType $tariffs
     */
    public function __construct($serviceDesc, $servicePremium, $serviceDescAndPremium, $tariffs)
    {
      $this->serviceDesc = $serviceDesc;
      $this->servicePremium = $servicePremium;
      $this->serviceDescAndPremium = $serviceDescAndPremium;
      $this->tariffs = $tariffs;
    }

    /**
     * @return StringLength1to100
     */
    public function getServiceDesc()
    {
      return $this->serviceDesc;
    }

    /**
     * @param StringLength1to100 $serviceDesc
     * @return \StephanWoerner\ErvExiSoap\Model\serviceType
     */
    public function setServiceDesc($serviceDesc)
    {
      $this->serviceDesc = $serviceDesc;
      return $this;
    }

    /**
     * @return servicePremium
     */
    public function getServicePremium()
    {
      return $this->servicePremium;
    }

    /**
     * @param servicePremium $servicePremium
     * @return \StephanWoerner\ErvExiSoap\Model\serviceType
     */
    public function setServicePremium($servicePremium)
    {
      $this->servicePremium = $servicePremium;
      return $this;
    }

    /**
     * @return serviceRenewalPremium
     */
    public function getServiceRenewalPremium()
    {
      return $this->serviceRenewalPremium;
    }

    /**
     * @param serviceRenewalPremium $serviceRenewalPremium
     * @return \StephanWoerner\ErvExiSoap\Model\serviceType
     */
    public function setServiceRenewalPremium($serviceRenewalPremium)
    {
      $this->serviceRenewalPremium = $serviceRenewalPremium;
      return $this;
    }

    /**
     * @return StringLength0to100
     */
    public function getServiceDescAndPremium()
    {
      return $this->serviceDescAndPremium;
    }

    /**
     * @param StringLength0to100 $serviceDescAndPremium
     * @return \StephanWoerner\ErvExiSoap\Model\serviceType
     */
    public function setServiceDescAndPremium($serviceDescAndPremium)
    {
      $this->serviceDescAndPremium = $serviceDescAndPremium;
      return $this;
    }

    /**
     * @return StringLength0to100
     */
    public function getServiceDescAndRenewalPremium()
    {
      return $this->serviceDescAndRenewalPremium;
    }

    /**
     * @param StringLength0to100 $serviceDescAndRenewalPremium
     * @return \StephanWoerner\ErvExiSoap\Model\serviceType
     */
    public function setServiceDescAndRenewalPremium($serviceDescAndRenewalPremium)
    {
      $this->serviceDescAndRenewalPremium = $serviceDescAndRenewalPremium;
      return $this;
    }

    /**
     * @return tariffsType
     */
    public function getTariffs()
    {
      return $this->tariffs;
    }

    /**
     * @param tariffsType $tariffs
     * @return \StephanWoerner\ErvExiSoap\Model\serviceType
     */
    public function setTariffs($tariffs)
    {
      $this->tariffs = $tariffs;
      return $this;
    }

}
