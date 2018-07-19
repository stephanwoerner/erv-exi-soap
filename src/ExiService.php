<?php
/**
 * Created by PhpStorm.
 * User: Stephan
 * Date: 25.06.2018
 * Time: 09:49
 */

namespace StephanWoerner\ErvExiSoap;


use StephanWoerner\ErvExiSoap\Model\agentType;
use StephanWoerner\ErvExiSoap\Model\BooleanType;
use StephanWoerner\ErvExiSoap\Model\coveredLuggage;
use StephanWoerner\ErvExiSoap\Model\coveredTravelersType;
use StephanWoerner\ErvExiSoap\Model\coveredTravelerType;
use StephanWoerner\ErvExiSoap\Model\customerType;
use StephanWoerner\ErvExiSoap\Model\destinationType;
use StephanWoerner\ErvExiSoap\Model\Exi_Service;
use StephanWoerner\ErvExiSoap\Model\extensionsType;
use StephanWoerner\ErvExiSoap\Model\indCoverageType;
use StephanWoerner\ErvExiSoap\Model\insConditionsRqType;
use StephanWoerner\ErvExiSoap\Model\localisationType;
use StephanWoerner\ErvExiSoap\Model\offer;
use StephanWoerner\ErvExiSoap\Model\offerRq;
use StephanWoerner\ErvExiSoap\Model\offersRqType;
use StephanWoerner\ErvExiSoap\Model\paymentMethodType;
use StephanWoerner\ErvExiSoap\Model\paymentType;
use StephanWoerner\ErvExiSoap\Model\personNameType;
use StephanWoerner\ErvExiSoap\Model\personType;
use StephanWoerner\ErvExiSoap\Model\policyAsLink;
use StephanWoerner\ErvExiSoap\Model\policyRq;
use StephanWoerner\ErvExiSoap\Model\productSpecType;
use StephanWoerner\ErvExiSoap\Model\ProlongationRqType;
use StephanWoerner\ErvExiSoap\Model\providerDataType;
use StephanWoerner\ErvExiSoap\Model\requestBooking;
use StephanWoerner\ErvExiSoap\Model\requestCancellation;
use StephanWoerner\ErvExiSoap\Model\requestOffer;
use StephanWoerner\ErvExiSoap\Model\requestPreContractualInformation;
use StephanWoerner\ErvExiSoap\Model\responseBooking;
use StephanWoerner\ErvExiSoap\Model\searchTravelersType;
use StephanWoerner\ErvExiSoap\Model\searchTravelerType;
use StephanWoerner\ErvExiSoap\Model\serviceRq;
use StephanWoerner\ErvExiSoap\Model\systemRqType;
use StephanWoerner\ErvExiSoap\Model\time;
use StephanWoerner\ErvExiSoap\Model\totalTripCost;
use StephanWoerner\ErvExiSoap\Model\travelType;
use StephanWoerner\ErvExiSoap\Model\tripCost;
use StephanWoerner\ErvExiSoap\Model\TripTypeType;

class ExiService extends Exi_Service
{
    /**
     * @var object
     */
    protected $request;

    /**
     * @var object
     */
    protected $response;

    /**
     * @var boolean
     */
    protected $isTest = true;

    /**
     * @var string
     */
    protected $testEmail;

    /**
     * @var string
     */
    protected $requestID;

    /**
     * @var string
     */
    protected $agencyIdentifier;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var string
     */
    protected $language;

    /**
     * @var string
     */
    protected $countryCode;

    /**
     * @var string
     */
    protected $productLine;

    /**
     * @var string
     */
    protected $location = [];

    /**
     * @var array
     */
    public $options = ['trace' => true,
                       'exceptions' => true,
                       'connection_timeout' => 5,
                       'cache_wsdl' => WSDL_CACHE_NONE];


    /**
     * ExiService constructor.
     * @param string $wsdl
     * @param array $agencyIdentifier
     * @param $currency
     * @param $language
     * @param $countryCode
     * @param $productLine
     * @param $testEmail
     * @param $isTest
     */
    public function __construct($wsdl, $agencyIdentifier, $currency, $language, $countryCode, $productLine, $testEmail, $isTest)
    {
        $this->wsdl = $wsdl;
        $this->agencyIdentifier = $agencyIdentifier;
        $this->currency = $currency;
        $this->language = $language;
        $this->countryCode = $countryCode;
        $this->productLine = $productLine;
        $this->testEmail = $testEmail;
        $this->isTest = $isTest;
        parent::__construct($this->wsdl, $this->options);
    }

