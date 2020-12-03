<?php

namespace StephanWoerner\ErvExiSoap\Model;

class servicePremium
{

    /**
     * @var servicePremiumType $_
     */
    protected $_ = null;

    /**
     * @var anonymous75 $premiumtype
     */
    protected $premiumtype = null;

    /**
     * @param servicePremiumType $_
     * @param anonymous75 $premiumtype
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
     * @return \StephanWoerner\ErvExiSoap\Model\servicePremium
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return anonymous75
     */
    public function getPremiumtype()
    {
      return $this->premiumtype;
    }

    /**
     * @param anonymous75 $premiumtype
     * @return \StephanWoerner\ErvExiSoap\Model\servicePremium
     */
    public function setPremiumtype($premiumtype)
    {
      $this->premiumtype = $premiumtype;
      return $this;
    }

}
