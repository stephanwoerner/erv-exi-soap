<?php

namespace StephanWoerner\ErvExiSoap\Model;

class acceptedCard
{

    /**
     * @var ccType $ccType
     */
    protected $ccType = null;

    /**
     * @param ccType $ccType
     */
    public function __construct($ccType)
    {
      $this->ccType = $ccType;
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
     * @return \StephanWoerner\ErvExiSoap\Model\acceptedCard
     */
    public function setCcType($ccType)
    {
      $this->ccType = $ccType;
      return $this;
    }

}
