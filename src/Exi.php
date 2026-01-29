<?php
/**
 * Created by PhpStorm.
 * User: Stephan
 * Date: 26.06.2018
 * Time: 14:25
 */

namespace StephanWoerner\ErvExiSoap;


use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use StephanWoerner\ErvExiSoap\Entity\ExiProtocol;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

class Exi
{
    /**
     * @var ExiService
     */
    protected $exiService;

    public function __construct(
        private EntityManagerInterface $em,
        #[Autowire(param: 'exi_agency_identifier')]
        private string                 $agencyIdentifier,
        #[Autowire(param: 'exi_product_line')]
        private string                 $productLine,
        #[Autowire(param: 'exi_test_email')]
        private string                 $testEmail
    ) {}

    /**
     * @param $wsdl
     * example: https://egate.erv.de/exiws201802/ExiConnector?wsdl
     * @param $currency
     * example: EUR
     * @param $language
     * example: DE
     * @param $countryCode
     * example: DEU
     * @param $initiator
     * example: customer|broker
     * @param $isTest
     * example: true
     */
    public function init($wsdl, $currency, $language, $countryCode, $initiator, $isTest) {
        $this->exiService = new ExiService(
            $wsdl,
            $this->agencyIdentifier,
            $currency,
            $language,
            $countryCode,
            $this->productLine,
            $this->testEmail,
            $isTest
        );
        $this->exiService->setInitiator($initiator);
    }

    /**
     * @return ExiService
     */
    public function getExiService()
    {
        return $this->exiService;
    }

    /**
     * @param string $requestType
     * @param string|null $bookingReference
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    protected function exiProtocol(string $requestType, string $bookingReference = null)
    {
        $exiProtocol = new ExiProtocol();
        $exiProtocol
            ->setDateCreated(new \DateTime())
            ->setBookingReference($bookingReference)
            ->setRequestType($requestType)
            ->setRequest(serialize($this->exiService->getRequest()))
            ->setResponse(serialize($this->exiService->getResponse()))
            ->setIsError(null === $this->exiService->getResponse() ||
                null !== $this->exiService->getResponse()->getUserError() ||
                null !== $this->exiService->getResponse()->getSystemError()
            )
            ->setIsExported(0)
            ->setVsnr(
                $requestType == 'Booking' && !$exiProtocol->isError() ?
                    $this->exiService->getResponse()->getPolicy()->getVsnr() :
                    null
            );
        $this->em->persist($exiProtocol);
        $this->em->flush();
    }

    /**
     * @param array $customerData
     * example: [
     *          'firstname'   => 'Hans',
     *          'lastname'    => 'Mustermann',
     *          'street'      => 'Musteratr. 8',
     *          'zip'         => '12345',
     *          'city'        => 'Münchhausen',
     *          'countryCode' => 'DEU',
     *          'email'       => 'test@test.de'
     *          ]
     * @param array $travelData
     * example: [
     *           'countryCode' => 'AUT',
     *           'fromDate'    => '2018-09-01',
     *           'endDate'     => '2018-09-01',
     *           'bookingDate' => '2018-06-25',
     *           'isFlight'    => true,
     *           'totalPrice'  => 1250.00,
     *          ]
     * @param array $travellers
     * example: [
     *           [
     *            'firstname'   => 'Hans',
     *            'lastname'    => 'Mustermann',
     *            'birthday'    => '1972-06-20',
     *            'price'       => 625.00
     *           ],
     *          ]
     *
     * @throws \Doctrine\ORM\OptimisticLockException
     * @return object
     */
    public function callRequestOffer(array $customerData, array $travelData, array $travellers)
    {
        $this->exiService->callRequestOffer($customerData, $travelData, $travellers);
        $this->exiProtocol('Offer');
        return $this->exiService->getResponse();
    }

