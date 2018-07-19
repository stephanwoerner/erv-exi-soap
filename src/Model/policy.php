<?php

namespace StephanWoerner\ErvExiSoap\Model;

class policy
{

    /**
     * @var vsnrType $vsnr
     */
    protected $vsnr = null;

    /**
     * @var totalPremium $totalPremium
     */
    protected $totalPremium = null;

    /**
     * @var totalRenewalPremium $totalRenewalPremium
     */
    protected $totalRenewalPremium = null;

    /**
     * @var policyPrintURL $policyPrintURL
     */
    protected $policyPrintURL = null;

    /**
     * @var policyAttachments $policyAttachments
     */
    protected $policyAttachments = null;

    /**
     * @param vsnrType $vsnr
     * @param totalPremium $totalPremium
     * @param totalRenewalPremium $totalRenewalPremium
     * @param policyPrintURL $policyPrintURL
     * @param policyAttachments $policyAttachments
     */
    public function __construct($vsnr, $totalPremium, $totalRenewalPremium, $policyPrintURL, $policyAttachments)
    {
      $this->vsnr = $vsnr;
      $this->totalPremium = $totalPremium;
      $this->totalRenewalPremium = $totalRenewalPremium;
      $this->policyPrintURL = $policyPrintURL;
      $this->policyAttachments = $policyAttachments;
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

    /**
     * @return totalPremium
     */
    public function getTotalPremium()
    {
      return $this->totalPremium;
    }

    /**
     * @param totalPremium $totalPremium
     * @return \StephanWoerner\ErvExiSoap\Model\policy
     */
    public function setTotalPremium($totalPremium)
    {
      $this->totalPremium = $totalPremium;
      return $this;
    }

    /**
     * @return totalRenewalPremium
     */
    public function getTotalRenewalPremium()
    {
      return $this->totalRenewalPremium;
    }

    /**
     * @param totalRenewalPremium $totalRenewalPremium
     * @return \StephanWoerner\ErvExiSoap\Model\policy
     */
    public function setTotalRenewalPremium($totalRenewalPremium)
    {
      $this->totalRenewalPremium = $totalRenewalPremium;
      return $this;
    }

    /**
     * @return policyPrintURL
     */
    public function getPolicyPrintURL()
    {
      return $this->policyPrintURL;
    }

    /**
     * @param policyPrintURL $policyPrintURL
     * @return \StephanWoerner\ErvExiSoap\Model\policy
     */
    public function setPolicyPrintURL($policyPrintURL)
    {
      $this->policyPrintURL = $policyPrintURL;
      return $this;
    }

    /**
     * @return policyAttachments
     */
    public function getPolicyAttachments()
    {
      return $this->policyAttachments;
    }

    /**
     * @param policyAttachments $policyAttachments
     * @return \StephanWoerner\ErvExiSoap\Model\policy
     */
    public function setPolicyAttachments($policyAttachments)
    {
      $this->policyAttachments = $policyAttachments;
      return $this;
    }

}
