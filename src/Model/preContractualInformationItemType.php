<?php

namespace StephanWoerner\ErvExiSoap\Model;

class preContractualInformationItemType
{

    /**
     * @var StringLength1to100 $productName
     */
    protected $productName = null;

    /**
     * @var DescriptionURLType[] $preContractualInformationUrl
     */
    protected $preContractualInformationUrl = null;

    /**
     * @param StringLength1to100 $productName
     * @param DescriptionURLType[] $preContractualInformationUrl
     */
    public function __construct($productName, array $preContractualInformationUrl)
    {
      $this->productName = $productName;
      $this->preContractualInformationUrl = $preContractualInformationUrl;
    }

    /**
     * @return StringLength1to100
     */
    public function getProductName()
    {
      return $this->productName;
    }

    /**
     * @param StringLength1to100 $productName
     * @return \StephanWoerner\ErvExiSoap\Model\preContractualInformationItemType
     */
    public function setProductName($productName)
    {
      $this->productName = $productName;
      return $this;
    }

    /**
     * @return DescriptionURLType[]
     */
    public function getPreContractualInformationUrl()
    {
      return $this->preContractualInformationUrl;
    }

    /**
     * @param DescriptionURLType[] $preContractualInformationUrl
     * @return \StephanWoerner\ErvExiSoap\Model\preContractualInformationItemType
     */
    public function setPreContractualInformationUrl(array $preContractualInformationUrl)
    {
      $this->preContractualInformationUrl = $preContractualInformationUrl;
      return $this;
    }

}