    /**
     * @param $customerData
     * example: [
     *          'firstname'   => 'Hans',
     *          'lastname'    => 'Mustermann',
     *          'street'      => 'Musteratr. 8',
     *          'zip'         => '12345',
     *          'city'        => 'Münchhausen',
     *          'countryCode' => 'DEU',
     *          'email'       => 'test@test.de'
     *          ]
     * @param array $travelData
     * example: [
     *           'countryCode' => 'AUT',
     *           'fromDate'    => '2018-09-01',
     *           'endDate'     => '2018-09-01',
     *           'bookingDate' => '2018-06-25',
     *           'isFlight'    => true,
     *           'totalPrice'  => 1250.00,
     *          ]
     * @param array $travellers
     * example: [
     *           [
     *            'firstname'   => 'Hans',
     *            'lastname'    => 'Mustermann',
     *            'birthday'    => '1972-06-20',
     *            'price'       => 625.00
     *           ],
     *          ]
     * @param $requestID
     * @param $offerID
     * @param $bookingReference
     *
     * @throws \Doctrine\ORM\OptimisticLockException
     * @return object
     */
    public function callRequestPreContractualInformation(
        array $customerData,
        array $travelData,
        array $travellers,
              $requestID,
              $offerID,
              $bookingReference
    ) {
        $this->exiService->callRequestPreContractualInformation(
            $customerData,
            $travelData,
            $travellers,
            $requestID,
            $offerID
        );
        $this->exiProtocol('PreContractualInformation', $bookingReference);
        return $this->exiService->getResponse();
    }

    /**
     * @param $customerData
     * example: [
     *          'firstname'   => 'Hans',
     *          'lastname'    => 'Mustermann',
     *          'street'      => 'Musteratr. 8',
     *          'zip'         => '12345',
     *          'city'        => 'Münchhausen',
     *          'countryCode' => 'DEU',
     *          'email'       => 'test@test.de'
     *          ]
     * @param array $travelData
     * example: [
     *           'countryCode' => 'AUT',
     *           'fromDate'    => '2018-09-01',
     *           'endDate'     => '2018-09-01',
     *           'bookingDate' => '2018-06-25',
     *           'isFlight'    => true,
     *           'totalPrice'  => 1250.00,
     *          ]
     * @param array $travellers
     * example: [
     *           [
     *            'firstname'   => 'Hans',
     *            'lastname'    => 'Mustermann',
     *            'birthday'    => '1972-06-20',
     *            'price'       => 625.00
     *           ],
     *          ]
     * @param $requestID
     * example: 5b476c7ad391c
     * @param $offer
     * example: O:36:"Exi\Model\offer":5:{s:11:" * sequence";i:1;s:10:" * offerID";s:25:"139932241##VK17RRVRABMEAB";s:10:" * service";O:38:"Exi\Model\service":5:{s:14:" * servicetype";s:7:"rrv,rab";s:11:"serviceDesc";s:73:"Reiserücktritts-Versicherung (inkl. Reiseabbruch-Vers.) Auto, Bus & Bahn";s:14:"servicePremium";O:45:"Exi\Model\servicePremium":2:{s:4:" * _";s:23:"EUR 108,00 Familie/Paar";s:14:" * premiumtype";s:1:"c";}s:21:"serviceDescAndPremium";s:97:"Reiserücktritts-Versicherung (inkl. Reiseabbruch-Vers.) Auto, Bus & Bahn EUR 108,00 Familie/Paar";s:7:"tariffs";O:42:"Exi\Model\tariffsType":1:{s:9:" * tariff";a:1:{i:0;O:37:"Exi\Model\tariff":3:{s:6:" * key";s:6:"RDM317";s:10:" * premium";s:6:"108.00";s:17:" * renewalPremium";N;}}}}s:19:" * acceptedPayments";O:47:"Exi\Model\acceptedPayments":3:{s:5:" * cc";O:33:"Exi\Model\cc":2:{s:15:" * acceptedCard";a:3:{i:0;O:43:"Exi\Model\acceptedCard":1:{s:9:" * ccType";s:1:"v";}i:1;O:43:"Exi\Model\acceptedCard":1:{s:9:" * ccType";s:1:"a";}i:2;O:43:"Exi\Model\acceptedCard":1:{s:9:" * ccType";s:1:"e";}}s:11:" * accepted";b:1;}s:7:" * bank";O:35:"Exi\Model\bank":1:{s:11:" * accepted";b:1;}s:19:" * agencyCollection";O:47:"Exi\Model\agencyCollection":1:{s:11:" * accepted";b:1;}}s:11:" * benefits";O:39:"Exi\Model\benefits":1:{s:17:" * descriptionURL";a:1:{i:0;O:49:"Exi\Model\DescriptionURLType":4:{s:4:" * _";s:82:"https://www.reiseversicherung.de/de/erv-vergleich/reiseversicherung-busreisen.html";s:7:" * type";s:3:"INF";s:8:" * label";s:17:"Produktübersicht";s:13:" * defaultInd";b:1;}}}}
     * Example shows a offer after call serialize($offer), this is mandatory for saving object to database
     * @param $preContractualInformationID
     * example: RA-ERV-106756
     * @param $bookingReference
     *
     * @throws \Doctrine\ORM\OptimisticLockException
     * @return object
     */
    public function callRequestBooking(
        array $customerData,
        array $travelData,
        array $travellers,
              $requestID,
              $offer,
              $preContractualInformationID,
              $bookingReference
    ) {
        $this->exiService->setProviderData($bookingReference);
        $this->exiService->callRequestBooking(
            $customerData,
            $travelData,
            $travellers,
            $requestID,
            $offer,
            $preContractualInformationID
        );
        $this->exiProtocol('Booking', $bookingReference);
        return $this->exiService->getResponse();
    }

