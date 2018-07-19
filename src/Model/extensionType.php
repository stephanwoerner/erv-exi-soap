<?php

namespace StephanWoerner\ErvExiSoap\Model;

class extensionType
{

    /**
     * @var StringLength1to30 $key
     */
    protected $key = null;

    /**
     * @var StringLength1to250 $value
     */
    protected $value = null;

    /**
     * @param StringLength1to30 $key
     * @param StringLength1to250 $value
     */
    public function __construct($key, $value)
    {
      $this->key = $key;
      $this->value = $value;
    }

    /**
     * @return StringLength1to30
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param StringLength1to30 $key
     * @return \StephanWoerner\ErvExiSoap\Model\extensionType
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return StringLength1to250
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param StringLength1to250 $value
     * @return \StephanWoerner\ErvExiSoap\Model\extensionType
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
