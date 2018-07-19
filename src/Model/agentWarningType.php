<?php

namespace StephanWoerner\ErvExiSoap\Model;

class agentWarningType
{

    /**
     * @var warning $warning
     */
    protected $warning = null;

    /**
     * @param warning $warning
     */
    public function __construct($warning)
    {
      $this->warning = $warning;
    }

    /**
     * @return warning
     */
    public function getWarning()
    {
      return $this->warning;
    }

    /**
     * @param warning $warning
     * @return \StephanWoerner\ErvExiSoap\Model\agentWarningType
     */
    public function setWarning($warning)
    {
      $this->warning = $warning;
      return $this;
    }

}
