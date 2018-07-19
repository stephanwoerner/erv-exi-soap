<?php

namespace StephanWoerner\ErvExiSoap\Model;

class policyAsLink
{

    /**
     * @var boolean $sendLink
     */
    protected $sendLink = null;

    /**
     * @var boolean $sendAdditionalEmail
     */
    protected $sendAdditionalEmail = null;

    /**
     * @param boolean $sendLink
     * @param boolean $sendAdditionalEmail
     */
    public function __construct($sendLink, $sendAdditionalEmail)
    {
      $this->sendLink = $sendLink;
      $this->sendAdditionalEmail = $sendAdditionalEmail;
    }

    /**
     * @return boolean
     */
    public function getSendLink()
    {
      return $this->sendLink;
    }

    /**
     * @param boolean $sendLink
     * @return \StephanWoerner\ErvExiSoap\Model\policyAsLink
     */
    public function setSendLink($sendLink)
    {
      $this->sendLink = $sendLink;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSendAdditionalEmail()
    {
      return $this->sendAdditionalEmail;
    }

    /**
     * @param boolean $sendAdditionalEmail
     * @return \StephanWoerner\ErvExiSoap\Model\policyAsLink
     */
    public function setSendAdditionalEmail($sendAdditionalEmail)
    {
      $this->sendAdditionalEmail = $sendAdditionalEmail;
      return $this;
    }

}
