<?php

namespace StephanWoerner\ErvExiSoap\Model;

class userErrorType
{

    /**
     * @var errorType[] $error
     */
    protected $error = null;

    /**
     * @param errorType[] $error
     */
    public function __construct(array $error)
    {
      $this->error = $error;
    }

    /**
     * @return errorType[]
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param errorType[] $error
     * @return \StephanWoerner\ErvExiSoap\Model\userErrorType
     */
    public function setError(array $error)
    {
      $this->error = $error;
      return $this;
    }

}
