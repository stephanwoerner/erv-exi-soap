<?php

namespace StephanWoerner\ErvExiSoap\Model;

class agentType
{

    /**
     * @var StringLength1to64 $agency
     */
    protected $agency = null;

    /**
     * @var StringLength1to30 $travelAgent
     */
    protected $travelAgent = null;

    /**
     * @var assType $providerAss
     */
    protected $providerAss = null;

    /**
     * @var initiatorType $initiator
     */
    protected $initiator = null;

    /**
     * @param StringLength1to64 $agency
     * @param initiatorType $initiator
     */
    public function __construct($agency, $initiator)
    {
      $this->agency = $agency;
      $this->initiator = $initiator;
    }

    /**
     * @return StringLength1to64
     */
    public function getAgency()
    {
      return $this->agency;
    }

    /**
     * @param StringLength1to64 $agency
     * @return \StephanWoerner\ErvExiSoap\Model\agentType
     */
    public function setAgency($agency)
    {
      $this->agency = $agency;
      return $this;
    }

    /**
     * @return StringLength1to30
     */
    public function getTravelAgent()
    {
      return $this->travelAgent;
    }

    /**
     * @param StringLength1to30 $travelAgent
     * @return \StephanWoerner\ErvExiSoap\Model\agentType
     */
    public function setTravelAgent($travelAgent)
    {
      $this->travelAgent = $travelAgent;
      return $this;
    }

    /**
     * @return assType
     */
    public function getProviderAss()
    {
      return $this->providerAss;
    }

    /**
     * @param assType $providerAss
     * @return \StephanWoerner\ErvExiSoap\Model\agentType
     */
    public function setProviderAss($providerAss)
    {
      $this->providerAss = $providerAss;
      return $this;
    }

    /**
     * @return initiatorType
     */
    public function getInitiator()
    {
      return $this->initiator;
    }

    /**
     * @param initiatorType $initiator
     * @return \StephanWoerner\ErvExiSoap\Model\agentType
     */
    public function setInitiator($initiator)
    {
      $this->initiator = $initiator;
      return $this;
    }

}
