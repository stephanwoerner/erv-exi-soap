<?php

namespace StephanWoerner\ErvExiSoap\Model;

class serviceRq
{
    /**
     * @var string
     */
    protected $serviceDesc;

    /**
     * @var object
     */
    protected $servicePremium;

    /**
     * @var string
     */
    protected $serviceDescAndPremium;

    /**
     * @var object
     */
    protected $tariffs;

    public function __construct($serviceDesc, $serviceDescAndPremium)
    {
        $this->serviceDesc = $serviceDesc;
        $this->servicePremium = new \stdClass();
        $this->serviceDescAndPremium = $serviceDescAndPremium;
        $this->tariffs = new \stdClass();
    }

    /**
     * @return string
     */
    public function getServiceDesc()
    {
        return $this->serviceDesc;
    }

    /**
     * @param string $serviceDesc
     * @return serviceRq
     */
    public function setServiceDesc(string $serviceDesc)
    {
        $this->serviceDesc = $serviceDesc;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceDescAndPremium()
    {
        return $this->serviceDescAndPremium;
    }

    /**
     * @param string $serviceDescAndPremium
     * @return serviceRq
     */
    public function setServiceDescAndPremium(string $serviceDescAndPremium)
    {
        $this->serviceDescAndPremium = $serviceDescAndPremium;
        return $this;
    }

}
