<?php

namespace StephanWoerner\ErvExiSoap\Model;

class ExiOffer
{
    /**
     * @var string $ccType
     */
    protected $offerID;

    /**
     * @var boolean $conditions
     */
    protected $conditions;

    /**
     * @return string
     */
    public function getOfferID()
    {
        return $this->offerID;
    }

    /**
     * @param string $offerID
     * @return ExiOffer
     */
    public function setOfferID(string $offerID)
    {
        $this->offerID = $offerID;
        return $this;
    }

    /**
     * @return bool
     */
    public function isConditions()
    {
        return $this->conditions;
    }

    /**
     * @param bool $conditions
     * @return ExiOffer
     */
    public function setConditions(bool $conditions)
    {
        $this->conditions = $conditions;
        return $this;
    }

}
