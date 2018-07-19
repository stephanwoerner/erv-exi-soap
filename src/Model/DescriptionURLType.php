<?php

namespace StephanWoerner\ErvExiSoap\Model;

class DescriptionURLType
{

    /**
     * @var anyURI $_
     */
    protected $_ = null;

    /**
     * @var StringLength1to16 $type
     */
    protected $type = null;

    /**
     * @var StringLength1to100 $label
     */
    protected $label = null;

    /**
     * @var boolean $defaultInd
     */
    protected $defaultInd = null;

    /**
     * @param anyURI $_
     * @param StringLength1to16 $type
     * @param StringLength1to100 $label
     * @param boolean $defaultInd
     */
    public function __construct($_, $type, $label, $defaultInd)
    {
      $this->_ = $_;
      $this->type = $type;
      $this->label = $label;
      $this->defaultInd = $defaultInd;
    }

    /**
     * @return anyURI
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param anyURI $_
     * @return \StephanWoerner\ErvExiSoap\Model\DescriptionURLType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return StringLength1to16
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param StringLength1to16 $type
     * @return \StephanWoerner\ErvExiSoap\Model\DescriptionURLType
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return StringLength1to100
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param StringLength1to100 $label
     * @return \StephanWoerner\ErvExiSoap\Model\DescriptionURLType
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefaultInd()
    {
      return $this->defaultInd;
    }

    /**
     * @param boolean $defaultInd
     * @return \StephanWoerner\ErvExiSoap\Model\DescriptionURLType
     */
    public function setDefaultInd($defaultInd)
    {
      $this->defaultInd = $defaultInd;
      return $this;
    }

}
