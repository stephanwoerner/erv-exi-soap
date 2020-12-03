<?php
/**
 * Created by PhpStorm.
 * User: Papa
 * Date: 03.12.2020
 * Time: 09:50
 */
require '../vendor/autoload.php';

$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
    new \Wsdl2PhpGenerator\Config(array(
        'inputFile' => 'exiWS_v201909.wsdl',
        'outputDir' => 'Model',
        'namespaceName' => 'StephanWoerner\ErvExiSoap\Model'
    ))
);