# erv-exi-soap
Soap Interface for ERV travel insurance 

Contact support on ERV insurance company and make a contract to get your private agengy indetifier

contact@reiseversicherung.de

#Install
composer require stephanwoerner/erv-exi-soap

add to your AppKernel.php 
```` 
public function registerBundles()
{
    $bundles = [
        .
        .
        .
        new StephanWoerner\ErvExiSoap\ErvExiSoapBundle(),
    
    ];
}
````
add to your services.yml
````
services:
    sw.exi:
        class:        StephanWoerner\ErvExiSoap\Exi
        arguments:    ["@doctrine.orm.entity_manager", "%exi_agency_identifier%", "%exi_product_line%", "%exi_test_email%"]

````
and add exi_agency_identifier, exi_product_line and exi_test_email to your parameters.yml

#Database
Execute folowing query on your MySql database:

````
CREATE TABLE exi_protocol (id INT AUTO_INCREMENT NOT NULL, date_created DATETIME NOT NULL, booking_reference INT, request_type VARCHAR(100) NOT NULL, request TEXT NOT NULL, response TEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
````

#Example usage in Symfony Controller
````
$exi = $this->container->get('sw.exi');

$exi->init(
    'https://erv-sandbox.pcibooking.net/exiws201802/ExiConnector?wsdl',
    'EUR',
    'DE',
    'DEU',
    true
);
$responseOffer = $exi->callRequestOffer(
    [
        'firstname'   => 'Hans',
        'lastname'    => 'Mustermann',
        'street'      => 'Musteratr. 8',
        'zip'         => '12345',
        'city'        => 'Münchhausen',
        'countryCode' => 'DEU',
        'email'       => 'test@test.de'
    ],
    [
        'countryCode' => 'AUT',
        'fromDate'    => '2018-09-01',
        'endDate'     => '2018-09-02',
        'bookingDate' => '2018-07-19',
        'isFlight'    => true,
        'totalPrice'  => 1250.00,
    ],
    [
        [
            'firstname' => 'Hans',
            'lastname'  => 'Mustermann',
            'birthday'  => '1972-06-20',
            'price'     => 625.00
        ]
    ]
);
````

#Example without using Symfony framework.
Look at test.php


#Release notes
````
release_v9
New amazonPayment
New apAmount
New apPaymentType
New amazonPayment
New ClientTypeType
New creditcardHolderType
New initiatorType
New payPageData
New payPageUrl
New psd2ParameterType
New requestPayPageUrl
New responsePayPageUrl
acceptedPayments: + amazonPayment
agentType: + initiator default 'CUSTOMER'
ccPaymentType: + psd2Parameter, + ccPayPageHandleId
customerType: streetAndNr length 100
paymentMethodType: + ap/AP
paymentType: + amazonPay
servicePremium: anonymous length 75
serviceRenewalPremium: anonymous length 77
````