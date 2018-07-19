# erv-exi-soap
Soap Interface for ERV travel insurance 

Contact support on ERV insurance company and make a contract to get your private agengy indetifier

contact@reiseversicherung.de

#Install
composer require stephanwoerner/erv-exi-soap:*

#Example
Look at test.php
````
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