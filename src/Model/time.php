<?php

namespace StephanWoerner\ErvExiSoap\Model;

class time
{

    /**
     * @var date $fromDate
     */
    protected $fromDate = null;

    /**
     * @var date $endDate
     */
    protected $endDate = null;

    /**
     * @var travelDurationType $duration
     */
    protected $duration = null;

    /**
     * @var date $bookingConfirmationDate
     */
    protected $bookingConfirmationDate = null;

    /**
     * @param date $fromDate
     * @param date $endDate
     * @param travelDurationType $duration
     * @param date $bookingConfirmationDate
     */
    public function __construct($fromDate, $endDate, $duration, $bookingConfirmationDate)
    {
      $this->fromDate = $fromDate;
      $this->endDate = $endDate;
      $this->duration = $duration;
      $this->bookingConfirmationDate = $bookingConfirmationDate;
    }

    /**
     * @return date
     */
    public function getFromDate()
    {
      return $this->fromDate;
    }

    /**
     * @param date $fromDate
     * @return \StephanWoerner\ErvExiSoap\Model\time
     */
    public function setFromDate($fromDate)
    {
      $this->fromDate = $fromDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param date $endDate
     * @return \StephanWoerner\ErvExiSoap\Model\time
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

    /**
     * @return travelDurationType
     */
    public function getDuration()
    {
      return $this->duration;
    }

    /**
     * @param travelDurationType $duration
     * @return \StephanWoerner\ErvExiSoap\Model\time
     */
    public function setDuration($duration)
    {
      $this->duration = $duration;
      return $this;
    }

    /**
     * @return date
     */
    public function getBookingConfirmationDate()
    {
      return $this->bookingConfirmationDate;
    }

    /**
     * @param date $bookingConfirmationDate
     * @return \StephanWoerner\ErvExiSoap\Model\time
     */
    public function setBookingConfirmationDate($bookingConfirmationDate)
    {
      $this->bookingConfirmationDate = $bookingConfirmationDate;
      return $this;
    }

}
