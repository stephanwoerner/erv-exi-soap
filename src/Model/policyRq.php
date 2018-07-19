<?php

namespace StephanWoerner\ErvExiSoap\Model;

class policyRq
{
    /**
     * @var vsnrType $vsnr
     */
    protected $vsnr = null;

    /**
     * @param vsnrType $vsnr
     */
    public function __construct($vsnr)
    {
      $this->vsnr = $vsnr;
    }

    /**
     * @return vsnrType
     */
    public function getVsnr()
    {
      return $this->vsnr;
    }

    /**
     * @param vsnrType $vsnr
     * @return \StephanWoerner\ErvExiSoap\Model\policy
     */
    public function setVsnr($vsnr)
    {
      $this->vsnr = $vsnr;
      return $this;
    }
}
