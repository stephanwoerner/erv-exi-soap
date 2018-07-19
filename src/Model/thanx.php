<?php

namespace StephanWoerner\ErvExiSoap\Model;

class thanx
{

    /**
     * @var text $text
     */
    protected $text = null;

    /**
     * @var linkType $link
     */
    protected $link = null;

    /**
     * @param text $text
     * @param linkType $link
     */
    public function __construct($text, $link)
    {
      $this->text = $text;
      $this->link = $link;
    }

    /**
     * @return text
     */
    public function getText()
    {
      return $this->text;
    }

    /**
     * @param text $text
     * @return \StephanWoerner\ErvExiSoap\Model\thanx
     */
    public function setText($text)
    {
      $this->text = $text;
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
     * @return \StephanWoerner\ErvExiSoap\Model\thanx
     */
    public function setLink($link)
    {
      $this->link = $link;
      return $this;
    }

}
