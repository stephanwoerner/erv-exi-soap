<?php


 function autoload_fc4298848d2daa9e60726a3e1e269864($class)
{
    $classes = array(
        'StephanWoerner\ErvExiSoap\Model\Exi_Service' => __DIR__ .'/Exi_Service.php',
        'StephanWoerner\ErvExiSoap\Model\addressCustomerType' => __DIR__ .'/addressCustomerType.php',
        'StephanWoerner\ErvExiSoap\Model\addressDifferingAccountHolderType' => __DIR__ .'/addressDifferingAccountHolderType.php',
        'StephanWoerner\ErvExiSoap\Model\tariffCategoryType' => __DIR__ .'/tariffCategoryType.php',
        'StephanWoerner\ErvExiSoap\Model\TripTypeType' => __DIR__ .'/TripTypeType.php',
        'StephanWoerner\ErvExiSoap\Model\addressTravellerType' => __DIR__ .'/addressTravellerType.php',
        'StephanWoerner\ErvExiSoap\Model\paymentMethodType' => __DIR__ .'/paymentMethodType.php',
        'StephanWoerner\ErvExiSoap\Model\ccType' => __DIR__ .'/ccType.php',
        'StephanWoerner\ErvExiSoap\Model\agentType' => __DIR__ .'/agentType.php',
        'StephanWoerner\ErvExiSoap\Model\agentWarningType' => __DIR__ .'/agentWarningType.php',
        'StephanWoerner\ErvExiSoap\Model\ProlongationRqType' => __DIR__ .'/ProlongationRqType.php',
        'StephanWoerner\ErvExiSoap\Model\ProlongationRpType' => __DIR__ .'/ProlongationRpType.php',
        'StephanWoerner\ErvExiSoap\Model\insConditionsType' => __DIR__ .'/insConditionsType.php',
        'StephanWoerner\ErvExiSoap\Model\productLineUrls' => __DIR__ .'/productLineUrls.php',
        'StephanWoerner\ErvExiSoap\Model\insConditionsRqType' => __DIR__ .'/insConditionsRqType.php',
        'StephanWoerner\ErvExiSoap\Model\linkType' => __DIR__ .'/linkType.php',
        'StephanWoerner\ErvExiSoap\Model\localisationType' => __DIR__ .'/localisationType.php',
        'StephanWoerner\ErvExiSoap\Model\customerType' => __DIR__ .'/customerType.php',
        'StephanWoerner\ErvExiSoap\Model\offersRpType' => __DIR__ .'/offersRpType.php',
        'StephanWoerner\ErvExiSoap\Model\offer' => __DIR__ .'/offer.php',
        'StephanWoerner\ErvExiSoap\Model\service' => __DIR__ .'/service.php',
        'StephanWoerner\ErvExiSoap\Model\acceptedPayments' => __DIR__ .'/acceptedPayments.php',
        'StephanWoerner\ErvExiSoap\Model\cc' => __DIR__ .'/cc.php',
        'StephanWoerner\ErvExiSoap\Model\acceptedCard' => __DIR__ .'/acceptedCard.php',
        'StephanWoerner\ErvExiSoap\Model\bank' => __DIR__ .'/bank.php',
        'StephanWoerner\ErvExiSoap\Model\agencyCollection' => __DIR__ .'/agencyCollection.php',
        'StephanWoerner\ErvExiSoap\Model\amazonPayment' => __DIR__ .'/amazonPayment.php',
        'StephanWoerner\ErvExiSoap\Model\benefits' => __DIR__ .'/benefits.php',
        'StephanWoerner\ErvExiSoap\Model\offersRqType' => __DIR__ .'/offersRqType.php',
        'StephanWoerner\ErvExiSoap\Model\differingAccountHolderType' => __DIR__ .'/differingAccountHolderType.php',
        'StephanWoerner\ErvExiSoap\Model\creditcardHolderType' => __DIR__ .'/creditcardHolderType.php',
        'StephanWoerner\ErvExiSoap\Model\paymentType' => __DIR__ .'/paymentType.php',
        'StephanWoerner\ErvExiSoap\Model\productSpecType' => __DIR__ .'/productSpecType.php',
        'StephanWoerner\ErvExiSoap\Model\providerDataType' => __DIR__ .'/providerDataType.php',
        'StephanWoerner\ErvExiSoap\Model\serviceType' => __DIR__ .'/serviceType.php',
        'StephanWoerner\ErvExiSoap\Model\servicePremium' => __DIR__ .'/servicePremium.php',
        'StephanWoerner\ErvExiSoap\Model\serviceRenewalPremium' => __DIR__ .'/serviceRenewalPremium.php',
        'StephanWoerner\ErvExiSoap\Model\systemRqType' => __DIR__ .'/systemRqType.php',
        'StephanWoerner\ErvExiSoap\Model\systemRpType' => __DIR__ .'/systemRpType.php',
        'StephanWoerner\ErvExiSoap\Model\tariffsType' => __DIR__ .'/tariffsType.php',
        'StephanWoerner\ErvExiSoap\Model\tariff' => __DIR__ .'/tariff.php',
        'StephanWoerner\ErvExiSoap\Model\travelType' => __DIR__ .'/travelType.php',
        'StephanWoerner\ErvExiSoap\Model\time' => __DIR__ .'/time.php',
        'StephanWoerner\ErvExiSoap\Model\totalTripCost' => __DIR__ .'/totalTripCost.php',
        'StephanWoerner\ErvExiSoap\Model\bankPaymentType' => __DIR__ .'/bankPaymentType.php',
        'StephanWoerner\ErvExiSoap\Model\ccPaymentType' => __DIR__ .'/ccPaymentType.php',
        'StephanWoerner\ErvExiSoap\Model\apPaymentType' => __DIR__ .'/apPaymentType.php',
        'StephanWoerner\ErvExiSoap\Model\apAmount' => __DIR__ .'/apAmount.php',
        'StephanWoerner\ErvExiSoap\Model\psd2ParameterType' => __DIR__ .'/psd2ParameterType.php',
        'StephanWoerner\ErvExiSoap\Model\initiatorType' => __DIR__ .'/initiatorType.php',
        'StephanWoerner\ErvExiSoap\Model\ClientTypeType' => __DIR__ .'/ClientTypeType.php',
        'StephanWoerner\ErvExiSoap\Model\ccValidType' => __DIR__ .'/ccValidType.php',
        'StephanWoerner\ErvExiSoap\Model\DescriptionURLType' => __DIR__ .'/DescriptionURLType.php',
        'StephanWoerner\ErvExiSoap\Model\preContractualInformationItemType' => __DIR__ .'/preContractualInformationItemType.php',
        'StephanWoerner\ErvExiSoap\Model\preContractualInformationType' => __DIR__ .'/preContractualInformationType.php',
        'StephanWoerner\ErvExiSoap\Model\destinationType' => __DIR__ .'/destinationType.php',
        'StephanWoerner\ErvExiSoap\Model\coveredTravelersType' => __DIR__ .'/coveredTravelersType.php',
        'StephanWoerner\ErvExiSoap\Model\coveredTravelerType' => __DIR__ .'/coveredTravelerType.php',
        'StephanWoerner\ErvExiSoap\Model\personType' => __DIR__ .'/personType.php',
        'StephanWoerner\ErvExiSoap\Model\personNameType' => __DIR__ .'/personNameType.php',
        'StephanWoerner\ErvExiSoap\Model\searchTravelersType' => __DIR__ .'/searchTravelersType.php',
        'StephanWoerner\ErvExiSoap\Model\extensionsType' => __DIR__ .'/extensionsType.php',
        'StephanWoerner\ErvExiSoap\Model\extensionType' => __DIR__ .'/extensionType.php',
        'StephanWoerner\ErvExiSoap\Model\searchTravelerType' => __DIR__ .'/searchTravelerType.php',
        'StephanWoerner\ErvExiSoap\Model\indCoverageType' => __DIR__ .'/indCoverageType.php',
        'StephanWoerner\ErvExiSoap\Model\tripCost' => __DIR__ .'/tripCost.php',
        'StephanWoerner\ErvExiSoap\Model\coveredLuggage' => __DIR__ .'/coveredLuggage.php',
        'StephanWoerner\ErvExiSoap\Model\requestOffer' => __DIR__ .'/requestOffer.php',
        'StephanWoerner\ErvExiSoap\Model\responseOffer' => __DIR__ .'/responseOffer.php',
        'StephanWoerner\ErvExiSoap\Model\requestPayPageUrl' => __DIR__ .'/requestPayPageUrl.php',
        'StephanWoerner\ErvExiSoap\Model\payPageData' => __DIR__ .'/payPageData.php',
        'StephanWoerner\ErvExiSoap\Model\responsePayPageUrl' => __DIR__ .'/responsePayPageUrl.php',
        'StephanWoerner\ErvExiSoap\Model\payPageUrl' => __DIR__ .'/payPageUrl.php',
        'StephanWoerner\ErvExiSoap\Model\requestPreContractualInformation' => __DIR__ .'/requestPreContractualInformation.php',
        'StephanWoerner\ErvExiSoap\Model\responsePreContractualInformation' => __DIR__ .'/responsePreContractualInformation.php',
        'StephanWoerner\ErvExiSoap\Model\requestBooking' => __DIR__ .'/requestBooking.php',
        'StephanWoerner\ErvExiSoap\Model\policyAsLink' => __DIR__ .'/policyAsLink.php',
        'StephanWoerner\ErvExiSoap\Model\responseBooking' => __DIR__ .'/responseBooking.php',
        'StephanWoerner\ErvExiSoap\Model\policy' => __DIR__ .'/policy.php',
        'StephanWoerner\ErvExiSoap\Model\totalPremium' => __DIR__ .'/totalPremium.php',
        'StephanWoerner\ErvExiSoap\Model\totalRenewalPremium' => __DIR__ .'/totalRenewalPremium.php',
        'StephanWoerner\ErvExiSoap\Model\policyAttachments' => __DIR__ .'/policyAttachments.php',
        'StephanWoerner\ErvExiSoap\Model\thanx' => __DIR__ .'/thanx.php',
        'StephanWoerner\ErvExiSoap\Model\requestCancellation' => __DIR__ .'/requestCancellation.php',
        'StephanWoerner\ErvExiSoap\Model\responseCancellation' => __DIR__ .'/responseCancellation.php',
        'StephanWoerner\ErvExiSoap\Model\systemErrorContainerType' => __DIR__ .'/systemErrorContainerType.php',
        'StephanWoerner\ErvExiSoap\Model\userErrorContainerType' => __DIR__ .'/userErrorContainerType.php',
        'StephanWoerner\ErvExiSoap\Model\userErrorType' => __DIR__ .'/userErrorType.php',
        'StephanWoerner\ErvExiSoap\Model\errorType' => __DIR__ .'/errorType.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_fc4298848d2daa9e60726a3e1e269864');

// Do nothing. The rest is just leftovers from the code generation.
{
}