    /**
     * @param $requestID
     * example: 5b476c7ad391c
     * @param $bookingResponse
     * example: O:46:"Exi\Model\responseBooking":9:{s:9:" * system";O:43:"Exi\Model\systemRpType":1:{s:15:" * localisation";O:47:"Exi\Model\localisationType":3:{s:14:" * countryCode";s:3:"DEU";s:15:" * languageCode";s:2:"DE";s:15:" * currencyCode";s:3:"EUR";}}s:8:" * agent";N;s:9:" * policy";O:37:"Exi\Model\policy":5:{s:7:" * vsnr";s:9:"101006024";s:15:" * totalPremium";O:43:"Exi\Model\totalPremium":2:{s:9:" * amount";s:6:"109.00";s:15:" * currencyCode";s:3:"EUR";}s:22:" * totalRenewalPremium";N;s:17:" * policyPrintURL";s:192:"https://egate2.erv.de/exiWeb/policy/101006024.pdf?rc=ERVDE&hagtnr=027815&crs=EXI&vsnr=101006024&appl=EXI&mc=DE&nagtnr=000000&sectoken=d52342c4-7c14-4484-b250-29a61956e690&locale=de_DE&target=T";s:20:" * policyAttachments";O:48:"Exi\Model\policyAttachments":1:{s:19:" * policyAttachment";a:1:{i:0;O:49:"Exi\Model\DescriptionURLType":4:{s:4:" * _";s:94:"https://egate2.erv.de/exiWeb/pib?lc=de_DE&appl=EXI&date=1531493628099&tc=PDM111&rc=ERVDE&mc=DE";s:7:" * type";s:3:"PIS";s:8:" * label";s:44:"RundumSorglos-Schutz (mit Selbstbeteiligung)";s:13:" * defaultInd";b:1;}}}}s:8:" * thanx";O:36:"Exi\Model\thanx":2:{s:7:" * text";s:465:"Vielen Dank fÃ¼r Ihren Online-Abschluss bei der ERV! Wichtiger Hinweis: Ihre PrÃ¤mienrechnung und VersicherungsbestÃ¤tigung sowie Ihr Versicherungsschein werden an Ihre angegebene E-Mail-Adresse versandt. Sollten Sie diese nicht erhalten oder Fragen zu Ihrem Versicherungsschutz haben, wenden Sie sich bitte an unser ServiceCenter: Tel.: +49 (0) 89 41 66 11 02 (Montag bis Freitag von 8:00 - 19:00 Uhr) E-Mail: contact.erv.de. Ihre EuropÃ¤ische Reiseversicherung AG";s:7:" * link";O:39:"Exi\Model\linkType":2:{s:8:" * label";s:41:"Vielen Dank fÃ¼r Ihre Buchung bei der ERV";s:7:" * href";s:55:"http://www.reiseversicherung.de/exi/aktuell/thanks.html";}}s:13:" * extensions";N;s:12:" * userError";N;s:14:" * systemError";N;s:12:" * requestID";s:13:"5b48bca92b855";s:13:" * responseID";s:36:"71a4b122-a850-46fd-b757-06474338571a";}
     * Example shows a booking response after call serialize($responseBooking), this is mandatory for saving object to database
     * Remember that cancellation in test environment don't works. You must call your support team on ERV to enable your booking for cancellation
     * @param $bookingReference
     *
     * @throws \Doctrine\ORM\OptimisticLockException
     * @return object
     */
    public function callRequestCancellation($requestID, $bookingResponse, $bookingReference)
    {
        $this->exiService->callRequestCancellation($requestID, $bookingResponse);
        $this->exiProtocol('Cancellation', $bookingReference);
        return $this->exiService->getResponse();
    }
}