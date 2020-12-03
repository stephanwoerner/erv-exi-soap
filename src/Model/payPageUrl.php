<?php

namespace StephanWoerner\ErvExiSoap\Model;

class payPageUrl
{

    /**
     * @var payPageHandleIDType $payPageHandleId
     */
    protected $payPageHandleId = null;

    /**
     * @var anyURI $url
     */
    protected $url = null;

    /**
     * @param payPageHandleIDType $payPageHandleId
     * @param anyURI $url
     */
    public function __construct($payPageHandleId, $url)
    {
      $this->payPageHandleId = $payPageHandleId;
      $this->url = $url;
    }

    /**
     * @return payPageHandleIDType
     */
    public function getPayPageHandleId()
    {
      return $this->payPageHandleId;
    }

    /**
     * @param payPageHandleIDType $payPageHandleId
     * @return \StephanWoerner\ErvExiSoap\Model\payPageUrl
     */
    public function setPayPageHandleId($payPageHandleId)
    {
      $this->payPageHandleId = $payPageHandleId;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param anyURI $url
     * @return \StephanWoerner\ErvExiSoap\Model\payPageUrl
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

}
