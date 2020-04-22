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
 * @ORM\Table(name="exi_protocol", indexes={@ORM\Index(name="idx_exi_protocol_booking_reference", columns={"booking_reference"}), @ORM\Index(name="idx_exi_protocol_vsnr", columns={"vsnr"})})
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
     * @var integer
     *
     * @ORM\Column(name="vsnr", type="integer", nullable=true)
     */
    private $vsnr;

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
     * @var boolean
     *
     * @ORM\Column(name="is_exported", type="boolean", nullable=true)
     */
    private $isExported;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_error", type="boolean", nullable=true)
     */
    private $isError;

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
    public function getDateCreated(): ?\DateTime
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
    public function getBookingReference(): ?int
    {
        return $this->bookingReference;
    }

    /**
     * @return int
     */
    public function getVsnr(): ?int
    {
        return $this->vsnr;
    }

    /**
     * @param int $vsnr
     * @return ExiProtocol
     */
    public function setVsnr(?int $vsnr): ExiProtocol
    {
        $this->vsnr = $vsnr;
        return $this;
    }

    /**
     * @param int $bookingReference
     * @return ExiProtocol
     */
    public function setBookingReference(?int $bookingReference)
    {
        $this->bookingReference = $bookingReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequestType(): ?string
    {
        return $this->requestType;
    }

    /**
     * @param string $requestType
     * @return ExiProtocol
     */
    public function setRequestType(?string $requestType)
    {
        $this->requestType = $requestType;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequest(): ?string
    {
        return $this->request;
    }

    /**
     * @param string $request
     * @return ExiProtocol
     */
    public function setRequest(?string $request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * @return string
     */
    public function getResponse(): ?string
    {
        return $this->response;
    }

    /**
     * @param string $response
     * @return ExiProtocol
     */
    public function setResponse(?string $response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * @return bool
     */
    public function isExported(): ?bool
    {
        return $this->isExported;
    }

    /**
     * @param bool $isExported
     * @return ExiProtocol
     */
    public function setIsExported(?bool $isExported): ExiProtocol
    {
        $this->isExported = $isExported;
        return $this;
    }

    /**
     * @return bool
     */
    public function isError(): ?bool
    {
        return $this->isError;
    }

    /**
     * @param bool $isError
     * @return ExiProtocol
     */
    public function setIsError(?bool $isError): ExiProtocol
    {
        $this->isError = $isError;
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