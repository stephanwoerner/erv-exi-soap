<?php

namespace StephanWoerner\ErvExiSoap\Model;

class productSpecType
{

    /**
     * @var StringLength1to30 $productLine
     */
    protected $productLine = null;

    /**
     * @var StringLength1to30 $tourOperator
     */
    protected $tourOperator = null;

    /**
     * @param StringLength1to30 $productLine
     */
    public function __construct($productLine)
    {
      $this->productLine = $productLine;
    }

    /**
     * @return StringLength1to30
     */
    public function getProductLine()
    {
      return $this->productLine;
    }

    /**
     * @param StringLength1to30 $productLine
     * @return \StephanWoerner\ErvExiSoap\Model\productSpecType
     */
    public function setProductLine($productLine)
    {
      $this->productLine = $productLine;
      return $this;
    }

    /**
     * @return StringLength1to30
     */
    public function getTourOperator()
    {
      return $this->tourOperator;
    }

    /**
     * @param StringLength1to30 $tourOperator
     * @return \StephanWoerner\ErvExiSoap\Model\productSpecType
     */
    public function setTourOperator($tourOperator)
    {
      $this->tourOperator = $tourOperator;
      return $this;
    }

}