    /**
     * @return object
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @return object
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @return string
     */
    public function getRequestID()
    {
        return $this->requestID;
    }

    /**
     * @return systemRqType
     */
    public function getSystem()
    {
        $localisation = new localisationType($this->countryCode, $this->language, $this->currency);
        $system = new systemRqType($this->isTest, $localisation);
        return $system;
    }

    /**
     * @return agentType
     */
    public function getAgent()
    {
        $agent = new agentType($this->agencyIdentifier);
        return $agent;
    }

    /**
     * @param $bookinResponse
     * @return policyRq
     */
    public function getPolicy($bookinResponse)
    {
        /** @var responseBooking $bookingObj */
        $bookingObj = unserialize($bookinResponse);

        $policy= new policyRq($bookingObj->getPolicy()->getVsnr());
        return $policy;
    }

    /**
     * @return policyAsLink
     */
    public function getPolicyAsAlink()
    {
        $policyAsAlink = new policyAsLink(BooleanType::TRUE, BooleanType::TRUE);
        return $policyAsAlink;
    }

    /**
     * @return providerDataType
     */
    public function getProviderData()
    {
        $providerData = new providerDataType('DAV Summit Club GmbH');
        return $providerData;
    }

    /**
     * @return productSpecType
     */
    public function getProductSpec()
    {
        $productSpec = new productSpecType($this->productLine);
        return $productSpec;
    }

    /**
     * @param $travelData
     * @return travelType
     */
    public function getTravel($travelData)
    {
        $time = new time($travelData['fromDate'], $travelData['endDate'], null, $travelData['bookingDate']);
        $destination = new destinationType([$travelData['countryCode']], []);
        $travel = new travelType($time, $destination);
        $travel->setTripType($travelData['isFlight'] ? TripTypeType::FLT : TripTypeType::CAR)
               ->setTotalTripCost(new totalTripCost($travelData['totalPrice'], $this->currency));
        return $travel;
    }

    /**
     * @param $travelers
     * @return searchTravelersType
     */
    public function getSearchTravelers($travelers)
    {
        $searchTravelersArray = [];
        foreach ($travelers as $key => $traveler) {
            $searchTraveler = new searchTravelerType($traveler['birthday'], null, $key + 1);
            $indCoverage = new indCoverageType();
            $indCoverage->setTripCost(new tripCost($traveler['price'], $this->currency));
            $indCoverage->setCoveredLuggage(new coveredLuggage(0.00, $this->currency));
            #$searchTraveler->setIndCoverage($indCoverage);
            $searchTravelersArray[] = $searchTraveler;
        }
        $searchTravelers = new searchTravelersType($searchTravelersArray);
        return $searchTravelers;
    }

    /**
     * @return extensionsType
     */
    public function getExtensions()
    {
        $extensions = new extensionsType([]);
        return $extensions;
    }

    /**
     * @param $travelers
     * @return array|coveredTravelersType
     */
    public function getCoveredTravelers($travelers)
    {
        $coveredTravelers = [];
        foreach ($travelers as $key => $traveler) {
            $name = new personNameType($traveler['firstname'], $traveler['lastname']);
            $coveredPerson = new personType($name, $traveler['birthday'], null);
            $coveredTravelers[] = new coveredTravelerType($coveredPerson, $key + 1);
        }
        $coveredTravelers = new coveredTravelersType($coveredTravelers);
        return $coveredTravelers;
    }

    /**
     * @param $offers
     * @return offersRqType
     */
    public function getOffers($offers)
    {
        /** @var offer $offerObj */
        $offerObj = unserialize($offers);
        // only with this litle trick it works
        #$offer= json_decode(str_replace('\u0000*\u0000','',json_encode((array)$offerObj)));
        $service = new serviceRq($offerObj->getService()->serviceDesc, $offerObj->getService()->serviceDescAndPremium);
        $offer= new offerRq($offerObj->getSequence(), $offerObj->getOfferID(), $service);
        $offersRq = new offersRqType($offer);
        return $offersRq;
    }

