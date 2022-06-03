<?php

namespace Tests\Unit;

use App\Dto\XmlStateDto;
use App\Http\Services\ParserServiceNew;
use PHPUnit\Framework\TestCase;

class ParserTest extends TestCase
{
    /**
     * Test convertXmlToJson
     *
     * @return void
     */
    public function test_convert_xml_to_json_return_array(): void
    {
        $url = '/var/www/appjobs/public/feed_2.xml';

        $array = (new ParserServiceNew(new XmlStateDto))->convertXmlToJson($url);

        $this->assertEqualsCanonicalizing($array, [
            'product' => [
                'data_feed_id' => '41399',
                'aw_deep_link' => 'https://www.awin1.com/pclick.php?p=30889002185&a=764485&m=18964',
                'merchant_product_id' => 'drivers_nl_nl_hilversum',
                'search_price' => '0.01',
                'aw_image_url' => 'https://images2.productserve.com/?w=200&h=200&bg=white&trim=5&t=letterbox&url=ssl%3Acrawl-it.ess.nl%2Ffeeds%2FTakeaway_FTP%2Flogo.jpg&feedId=41399&k=09d93586d17e19091ebf4e6d4f9e02881038d7ea',
                'region' => 'Hilversum',
                'merchant_image_url' => 'https://crawl-it.ess.nl/feeds/Takeaway_FTP/logo.jpg',
                'description' => 'Wil je betaald worden om in je stad rond te rijden? En ben je op zoek naar een stabiele baan als Bezorger met een vast uurloon en verzekering? Dan is het tijd om te solliciteren bij Thuisbezorgd.nl!  Onderweg Als onze Koerier bezorg je heerlijke gerechten in jouw stad - je haalt ze op bij het restaurant en brengt ze naar onze hongerige klanten. Wij bieden de mogelijkheid om parttime en in het weekend te werken en het is zo leuk en gemakkelijk als het klinkt!  Wij maken je het leven gemakkelijker, door:  - Je te voorzien van de benodigde uitrusting,  - Je te begeleiden met onze app terwijl jij door de stad rijdt,     Onze Fietskoerier:  - Is minimaal 16 jaar oud.  - Is super servicegericht en bezorgt met een glimlach.  - Beschikt over een smartphone (met 4G!) voor de navigatie.  - Houdt zich aan de verkeersregels.  - Is beschikbaar op één doordeweekse avond en één avond in het weekend.    Over het salaris als Bezorger bij Thuisbezorgd.nl:  - Een vast uurloon - van €13,34 bruto per uur, vanaf 21 jaar, inclusief vakantiegeld en vakantie-uren.  - Een orderbonus, per geaccepteerde order, als je werkt tussen 17 en 21 uur van tussen de 1 en 2 euro. Bezorg je tijdens deze uren bijv 8 orders kun je tussen de 8 en 16 euro extra verdienen, onafhankelijk van je leeftijd.   Overige voordelen als Bezorger bij Thuisbezorgd.nl: - Arbeidscontract en verzekering.  - Flexibiliteit en een stabiele planning: wij garanderen je tot 40 werkuren per week. Probeer een van onze vaste contracten met 16, 24, 32 en 40 gegarandeerde uren en diensten per week.  - Ondersteuning van het team wanneer je dit nodig hebt. De kans om buiten te werken en je stad op je duimpje te leren kennen     Start als Bezorger. Solliciteer nu!',
                'merchant_name' => 'Takeaway Recruitment NL',
                'category_name' => [
                ],
                'delivery_cost' => [
                ],
                'language' => 'nl',
                'display_price' => 'EUR0.01',
                'location' => 'NL',
                'product_name' => 'Bezorger',
                'merchant_id' => '18964',
                'category_id' => '0',
                'currency' => 'EUR',
                'last_updated' => [
                ],
                'aw_product_id' => '30889002185',
                'merchant_category' => [
                ],
                'store_price' => [
                ],
                'merchant_deep_link' => 'https://www.thuisbezorgd.nl/bezorger?city=Hilversum',
            ],
        ]);
    }
}
