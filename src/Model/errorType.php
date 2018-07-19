<?php

namespace StephanWoerner\ErvExiSoap\Model;

class errorType
{

    /**
     * @var nr $nr
     */
    protected $nr = null;

    /**
     * @var errorMessageType $message
     */
    protected $message = null;

    /**
     * @param nr $nr
     * @param errorMessageType $message
     */
    public function __construct($nr, $message)
    {
      $this->nr = $nr;
      $this->message = $message;
    }

    /**
     * @return nr
     */
    public function getNr()
    {
      return $this->nr;
    }

    /**
     * @param nr $nr
     * @return \StephanWoerner\ErvExiSoap\Model\errorType
     */
    public function setNr($nr)
    {
      $this->nr = $nr;
      return $this;
    }

    /**
     * @return errorMessageType
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param errorMessageType $message
     * @return \StephanWoerner\ErvExiSoap\Model\errorType
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

}
