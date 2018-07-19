<?php

namespace StephanWoerner\ErvExiSoap\Model;

class Exi_Service extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'agentType' => 'StephanWoerner\\ErvExiSoap\\Model\\agentType',
        'agentWarningType' => 'StephanWoerner\\ErvExiSoap\\Model\\agentWarningType',
        'ProlongationRqType' => 'StephanWoerner\\ErvExiSoap\\Model\\ProlongationRqType',
        'ProlongationRpType' => 'StephanWoerner\\ErvExiSoap\\Model\\ProlongationRpType',
        'insConditionsType' => 'StephanWoerner\\ErvExiSoap\\Model\\insConditionsType',
        'productLineUrls' => 'StephanWoerner\\ErvExiSoap\\Model\\productLineUrls',
        'insConditionsRqType' => 'StephanWoerner\\ErvExiSoap\\Model\\insConditionsRqType',
        'linkType' => 'StephanWoerner\\ErvExiSoap\\Model\\linkType',
        'localisationType' => 'StephanWoerner\\ErvExiSoap\\Model\\localisationType',
        'customerType' => 'StephanWoerner\\ErvExiSoap\\Model\\customerType',
        'offersRpType' => 'StephanWoerner\\ErvExiSoap\\Model\\offersRpType',
        'offer' => 'StephanWoerner\\ErvExiSoap\\Model\\offer',
        'service' => 'StephanWoerner\\ErvExiSoap\\Model\\service',
        'acceptedPayments' => 'StephanWoerner\\ErvExiSoap\\Model\\acceptedPayments',
        'cc' => 'StephanWoerner\\ErvExiSoap\\Model\\cc',
        'acceptedCard' => 'StephanWoerner\\ErvExiSoap\\Model\\acceptedCard',
        'bank' => 'StephanWoerner\\ErvExiSoap\\Model\\bank',
        'agencyCollection' => 'StephanWoerner\\ErvExiSoap\\Model\\agencyCollection',
        'benefits' => 'StephanWoerner\\ErvExiSoap\\Model\\benefits',
        'offersRqType' => 'StephanWoerner\\ErvExiSoap\\Model\\offersRqType',
        'differingAccountHolderType' => 'StephanWoerner\\ErvExiSoap\\Model\\differingAccountHolderType',
        'paymentType' => 'StephanWoerner\\ErvExiSoap\\Model\\paymentType',
        'productSpecType' => 'StephanWoerner\\ErvExiSoap\\Model\\productSpecType',
        'providerDataType' => 'StephanWoerner\\ErvExiSoap\\Model\\providerDataType',
        'serviceType' => 'StephanWoerner\\ErvExiSoap\\Model\\serviceType',
        'servicePremium' => 'StephanWoerner\\ErvExiSoap\\Model\\servicePremium',
        'serviceRenewalPremium' => 'StephanWoerner\\ErvExiSoap\\Model\\serviceRenewalPremium',
        'systemRqType' => 'StephanWoerner\\ErvExiSoap\\Model\\systemRqType',
        'systemRpType' => 'StephanWoerner\\ErvExiSoap\\Model\\systemRpType',
        'tariffsType' => 'StephanWoerner\\ErvExiSoap\\Model\\tariffsType',
        'tariff' => 'StephanWoerner\\ErvExiSoap\\Model\\tariff',
        'travelType' => 'StephanWoerner\\ErvExiSoap\\Model\\travelType',
        'time' => 'StephanWoerner\\ErvExiSoap\\Model\\time',
        'totalTripCost' => 'StephanWoerner\\ErvExiSoap\\Model\\totalTripCost',
        'bankPaymentType' => 'StephanWoerner\\ErvExiSoap\\Model\\bankPaymentType',
        'ccPaymentType' => 'StephanWoerner\\ErvExiSoap\\Model\\ccPaymentType',
        'ccValidType' => 'StephanWoerner\\ErvExiSoap\\Model\\ccValidType',
        'DescriptionURLType' => 'StephanWoerner\\ErvExiSoap\\Model\\DescriptionURLType',
        'preContractualInformationItemType' => 'StephanWoerner\\ErvExiSoap\\Model\\preContractualInformationItemType',
        'preContractualInformationType' => 'StephanWoerner\\ErvExiSoap\\Model\\preContractualInformationType',
        'destinationType' => 'StephanWoerner\\ErvExiSoap\\Model\\destinationType',
        'coveredTravelersType' => 'StephanWoerner\\ErvExiSoap\\Model\\coveredTravelersType',
        'coveredTravelerType' => 'StephanWoerner\\ErvExiSoap\\Model\\coveredTravelerType',
        'personType' => 'StephanWoerner\\ErvExiSoap\\Model\\personType',
        'personNameType' => 'StephanWoerner\\ErvExiSoap\\Model\\personNameType',
        'searchTravelersType' => 'StephanWoerner\\ErvExiSoap\\Model\\searchTravelersType',
        'extensionsType' => 'StephanWoerner\\ErvExiSoap\\Model\\extensionsType',
        'extensionType' => 'StephanWoerner\\ErvExiSoap\\Model\\extensionType',
        'searchTravelerType' => 'StephanWoerner\\ErvExiSoap\\Model\\searchTravelerType',
        'indCoverageType' => 'StephanWoerner\\ErvExiSoap\\Model\\indCoverageType',
        'tripCost' => 'StephanWoerner\\ErvExiSoap\\Model\\tripCost',
        'coveredLuggage' => 'StephanWoerner\\ErvExiSoap\\Model\\coveredLuggage',
        'requestOffer' => 'StephanWoerner\\ErvExiSoap\\Model\\requestOffer',
        'responseOffer' => 'StephanWoerner\\ErvExiSoap\\Model\\responseOffer',
        'requestPreContractualInformation' => 'StephanWoerner\\ErvExiSoap\\Model\\requestPreContractualInformation',
        'responsePreContractualInformation' => 'StephanWoerner\\ErvExiSoap\\Model\\responsePreContractualInformation',
        'requestBooking' => 'StephanWoerner\\ErvExiSoap\\Model\\requestBooking',
        'policyAsLink' => 'StephanWoerner\\ErvExiSoap\\Model\\policyAsLink',
        'responseBooking' => 'StephanWoerner\\ErvExiSoap\\Model\\responseBooking',
        'policy' => 'StephanWoerner\\ErvExiSoap\\Model\\policy',
        'totalPremium' => 'StephanWoerner\\ErvExiSoap\\Model\\totalPremium',
        'totalRenewalPremium' => 'StephanWoerner\\ErvExiSoap\\Model\\totalRenewalPremium',
        'policyAttachments' => 'StephanWoerner\\ErvExiSoap\\Model\\policyAttachments',
        'thanx' => 'StephanWoerner\\ErvExiSoap\\Model\\thanx',
        'requestCancellation' => 'StephanWoerner\\ErvExiSoap\\Model\\requestCancellation',
        'responseCancellation' => 'StephanWoerner\\ErvExiSoap\\Model\\responseCancellation',
        'systemErrorContainerType' => 'StephanWoerner\\ErvExiSoap\\Model\\systemErrorContainerType',
        'userErrorContainerType' => 'StephanWoerner\\ErvExiSoap\\Model\\userErrorContainerType',
        'userErrorType' => 'StephanWoerner\\ErvExiSoap\\Model\\userErrorType',
        'errorType' => 'StephanWoerner\\ErvExiSoap\\Model\\errorType',
    );

    /**
     * @param string $wsdl The wsdl file to use
     * @param array $options A array of config values
     */
    public function __construct($wsdl, array $options = array())
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        $options = array_merge(array(
            'features' => 1,
        ), $options);

        parent::__construct($wsdl, $options);
    }

    /**
     * @param requestOffer $requestOffer
     * @return responseOffer
     */
    public function requestOffer(requestOffer $requestOffer)
    {
        return $this->__soapCall('requestOffer', array($requestOffer));
    }

    /**
     * @param requestPreContractualInformation $requestPreContractualInformation
     * @return responsePreContractualInformation
     */
    public function requestPreContractualInformation(requestPreContractualInformation $requestPreContractualInformation)
    {
        return $this->__soapCall('requestPreContractualInformation', array($requestPreContractualInformation));
    }

    /**
     * @param requestBooking $requestBooking
     * @return responseBooking
     */
    public function requestBooking(requestBooking $requestBooking)
    {
        return $this->__soapCall('requestBooking', array($requestBooking));
    }

    /**
     * @param requestCancellation $requestCancellation
     * @return responseCancellation
     */
    public function requestCancellation(requestCancellation $requestCancellation)
    {
        return $this->__soapCall('requestCancellation', array($requestCancellation));
    }
}
