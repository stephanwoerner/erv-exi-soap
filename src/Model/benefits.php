<?php

namespace StephanWoerner\ErvExiSoap\Model;

class benefits
{

    /**
     * @var DescriptionURLType $descriptionURL
     */
    protected $descriptionURL = null;

    /**
     * @param DescriptionURLType $descriptionURL
     */
    public function __construct($descriptionURL)
    {
      $this->descriptionURL = $descriptionURL;
    }

    /**
     * @return DescriptionURLType
     */
    public function getDescriptionURL()
    {
      return $this->descriptionURL;
    }

    /**
     * @param DescriptionURLType $descriptionURL
     * @return \StephanWoerner\ErvExiSoap\Model\benefits
     */
    public function setDescriptionURL($descriptionURL)
    {
      $this->descriptionURL = $descriptionURL;
      return $this;
    }

}
