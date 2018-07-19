<?php

namespace StephanWoerner\ErvExiSoap\Model;

class providerDataType
{

    /**
     * @var StringLength0to60 $textField
     */
    protected $textField = null;

    /**
     * @param StringLength0to60 $textField
     */
    public function __construct($textField)
    {
      $this->textField = $textField;
    }

    /**
     * @return StringLength0to60
     */
    public function getTextField()
    {
      return $this->textField;
    }

    /**
     * @param StringLength0to60 $textField
     * @return \StephanWoerner\ErvExiSoap\Model\providerDataType
     */
    public function setTextField($textField)
    {
      $this->textField = $textField;
      return $this;
    }

}
