<?php

namespace StephanWoerner\ErvExiSoap\Model;

class linkType
{

    /**
     * @var StringLength0to50 $label
     */
    protected $label = null;

    /**
     * @var StringLength0to100 $href
     */
    protected $href = null;

    /**
     * @param StringLength0to50 $label
     * @param StringLength0to100 $href
     */
    public function __construct($label, $href)
    {
      $this->label = $label;
      $this->href = $href;
    }

    /**
     * @return StringLength0to50
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param StringLength0to50 $label
     * @return \StephanWoerner\ErvExiSoap\Model\linkType
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

    /**
     * @return StringLength0to100
     */
    public function getHref()
    {
      return $this->href;
    }

    /**
     * @param StringLength0to100 $href
     * @return \StephanWoerner\ErvExiSoap\Model\linkType
     */
    public function setHref($href)
    {
      $this->href = $href;
      return $this;
    }

}
