<?php
/**
 * Created by PhpStorm.
 * User: Stephan
 * Date: 26.06.2018
 * Time: 14:18
 */

namespace StephanWoerner\ErvExiSoap\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Aktion
 *
 * @ORM\Table(name="exi_protocol")
 * @ORM\Entity
 */
class ExiProtocol
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false)
     */
    private $dateCreated;

    /**
     * @var integer
     *
     * @ORM\Column(name="booking_reference", type="integer", nullable=true)
     */
    private $bookingReference;

    /**
     * @var string
     *
     * @ORM\Column(name="request_type", type="string", length=100, nullable=false)
     */
    private $requestType;

    /**
     * @var string
     *
     * @ORM\Column(name="request", type="text", length=65535, nullable=false)
     */
    private $request;

    /**
     * @var string
     *
     * @ORM\Column(name="response", type="text", length=65535, nullable=false)
     */
    private $response;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param \DateTime $dateCreated
     * @return ExiProtocol
     */
    public function setDateCreated(\DateTime $dateCreated)
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * @return int
     */
    public function getBookingReference()
    {
        return $this->bookingReference;
    }

    /**
     * @param int $bookingReference
     * @return ExiProtocol
     */
    public function setBookingReference($bookingReference)
    {
        $this->bookingReference = $bookingReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
        return $this->requestType;
    }

    /**
     * @param string $requestType
     * @return ExiProtocol
     */
    public function setRequestType(string $requestType)
    {
        $this->requestType = $requestType;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param string $request
     * @return ExiProtocol
     */
    public function setRequest(string $request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * @return string
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param string $response
     * @return ExiProtocol
     */
    public function setResponse(string $response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}