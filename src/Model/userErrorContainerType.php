<?php

namespace StephanWoerner\ErvExiSoap\Model;

class userErrorContainerType
{

    /**
     * @var systemRpType $system
     */
    protected $system = null;

    /**
     * @var userErrorType $errors
     */
    protected $errors = null;

    /**
     * @param systemRpType $system
     * @param userErrorType $errors
     */
    public function __construct($system, $errors)
    {
      $this->system = $system;
      $this->errors = $errors;
    }

    /**
     * @return systemRpType
     */
    public function getSystem()
    {
      return $this->system;
    }

    /**
     * @param systemRpType $system
     * @return \StephanWoerner\ErvExiSoap\Model\userErrorContainerType
     */
    public function setSystem($system)
    {
      $this->system = $system;
      return $this;
    }

    /**
     * @return userErrorType
     */
    public function getErrors()
    {
      return $this->errors;
    }

    /**
     * @param userErrorType $errors
     * @return \StephanWoerner\ErvExiSoap\Model\userErrorContainerType
     */
    public function setErrors($errors)
    {
      $this->errors = $errors;
      return $this;
    }

}
