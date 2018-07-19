<?php

namespace StephanWoerner\ErvExiSoap\Model;

class insConditionsType
{

    /**
     * @var agreement $agreement
     */
    protected $agreement = null;

    /**
     * @var productLineUrls $productLineUrls
     */
    protected $productLineUrls = null;

    /**
     * @param agreement $agreement
     * @param productLineUrls $productLineUrls
     */
    public function __construct($agreement, $productLineUrls)
    {
      $this->agreement = $agreement;
      $this->productLineUrls = $productLineUrls;
    }

    /**
     * @return agreement
     */
    public function getAgreement()
    {
      return $this->agreement;
    }

    /**
     * @param agreement $agreement
     * @return \StephanWoerner\ErvExiSoap\Model\insConditionsType
     */
    public function setAgreement($agreement)
    {
      $this->agreement = $agreement;
      return $this;
    }

    /**
     * @return productLineUrls
     */
    public function getProductLineUrls()
    {
      return $this->productLineUrls;
    }

    /**
     * @param productLineUrls $productLineUrls
     * @return \StephanWoerner\ErvExiSoap\Model\insConditionsType
     */
    public function setProductLineUrls($productLineUrls)
    {
      $this->productLineUrls = $productLineUrls;
      return $this;
    }

}
