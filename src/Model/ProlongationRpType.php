<?php

namespace StephanWoerner\ErvExiSoap\Model;

class ProlongationRpType
{

    /**
     * @var agreement $agreement
     */
    protected $agreement = null;

    /**
     * @var linkType $link
     */
    protected $link = null;

    /**
     * @param agreement $agreement
     */
    public function __construct($agreement)
    {
      $this->agreement = $agreement;
    }

    /**
     * @return agreement
     */
    public function getAgreement()
    {
      return $this->agreement;
    }

    /**
     * @param agreement $agreement
     * @return \StephanWoerner\ErvExiSoap\Model\ProlongationRpType
     */
    public function setAgreement($agreement)
    {
      $this->agreement = $agreement;
      return $this;
    }

    /**
     * @return linkType
     */
    public function getLink()
    {
      return $this->link;
    }

    /**
     * @param linkType $link
     * @return \StephanWoerner\ErvExiSoap\Model\ProlongationRpType
     */
    public function setLink($link)
    {
      $this->link = $link;
      return $this;
    }

}
