<?php

namespace StephanWoerner\ErvExiSoap\Model;

class preContractualInformationType
{

    /**
     * @var preContractualInformationItemType[] $preContractualInformationItem
     */
    protected $preContractualInformationItem = null;

    /**
     * @param preContractualInformationItemType[] $preContractualInformationItem
     */
    public function __construct(array $preContractualInformationItem)
    {
      $this->preContractualInformationItem = $preContractualInformationItem;
    }

    /**
     * @return preContractualInformationItemType[]
     */
    public function getPreContractualInformationItem()
    {
      return $this->preContractualInformationItem;
    }

    /**
     * @param preContractualInformationItemType[] $preContractualInformationItem
     * @return \StephanWoerner\ErvExiSoap\Model\preContractualInformationType
     */
    public function setPreContractualInformationItem(array $preContractualInformationItem)
    {
      $this->preContractualInformationItem = $preContractualInformationItem;
      return $this;
    }

}
