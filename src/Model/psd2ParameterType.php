<?php

namespace StephanWoerner\ErvExiSoap\Model;

class psd2ParameterType
{

    /**
     * @var cavv $cavv
     */
    protected $cavv = null;

    /**
     * @var eci $eci
     */
    protected $eci = null;

    /**
     * @var threeDSVersion $threeDSVersion
     */
    protected $threeDSVersion = null;

    /**
     * @var threeDSTransactionId $threeDSTransactionId
     */
    protected $threeDSTransactionId = null;

    /**
     * @var extensionsType $psd2Extensions
     */
    protected $psd2Extensions = null;

    /**
     * @param cavv $cavv
     * @param threeDSVersion $threeDSVersion
     * @param threeDSTransactionId $threeDSTransactionId
     */
    public function __construct($cavv, $threeDSVersion, $threeDSTransactionId)
    {
      $this->cavv = $cavv;
      $this->threeDSVersion = $threeDSVersion;
      $this->threeDSTransactionId = $threeDSTransactionId;
    }

    /**
     * @return cavv
     */
    public function getCavv()
    {
      return $this->cavv;
    }

    /**
     * @param cavv $cavv
     * @return \StephanWoerner\ErvExiSoap\Model\psd2ParameterType
     */
    public function setCavv($cavv)
    {
      $this->cavv = $cavv;
      return $this;
    }

    /**
     * @return eci
     */
    public function getEci()
    {
      return $this->eci;
    }

    /**
     * @param eci $eci
     * @return \StephanWoerner\ErvExiSoap\Model\psd2ParameterType
     */
    public function setEci($eci)
    {
      $this->eci = $eci;
      return $this;
    }

    /**
     * @return threeDSVersion
     */
    public function getThreeDSVersion()
    {
      return $this->threeDSVersion;
    }

    /**
     * @param threeDSVersion $threeDSVersion
     * @return \StephanWoerner\ErvExiSoap\Model\psd2ParameterType
     */
    public function setThreeDSVersion($threeDSVersion)
    {
      $this->threeDSVersion = $threeDSVersion;
      return $this;
    }

    /**
     * @return threeDSTransactionId
     */
    public function getThreeDSTransactionId()
    {
      return $this->threeDSTransactionId;
    }

    /**
     * @param threeDSTransactionId $threeDSTransactionId
     * @return \StephanWoerner\ErvExiSoap\Model\psd2ParameterType
     */
    public function setThreeDSTransactionId($threeDSTransactionId)
    {
      $this->threeDSTransactionId = $threeDSTransactionId;
      return $this;
    }

    /**
     * @return extensionsType
     */
    public function getPsd2Extensions()
    {
      return $this->psd2Extensions;
    }

    /**
     * @param extensionsType $psd2Extensions
     * @return \StephanWoerner\ErvExiSoap\Model\psd2ParameterType
     */
    public function setPsd2Extensions($psd2Extensions)
    {
      $this->psd2Extensions = $psd2Extensions;
      return $this;
    }

}