    /**
     * @param $customerData
     * @return customerType
     */
    public function getCustomer($customerData)
    {

        $customer = new customerType(
            $customerData['firstname'],
            $customerData['lastname'],
            $customerData['street'],
            $customerData['zip'],
            $customerData['city'],
            $customerData['countryCode'],
            ($this->isTest ? $this->testEmail : $customerData['email'])
        );
        return $customer;
    }

    /**
     * @return paymentType
     */
    public function getPayment()
    {
        $payment = new paymentType(paymentMethodType::AI, null, null);
        return $payment;
    }

    /**
     * @return insConditionsRqType
     */
    public function getInsConditionsRq()
    {
        $insConditions = new insConditionsRqType(BooleanType::TRUE);
        return $insConditions;
    }

    /**
     * @return ProlongationRqType
     */
    public function getProlongationAgreement()
    {
        $prolongationAgreement = new ProlongationRqType(BooleanType::FALSE);
        return $prolongationAgreement;
    }

    /**
     * @param array $customerData
     * @param array $travelData
     * @param array $travellers
     */
    public function callRequestOffer($customerData, $travelData, $travellers)
    {
        $system = $this->getSystem();
        $agent = $this->getAgent();
        $providerData = $this->getProviderData();
        $productSpec = $this->getProductSpec();
        $travel = $this->getTravel($travelData);
        $searchTravelers = $this->getSearchTravelers($travellers);
        $extensions = $this->getExtensions();
        $this->requestID = uniqid();

        $request = new requestOffer(
            $system,
            $agent,
            $providerData,
            $productSpec,
            $customerData['countryCode'],
            $travel,
            $searchTravelers,
            null,
            $this->requestID
        );
        $responseOffer = $this->requestOffer($request);
        $this->request = $request;
        $this->response = $responseOffer;
    }

    /**
     * @param $customerData
     * @param array $travelData
     * @param array $travellers
     * @param $requestID
     * @param $offerID
     */
    public function callRequestPreContractualInformation($customerData, $travelData, $travellers, $requestID, $offerID)
    {
        $system = $this->getSystem();
        $agent = $this->getAgent();
        $travel = $this->getTravel($travelData);
        $coveredTravelers = $this->getCoveredTravelers($travellers);
        $customer = $this->getCustomer($customerData);
        $extensions = $this->getExtensions();

        $request = new requestPreContractualInformation(
            $system,
            $agent,
            $offerID,
            $travel,
            $coveredTravelers,
            $customer,
            null,
            $requestID
        );
        $responsePreContractualInformation = $this->requestPreContractualInformation($request);
        $this->request = $request;
        $this->response = $responsePreContractualInformation;
    }

    /**
     * @param $customerData
     * @param $travelData
     * @param $travellers
     * @param $requestID
     * @param $offer
     * @param $preContractualInformationID
     */
    public function callRequestBooking($customerData, $travelData, $travellers, $requestID, $offer, $preContractualInformationID)
    {
        $system = $this->getSystem();
        $agent = $this->getAgent();
        $policyAsLink = $this->getPolicyAsAlink();
        $providerData = $this->getProviderData();
        $productSpec = $this->getProductSpec();
        $travel = $this->getTravel($travelData);
        $coveredTravelers = $this->getCoveredTravelers($travellers);
        $offers = $this->getOffers($offer);

        $customer = $this->getCustomer($customerData);
        $payment = $this->getPayment();
        $insConditions = $this->getInsConditionsRq();
        $prolongationAgreement = $this->getProlongationAgreement();
        $extensions = $this->getExtensions();

        $request = new requestBooking(
            $system,
            $agent,
            $policyAsLink,
            $providerData,
            $productSpec,
            $travel,
            $coveredTravelers,
            $offers,
            $preContractualInformationID,
            $customer,
            $payment,
            $insConditions,
            null,
            null,
            $requestID
        );
        $responseBooking = $this->requestBooking($request);
        $this->request = $request;
        $this->response = $responseBooking;
    }

    /**
     * @param $requestID
     * @param $bookingResponse
     */
    public function callRequestCancellation($requestID, $bookingResponse)
    {
        $system = $this->getSystem();
        $agent = $this->getAgent();
        $policy = $this->getPolicy($bookingResponse);

        $request = new requestCancellation(
            $system,
            $agent,
            $policy,
            $requestID
        );
        $responseCancellation = $this->requestCancellation($request);
        $this->request = $request;
        $this->response = $responseCancellation;
    }
}