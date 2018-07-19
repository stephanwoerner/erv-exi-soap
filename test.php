<?php
/**
 * Created by PhpStorm.
 * User: Stephan Wörner
 * Date: 19.07.2018
 * Time: 10:12
 */

require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;


$paths = [dirname(__FILE__) . "/src/Entity"];
$isDevMode = false;

// the connection configuration
$dbParams = [
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '123',
    'dbname'   => 'summit',
];

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$driver = new AnnotationDriver(new AnnotationReader(), $paths);
AnnotationRegistry::registerLoader('class_exists');
$config->setMetadataDriverImpl($driver);

$em = EntityManager::create($dbParams, $config);

$exi = new \StephanWoerner\ErvExiSoap\Exi(
    $em,
    '012345000000', // replace with your agengy indentifier
    'standard',
    'test@test.de'
);
$exi->init(
    'https://egate2.erv.de/exiws201802/ExiConnector?wsdl',
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
var_dump($responseOffer);