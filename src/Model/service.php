<?php

namespace StephanWoerner\ErvExiSoap\Model;

class service
{

    /**
     * @var StringLength1to50 $servicetype
     */
    protected $servicetype = null;

    /**
     * @param StringLength1to50 $servicetype
     */
    public function __construct($servicetype)
    {
      $this->servicetype = $servicetype;
    }

    /**
     * @return StringLength1to50
     */
    public function getServicetype()
    {
      return $this->servicetype;
    }

    /**
     * @param StringLength1to50 $servicetype
     * @return \StephanWoerner\ErvExiSoap\Model\service
     */
    public function setServicetype($servicetype)
    {
      $this->servicetype = $servicetype;
      return $this;
    }

}
