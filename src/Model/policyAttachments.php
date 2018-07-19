<?php

namespace StephanWoerner\ErvExiSoap\Model;

class policyAttachments
{

    /**
     * @var DescriptionURLType $policyAttachment
     */
    protected $policyAttachment = null;

    /**
     * @param DescriptionURLType $policyAttachment
     */
    public function __construct($policyAttachment)
    {
      $this->policyAttachment = $policyAttachment;
    }

    /**
     * @return DescriptionURLType
     */
    public function getPolicyAttachment()
    {
      return $this->policyAttachment;
    }

    /**
     * @param DescriptionURLType $policyAttachment
     * @return \StephanWoerner\ErvExiSoap\Model\policyAttachments
     */
    public function setPolicyAttachment($policyAttachment)
    {
      $this->policyAttachment = $policyAttachment;
      return $this;
    }

}
