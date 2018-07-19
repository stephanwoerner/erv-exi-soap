<?php

namespace StephanWoerner\ErvExiSoap\Model;

class productLineUrls
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
     * @return \StephanWoerner\ErvExiSoap\Model\productLineUrls
     */
    public function setDescriptionURL($descriptionURL)
    {
      $this->descriptionURL = $descriptionURL;
      return $this;
    }

}
