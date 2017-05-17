<?php

use Illuminate\Database\Seeder;

class RadarsOptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('radars_options')->insert([
          [
            'radar_id' => '1',
            'name' => 'Systeemtheorie (inclusief contextueel en narratief)',
            'info' => 'Contextueel:<br>
                       Definitie en doel: “De contextuele therapie richt haar doel op interventies die zijn gebaseerd op het begrip van de fundamentele verbindingen tussen vroegste en alle latere relaties”.<br><br>

                       Narratief:<br>
                       <ul>
                        <li>Vanuit de narratieve stroming, wordt ervan uitgegaan dat cliënten veel vaardigheden, competenties, overtuigingen, waarden en verbindingen hebben die hen in staat stellen de relatie met hun problemen te veranderen.</li>
                        <li>Nieuwsgierigheid en de bereidheid om vragen te stellen, waarop wij de antwoorden niet kunnen weten, is een belangrijk principe.</li>
                        <li>Elk gesprek kan vele wegen inslaan, er is geen vaststaande route.</li>
                       <ul>',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],

          [
            'radar_id' => '1',
            'name' => 'Oplossingsgerichte benadering',
            'info' => '
            <ul>
              <li>Elk mens vormt zijn/haar eigen wereldmodel.</li>
              <li>De kaart is niet het gebied.</li>
              <li>Elk gedrag is iemands beste keuze.</li>
              <li>De cliënten hebben de noodzakelijke hulpbronnen.</li>
              <li>Als het niet stuk is, ga het dan niet repareren.</li>
              <li>Als je eenmaal weet wat werkt, doe dat dan vaker.</li>
              <li>Als iets niet werkt, doe het dan niet nog een keer.</li>
              <li>De nadruk ligt op wat er in de toekomst bereikt kan worden.</li>
              <li>Zelfbedachte oplossingen sluiten het beste aan.</li>
              <li>Onder moeilijke omstandigheden doet iedereen het beste wat hij/zij kan.</li>

              <li>Doelgericht en toekomstgericht.</li>
              <li>Doeltreffend, wat werkt?</li>
              <li>Erkennen, niet-wetend en niet-oordelend.</li>
              <li>Geduldig en stap voor stap</li>
            </ul>',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],

          [
            'radar_id' => '1',
            'name' => 'Sociale leertheorie',
            'info' => '
              Leertheorieën<br>
              <ul>
                <li>Klassieke leertheorie</li>
                <li>Operante leertheorie</li>
                <li>Sociale leertheorie</li>
                <li>Theorie van de zelfregulering</li>
              </ul>
              Processen die leiden tot gedragsverandering, vanuit de leertheorieën:
              <ul>
              <li>Positieve en negatieve bekrachtiging.</li>
              <li>Habituatie: gewoonte vorming.</li>
              <li>Modelling: leren op basis van gedrag van een voorbeeld (model).</li>
              <li>Sociale vaardigheidstraining.</li>
              <li>Relaxatie, aanleren van ontspannen toestand voorafgaande aan leren.</li>
              </ul>
            ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],

          [
            'radar_id' => '1',
            'name' => 'Presentie benadering',
            'info' => '
              Beweging, plaats en tijd.<br>
              De beroepskracht volgt de ander <br>
              (in plaats van het omgekeerde)<br><br>

              Ruimte en begrenzing.<br>
              Uit één stuk werken/integralisme<br> (in plaats van fragmentatie en specialisering)<br><br>

              Aansluiting.<br>
              Bij het geleefde leven zijn <br>(in plaats van bureaucratische schematisering ervan)<br><br>

              Zich afstemmen.<br>
              Het goed van de ander centraal zetten <br>
              (in plaats van de eigen-goede-bedoelingen)<br><br>

              Betekenis.<br>
              De ander is minstens bij één in tel <br>(erkenning en relatie weegt het zwaarst)
            ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],

          [
            'radar_id' => '2',
            'name' => 'Professionally centered',
            'info' => '
              De professional als expert;<br> schrijft voor wat er nodig is en hoe het ingezet gaat worden.
            ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],

          [
            'radar_id' => '2',
            'name' => 'Family allied',
            'info' => '
              De professional ziet het gezin als uitvoerder van de interventie, maar de professional blijft bepalen wat er nodig is. <br>
              Het gezin als verlengstuk van de professional.
            ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],

          [
            'radar_id' => '2',
            'name' => 'Family focused',
            'info' => '
              De professionals dragen ideeën aan, helpen het gezin keuzes te maken uit diverse beschikbare opties. <br>
              De professional ziet het gezin als consument.
            ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],

          [
            'radar_id' => '2',
            'name' => 'Family allied',
            'info' => '
              De professional ziet het gezin als uitvoerder van de interventie, maar de professional blijft bepalen wat er nodig is.<br>
              Het gezin als verlengstuk van de professional.
            ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],

          [
            'radar_id' => '3',
            'name' => 'Dienstverlenend',
            'info' => '
              Vraag- en klantgericht werken.<br><br>

              De hulpvraag van het gezin, subjectief geformuleerd, is uitgangspunt van de dienstverlening. <br>
              De (gezins)hulpverlener stemt af, faciliteert en biedt kaders waarbinnen de werkrelatie en doelstellingen kunnen worden gerealiseerd. <br><br>

              Het dienstverlenende model is hiermee pragmatisch (resultaatgericht), dialoog gestuurd, open en cyclisch van aard. Tevredenheid van de cliënt is een belangrijke graadmeter voor succes (Pijnenburg e.a., 2011, p. 128).
            ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],

          [
            'radar_id' => '3',
            'name' => 'Medisch',
            'info' => '
              Het medisch model is met name gericht op het verklaren, het stellen van een diagnose.<br><br>

              Hulpverleners zijn bij hun probleemoplossende benadering sterk beïnvloed door het medisch model (de Jong & Berg, 2004, p. 24), wat veelal leidt tot het formuleren van diagnoses. Denken vanuit een probleem welke vastgesteld wordt op basis van een diagnose (symptomen) en opgelost wordt aan de hand van een specifieke behandeling/methode. Dit is gebaseerd op een lineair wetenschappelijk gedachtengoed (Pijnenburg e.a., 2011, p. 129).
            ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],

          [
            'radar_id' => '3',
            'name' => 'Normatief',
            'info' => '
              Ingegeven door sociaal- maatschappelijke normen en waarden. Wat is acceptabel en toelaatbaar?<br><br>

              Bij het overschrijden van grenzen stopt de dialoog en ontstaat er aan de kant van de hulpverlener een monoloog.<br><br>

              De (gezins)hulpverlener benut dit model om de sociaal- maatschappelijke verwachtingen door te laten klinken, afhankelijk van context en tijd. Het normatieve model is niet in alle opzichten circulair, het legt ook lineaire verbanden.
            ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],

          [
            'radar_id' => '4',
            'name' => 'one-up / one-donw',
            'info' => '
              Up<br>
              <ul>
                <li>Initiatief nemend</li>
                <li>Voorstel ponerend</li>
                <li>Leiding nemen</li>
                <li>Eén slag voor</li>
                <li>Stelt zich op als</li>
                <li>meerdere van de ander</li>
              </ul>
              Down<br>
              <ul>
                <li>Initiatief volgend</li>
                <li>Voorstel volgend</li>
                <li>Zich voegen</li>
                <li>Eén slag later</li>
                <li>Gaat akkoord met de gegeven relatiedefinitie</li>
              </ul>
            ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],

          [
            'radar_id' => '4',
            'name' => 'Meerzijdig partijdig',
            'info' => '
              Erkenning geven voor hetgeen gegeven is.<br><br>

              Erkenning geven voor het onrecht dat iemand is aangedaan.<br><br>

              Erkenning geven voor hetgeen ontvangen is of wat niet ontvangen kon worden.<br><br>

              Erkenning geven is niet gelijkwaardig aan gelijk geven.
            ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],

          [
            'radar_id' => '4',
            'name' => 'Compenseren / activeren',
            'info' => '',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],

          [
            'radar_id' => '4',
            'name' => 'Werken vanuit mandaat',
            'info' => '',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],

          [
            'radar_id' => '4',
            'name' => 'Present zijn',
            'info' => '',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],

          [
            'radar_id' => '4',
            'name' => 'Externaliseren',
            'info' => '
              <ul>
                <li> Is geen techniek of methode.</li>
                <li> Is meer een attitude te noemen.</li>
              </ul>
              Wat kan geëxternaliseerd worden?
              <ul>
                <li>Gevoelens: Wat heeft het schuldgevoel je geleerd over jezelf?</li>
                <li>Problemen tussen mensen: Wat zegt de jaloezie jou over je gevoel voor je partner?</li>
                <li>Culturele en sociale gedragingen: Herkaderen als pogingen om iets te bereiken of te vermijden.</li>
              </ul>
            ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],

          [
            'radar_id' => '4',
            'name' => 'Aandacht voor het geen niet gezegd wordt',
            'info' => '',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],

          [
            'radar_id' => '4',
            'name' => 'Psycho-educatie',
            'info' => '
              Aandachtspunten bij het geven van psycho-educatie:
              <ul>
                <li>Jeugdige en ouders zijn experts</li>
                <li>Aansluiten bij niveau, kennis en taalgebruik</li>
                <li>Krachten benoemen</li>
                <li>Onwil versus onmacht</li>
                <li>Gebruik van ondersteunend materiaal en visualisatie</li>
                <li>Herhaling
              </ul>
            ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],

          [
            'radar_id' => '4',
            'name' => 'Gedragsoefening en suggesties',
            'info' => '',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],

          [
            'radar_id' => '5',
            'name' => 'Aanmelding',
            'info' => '
              Aanmelding<br>
              De reden van aanmelding wordt beschreven in het hulpverleningsplan. <br><br>

              Door wie is het gezin aangemeld en waarom? <br>
              Wat was volgens hen het voornaamste doel? <br>
              Wat willen gezinsleden zelf bereiken met de hulp?
            ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],

          [
            'radar_id' => '5',
            'name' => 'Fase 1 Startfase',
            'info' => '
              De eerste fase: Startfase<br>
              <ul>
                <li>duur vier tot zes weken. </li>
                <li>twee keer per week een bezoek van gemiddeld anderhalf tot twee uur.</li>
              </ul>
              In de startfase van IAG wordt duidelijk welke problemen er spelen in de omstandigheden van het gezin en wat de wensen van het gezin zijn op dit gebied.
              <ul>
                <li>opbouwen werkrelatie.</li>
                <li>vergroten van de motivatie. </li>
                <li>uitleg over de werkwijze en de opbouw van IAG.</li>
                <li>analyse van de situatie en de problemen in het gezin. </li>
                <li>formuleren van de doelen voor de hulp. </li>
                <li>begin gemaakt met het aanpakken van problemen. </li>
              </ul>
            ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],

          [
            'radar_id' => '5',
            'name' => 'Fase 2 Veranderfase',
            'info' => '
              Veranderfase<br><br>

              Werken: aan de opgestelde doelen. <br>
              Duur: zo’n tien tot veertien weken. <br>
              Gemiddeld: drie tot vier uren per week verdeeld over twee bezoeken. <br><br>

              De opgestelde doelen uitwerken;<br>
              concrete werkpunten opstellen;<br>
              acties inzetten;<br>
              prioriteiten stellen.<br><br>

              motivatie en wensen van het gezin  uitgangspunt verschillende middelen, technieken en tools in. <br>
              Evalueren op voortgang.<br>
            ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],

          [
            'radar_id' => '5',
            'name' => 'Fase 3 Afbouw en afscheid',
            'info' => '
              Afbouw en afscheid<br><br>

              Duur:  zes tot acht weken <br>
              Frequentie;  afbouwen;   anderhalf uur per week <br><br>

              begeleider op afstand<br>
              sturend waar nodig<br>
              focus  volhouden en eigen maken geleerde.<br>
              Borging resultaten<br>
              afspraken hoe om te gaan met moeilijke situaties  toekomst.
',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],

          [
            'radar_id' => '5',
            'name' => 'Nazorg',
            'info' => '
              Nazorgfase.<br><br>

              Mogelijkheid maximaal vijf keer contact voor vragen rondom de gestelde doelen van de
              hulpverlening, de zogenoemde ‘knipkaart’.<br>

              Een follow-up bezoek na zes maanden terugkijken: hoe het gaat, of het lukt de bereikte resultaten vast te houden en of er eventueel andere hulp nodig is.
            ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],

          [
            'radar_id' => '6',
            'name' => 'Negatief',
            'info' => 'Als iets niet werkt: leer ervan en doe iets anders.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],

          [
            'radar_id' => '6',
            'name' => 'Positief',
            'info' => 'Als iets wel of beter werkt: doe er meer van.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],

          [
            'radar_id' => '6',
            'name' => 'Leer van een ander',
            'info' => 'Als iets blijkt te werken: leer het van/aan iemand anders.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],

          [
            'radar_id' => '7',
            'name' => 'Basisattitude',
            'info' => '
              <ul>
                <li>Aansluiten bij gezinnen</li>
                <li>Afstemmen op angstniveau</li>
                <li>Richten op wat goed gaat</li>
                <li>Tegemoetkomende hulp</li>
                <li>Vasthoudendheid</li>
                <li>Transparant werken</li>
                <li>Geeft erkenning</li>
                <li>Activerend</li>
                <li>Echtheid in de relatie</li>
                <li>Erkenning culturele en etnische achtergrond</li>
                <li>Respectvolle benadering</li>
                <li>Crisissen beschouwen als kansen</li>
                <li>Willen leren/nieuwsgierig zijn</li>
                <li>Bespreekbaar kunnen maken van pijnlijke onderwerpen</li>
                <li>Meerzijdig partijdig</li>
              <ul>
            ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],

        ]);
    }
}
