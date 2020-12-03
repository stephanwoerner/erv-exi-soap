<?php

namespace StephanWoerner\ErvExiSoap\Model;

class serviceRenewalPremium
{

    /**
     * @var servicePremiumType $_
     */
    protected $_ = null;

    /**
     * @var anonymous77 $premiumtype
     */
    protected $premiumtype = null;

    /**
     * @param servicePremiumType $_
     * @param anonymous77 $premiumtype
     */
    public function __construct($_, $premiumtype)
    {
      $this->_ = $_;
      $this->premiumtype = $premiumtype;
    }

    /**
     * @return servicePremiumType
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param servicePremiumType $_
     * @return \StephanWoerner\ErvExiSoap\Model\serviceRenewalPremium
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return anonymous77
     */
    public function getPremiumtype()
    {
      return $this->premiumtype;
    }

    /**
     * @param anonymous77 $premiumtype
     * @return \StephanWoerner\ErvExiSoap\Model\serviceRenewalPremium
     */
    public function setPremiumtype($premiumtype)
    {
      $this->premiumtype = $premiumtype;
      return $this;
    }

}
