<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Theme Boost Union - Language pack
 *
 * @package    theme_boost_union
 * @copyright  2022 Alexander Bias, lern.link GmbH <alexander.bias@lernlink.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// Let codechecker ignore some sniffs for this file as it is perfectly well ordered, just not alphabetically.
// phpcs:disable moodle.Files.LangFilesOrdering.UnexpectedComment
// phpcs:disable moodle.Files.LangFilesOrdering.IncorrectOrder

// General.
$string['pluginname'] = 'Boost Union';
$string['choosereadme'] = 'Boost Union -teema on Boost-teeman laajennettu lapsiteema, jonka tarkoituksena on toisaalta tehdä Boostista yksinkertaisesti mukautettavampi ja toisaalta tarjota hyödyllisiä lisäominaisuuksia ylläpitäjien, opettajien ja opiskelijoiden päivittäiseen Moodlen käyttöön. Boost Unionia ylläpitää Moodle an Hochschulen e.V. yhteistyössä ssystems GmbH:n, bdecent GmbH:n ja lern.link GmbH:n kanssa';
$string['configtitle'] = 'Boost Union';
$string['githubissueslink'] = '<a href="https://github.com/moodle-an-hochschulen/moodle-theme_boost_union/issues">Github-ongelmat</a>';

// General select options.
$string['never'] = 'Ei koskaan';
$string['always'] = 'Aina';
$string['auto'] = 'Automaattisesti';
$string['nochange'] = 'Ei muutosta';
$string['forguestsonly'] = 'Vain vieraille ja kirjautumattomille käyttäjille';

// Settings: General strings.
$string['dontchange'] = 'Älä muuta mitään';
$string['tertiarysettings'] = 'Luettelo Boost Union -asetussivuista';

// Settings: General warnings.
$string['warningslashargumentsdisabled'] = 'Varoitus: <a href="{$a->url}">slasharguments-asetus</a> on tällä hetkellä poistettu käytöstä Moodle-konfiguraatiossasi. Tämä asetus on kuitenkin tarpeen seuraavan Boost Union -asetuksen oikean toiminnan varmistamiseksi. Ota käyttöön slasharguments, muuten seuraava Boost Union -asetus ei vaikuta mihinkään.';

// Settings: Overview page.
$string['settingsoverview'] = 'Asetusten yleiskatsaus';
$string['settingsoverview_title'] = 'Boost Union -asetusten yleiskatsaus';
$string['settingsoverview_look_desc'] = 'Moodle-sivustosi brändäystä koskevat asetukset sijaitsevat täällä: Värit, ikonit, kuvat, koko ja tietenkin mukautettu SCSS.';
$string['settingsoverview_feel_desc'] = 'Moodle-sivustosi yleiseen käyttäytymiseen liittyvät asetukset sijaitsevat täällä: Navigointikohteet, navigointiapurit, lohkot ja linkit.';
$string['settingsoverview_content_desc'] = 'Moodle-sivustosi globaalin sisällön asetukset sijaitsevat täällä: Alatunniste, staattiset sivut, tietosivut, mainostekstit ja liukusäätimet.';
$string['settingsoverview_functionality_desc'] = 'Lisäominaisuuksiin liittyvät asetukset Moodle-sivustollasi sijaitsevat täällä.';
$string['settingsoverview_accessibility_desc'] = 'Esteettömyyteen liittyvät asetukset Moodle-sivustollasi sijaitsevat täällä.';
$string['settingsoverview_flavours_desc'] = 'Makuilla voit monipuolistaa Moodle-sivustosi ulkoasua eri opiskelijaryhmille ja/tai kurssikategorioille.';
$string['settingsoverview_smartmenus_desc'] = 'Älykkäillä valikoilla voit laajentaa Moodle-sivustosi navigointikohteita päävalikossa ja käyttäjävalikoissa sekä tuoda esiin ala- tai ylävalikon.';
$string['settingsoverview_all'] = 'Kaikki asetukset yhdellä sivulla';
$string['settingsoverview_all_desc'] = 'Täällä voit avata Boost Unionin standardi-Moodle-kategoria-asetussivun, joka näyttää kaikki asetukset yhdellä sivulla. Mutta varo, se on todella täynnä.';

// Settings: Look page.
$string['configtitlelook'] = 'Ulkoasu';

// Settings: General settings tab.
// ... Section: Theme presets.
$string['presetheading'] = 'Teeman esiasetukset';
$string['presetheading_desc'] = 'Teeman esiasetuksia voidaan käyttää teeman ulkoasun muuttamiseen dramaattisesti. Boost Union ei toteuta teeman esiasetusten asetusta uudelleen. Jos haluat käyttää teeman esiasetuksia, määritä ne suoraan Boostissa. Boost Union perii ja käyttää määritettyä esiasetusta.';
$string['presetbutton'] = 'Aseta teeman esiasetus Boostissa';

// Settings: SCSS tab.
$string['scsstab'] = 'SCSS';
// ... Section: Raw SCSS.
$string['scssheading'] = 'Raaka SCSS';

// ... Section: External SCSS.
$string['extscssheading'] = 'Ulkoinen SCSS';
$string['extscssheading_desc'] = 'Raakaa SCSS-asetusta täydentävänä Boost Union voi ladata SCSS:ää ulkoisesta lähteestä. Se sisällytetään yllä määriteltyjen SCSS-koodien ennen, mikä tarkoittaa, että voit hallita keskitetysti ulkoista SCSS-koodistoa ja silti muokata sitä paikallisilla SCSS-lisäyksillä.';
$string['extscssheading_instr'] = 'Ohjeet:';
$string['extscssheading_drop'] = 'Jos Boost Union ei voi ladata ulkoista SCSS-tiedostoa mistä tahansa syystä, se yksinkertaisesti ohittaa ulkoisen SCSS-tiedoston välttääkseen SCSS-kääntämiseen ja rikkinäisiin etusivuihin liittyviä ongelmia.';
$string['extscssheading_structure'] = 'Ulkoinen SCSS on toimitettava yksinkertaisena tekstinä ilman otsikoita tai jalkaliitteitä, sisältäen vain SCSS-koodin.';
$string['extscssheading_prepost'] = 'Aivan kuten yllä olevat raaka SCSS -asetukset, ulkoinen SCSS on jaettu kahteen osaan: Ennen ja jälkeen SCSS. Ennen SCSS:ää voidaan käyttää SCSS-muuttujien alustamiseen, jälkeen SCSS:ää käytetään varsinaiseen SCSS-koodisi.';
$string['extscssheading_sources'] = 'Voit määrittää Boost Unionin hakemaan ulkoisen SCSS-tiedoston joko julkiselta lataus-URL-osoitteelta (joka saavutetaan ja ladataan tunnistamattomalla cURL-pyynnöllä) tai yksityisestä Github-repositoriosta (joka saavutetaan ja ladataan Githubin API-tunnuksella).';
$string['extscssheading_task'] = 'On olemassa <a href="{$a}">ajastettu tehtävä theme_boost_union\task\purge_cache</a>, joka on oletusarvoisesti pois käytöstä, mutta jonka voit ottaa käyttöön, jos haluat Boost Unionin hakemaan ja kääntämään ulkoista SCSS-koodia säännöllisesti.';
$string['invalidurl'] = 'Annettu URL-osoite ei ole voimassa';
// ... ... Setting: External SCSS source.
$string['extscsssource'] = 'Ulkoinen SCSS -lähde';
$string['extscsssource_desc'] = 'Valitse lähteen tyyppi, josta haluat hakea ulkoisen SCSS:n.';
$string['extscsssourcenone'] = 'Ei mitään';
$string['extscsssourcedownload'] = 'Julkaise lataus-URL';
$string['extscsssourcegithub'] = 'Yksityinen Github-repositorio';
// ... ... Setting: External Pre SCSS download URL.
$string['extscssurlpre'] = 'Ulkoinen Pre SCSS lataus-URL';
$string['extscssurlpre_desc'] = 'Julkinen lataus-URL, josta Ulkoisen Pre SCSS:n tulisi ladata.';
// ... ... Setting: External Post SCSS download URL.
$string['extscssurlpost'] = 'Ulkoinen Post SCSS lataus-URL';
$string['extscssurlpost_desc'] = 'Julkinen lataus-URL, josta ulkoisen Post SCSS:n tulisi ladata.';
// ... ... Setting: External SCSS Github API token.
$string['extscssgithubtoken'] = 'Ulkoinen SCSS Github API -tunnus';
$string['extscssgithubtoken_desc'] = 'Githubin API-tunnus, jota käytetään SCSS-koodin hakemiseen annetusta yksityisestä Github-repositoriosta.';
$string['extscssgithubtoken_docs'] = 'Siirry <a href="https://github.com/settings/tokens">Githubin tunnusasetuksiisi</a> luodaksesi API-tunnuksen ja nähdäksesi virallisen dokumentaation.';
// ... ... Setting: External SCSS Github API user.
$string['extscssgithubuser'] = 'Ulkoinen SCSS Github API -käyttäjä';
$string['extscssgithubuser_desc'] = 'Githubin API-käyttäjä tai organisaatio, joka omistaa yksityisen Github-repositorion.';
$string['extscssgithubuser_example'] = 'Esimerkki: Jos näet tiedoston Github-tililläsi osoitteessa https://github.com/moodle-an-hochschulen/moodle-theme_boost_union-extscsstest/blob/main/extscss.scss, käyttäjä on <em>moodle-an-hochschulen</em>.';
// ... ... Setting: External SCSS Github API repository.
$string['extscssgithubrepo'] = 'Ulkoinen SCSS Github API -repositorio';
$string['extscssgithubrepo_desc'] = 'Yksityinen Github-repositorio, jossa SCSS-tiedostot sijaitsevat.';
$string['extscssgithubrepo_example'] = 'Esimerkki: Jos näet tiedoston Github-tililläsi osoitteessa https://github.com/moodle-an-hochschulen/moodle-theme_boost_union-extscsstest/blob/main/extscss.scss, repositorio on <em>moodle-theme_boost_union-extscsstest</em>.';
// ... ... Setting: External Pre SCSS Github file path.
$string['extscssgithubprefilepath'] = 'Ulkoinen Pre SCSS Github -tiedostopolku';
$string['extscssgithubprefilepath_desc'] = 'Polku yksityisessä Github-repositoriossa, jossa Pre SCSS -tiedosto sijaitsee.';
$string['extscssgithubfilepath_example'] = 'Esimerkki: Jos näet tiedoston Github-tililläsi osoitteessa https://github.com/moodle-an-hochschulen/moodle-theme_boost_union-extscsstest/blob/main/extscss.scss, tiedostopolku on <em>/extscss.scss</em>.';
// ... ... Setting: External Post SCSS Github file path.
$string['extscssgithubpostfilepath'] = 'Ulkoinen Post SCSS Github -tiedostopolku';
$string['extscssgithubpostfilepath_desc'] = 'Polku yksityisessä Github-repositoriossa, jossa Post SCSS -tiedosto sijaitsee.';
// ... ... Setting: External SCSS validation.
$string['extscssvalidationsetting'] = 'Ulkoinen SCSS -validointi';
$string['extscssvalidationsetting_desc'] = 'Jos tämä asetus on käytössä, ulkoinen SCSS validoidaan sen tarkistamiseksi, voidaanko se kääntää ennen kuin se lisätään SCSS-pinoon. Ulkoinen SCSS-koodi, jota ei voida kääntää, ohitetaan hiljaa eikä sitä käytetä. Tämä validointi suoritetaan kuitenkin vain ulkoiselle SCSS-koodille, ei yhdistetylle SCSS-pinolle, joka olisi ulkoisen SCSS:n integroinnin tulos. Tämä tarkoittaa, että heti kun käytät SCSS-muuttujia Moodlen ytimestä tai Bootstrapista ulkoisessa SCSS:ssa, sinun on poistettava validointi käytöstä ja varmistauduttava itse, että SCSS-koodi on voimassa rikkoutuneiden etusivujen välttämiseksi.';

// Settings: Page tab.
$string['pagetab'] = 'Sivu';
// ... Section: Page width.
$string['pagewidthheading'] = 'Sivun leveys';
// ... ... Setting: Course content max width.
$string['coursecontentmaxwidthsetting'] = 'Kurssin sisällön maksimi leveys';
$string['coursecontentmaxwidthsetting_desc'] = 'Tällä asetuksella voit ohittaa Moodlen kurssin sisällön leveyden ilman manuaalisia SCSS-muutoksia. Tätä leveyttä käytetään kurssisivujen sivuleveytenä ja useissa toiminnoissa. Oletuksena Moodle käyttää kurssin sisällön maksimi leveytenä 830px. Voit syöttää muita pikselipohjaisia arvoja, kuten 1200px, mutta voit myös syöttää prosenttipohjaisen arvon, kuten 100%, tai näkymäleveyden arvon, kuten 90vw.';
// ... Section: Drawer width.
$string['drawerwidthheading'] = 'Laatikon leveys';
// ... ... Setting: Course content max width.
$string['courseindexdrawerwidthsetting'] = 'Kurssin indeksin laatikon leveys';
$string['courseindexdrawerwidthsetting_desc'] = 'Tällä asetuksella voit ohittaa Moodlen kurssin indeksin laatikon leveyden ilman manuaalisia SCSS-muutoksia. Oletuksena Moodle käyttää kurssin indeksin laatikon leveytenä 285px. Voit syöttää muita pikselipohjaisia arvoja, kuten 320px, mutta muiden yksiköiden, kuten prosenttipohjaisten arvojen tai näkymäleveyden arvojen, käyttö ei onnistu.';
// ... ... Setting: Medium content max width.
$string['blockdrawerwidthsetting'] = 'Lohkon laatikon leveys';
$string['blockdrawerwidthsetting_desc'] = 'Tällä asetuksella voit ohittaa Moodlen lohkon laatikon leveyden ilman manuaalisia SCSS-muutoksia. Oletuksena Moodle käyttää keskimääräisen sisällön maksimi leveytenä 315px. Voit syöttää muita pikselipohjaisia arvoja, kuten 400px, mutta muiden yksiköiden, kuten prosenttipohjaisten arvojen tai näkymäleveyden arvojen, käyttö ei onnistu.';

// Settings: Site branding tab.
$string['sitebrandingtab'] = 'Sivuston brändäys';
// ... Section: Logos.
$string['logosheading'] = 'Logot';
$string['logosheading_desc'] = 'Huomaa: Boost Unionilla on oma logo-lataus ja se ei käytä logoa <a href="{$a}">Moodlen ytimen logon asetuksesta</a>.<br />Boost Union erityisesti sallii sinun ladata enemmän kuvamuotoja kuin Moodle ydin sallii ja sallii sinun ohittaa ladatut logot sen makuissa.';
// ... ... Setting: Logo.
$string['logosetting'] = 'Logo';
$string['logosetting_desc'] = 'Täällä voit ladata täysikokoisen logon, jota käytetään koristeena. Tätä kuvaa käytetään erityisesti kirjautumissivulla. Tämä kuva voi olla melko korkearesoluutioinen, koska se skaalaantuu alaspäin käytettäväksi.';
// ... ... Setting: Compact logo.
$string['logocompactsetting'] = 'Kompakti logo';
$string['logocompactsetting_desc'] = 'Täällä voit ladata kompaktin version samasta logosta kuin yllä, kuten embleemin, kilven tai ikonin. Tätä kuvaa käytetään erityisesti navigointipalkissa jokaisen Moodlen sivun yläosassa. Kuvan tulisi olla selkeä jopa pienillä kokoilla.';
// ... Section: Favicon.
$string['faviconheading'] = 'Favicon';
$string['faviconheading_desc'] = 'Huomaa: Boost Unionilla on oma favicon-lataus ja se ei käytä faviconia <a href="{$a}">Moodlen ytimen favicon-asetuksesta</a>.<br />Boost Union erityisesti sallii sinun ohittaa ladatun faviconin sen makuissa.';
// ... ... Setting: Favicon
$string['faviconsetting'] = 'Favicon';
$string['faviconsetting_desc'] = 'Täällä voit ladata mukautetun kuvan (.ico tai .png -muodossa), jota selain näyttää Moodle-verkkosivustosi faviconina. Jos mukautettua faviconia ei ladattu, käytetään oletus Moodle faviconia.';
// ... Section: Background images.
$string['backgroundimagesheading'] = 'Yleiset taustakuvat';
// ... ... Setting: Background image
$string['backgroundimagesetting'] = 'Taustakuva';
$string['backgroundimagesetting_desc'] = 'Täällä voit ladata mukautetun kuvan, joka näytetään sivuston taustana. Täällä lataamasi taustakuva ohittaa teeman esiasetustiedostojen taustakuvan.';
// ... ... Setting: Background image position
$string['backgroundimagepositionsetting'] = 'Taustakuvan sijainti';
$string['backgroundimagepositionsetting_desc'] = 'Tällä asetuksella hallitset taustakuvan sijoittamista selainikkunassa. Ensimmäinen arvo on vaakasuuntainen sijainti, toinen arvo on pystysuuntainen sijainti.';
// ... Section: Brand colors.
$string['brandcolorsheading'] = 'Brändivärit';
// ... Section: Bootstrap colors.
$string['bootstrapcolorsheading'] = 'Bootstrap värit';
// ... ... Setting: Bootstrap color for 'Success'.
$string['bootstrapcolorsuccesssetting'] = 'Bootstrap väri "Onnistuminen"';
$string['bootstrapcolorsuccesssetting_desc'] = 'Bootstrap väri "Onnistuminen"';
// ... ... Setting: Bootstrap color for 'Info'.
$string['bootstrapcolorinfosetting'] = 'Bootstrap väri "Tieto"';
$string['bootstrapcolorinfosetting_desc'] = 'Bootstrap väri "Tieto"';
// ... ... Setting: Bootstrap color for 'Warning'.
$string['bootstrapcolorwarningsetting'] = 'Bootstrap väri "Varoitus"';
$string['bootstrapcolorwarningsetting_desc'] = 'Bootstrap väri "Varoitus"';
// ... ... Setting: Bootstrap color for 'Danger'.
$string['bootstrapcolordangersetting'] = 'Bootstrap väri "Vaara"';
$string['bootstrapcolordangersetting_desc'] = 'Bootstrap väri "Vaara"';
// ... Section: Navbar.
$string['navbarheading'] = 'Navigointipalkki';
// ... Section: Maximal width of logo in navbar.
$string['maxlogowidth'] = 'Logon maksimi leveys navigointipalkissa';
$string['maxlogowidth_desc'] = 'Navigointipalkissa kompaktisti ladattu logo näytetään normaalisti 100% korkeudella ja suhteellisella leveydellä. Kuitenkin, jos logo on liian leveä tai sillä on muu erityinen kuvasuhde, voit asettaa logon maksimaalisen leveyden navigointipalkissa tänne. Voit syöttää pikselipohjaisia arvoja, kuten 120px, mutta voit myös syöttää prosenttipohjaisen arvon, kuten 10%, tai näkymäleveyden arvon, kuten 5vw. Jos et syötä mitään arvoa, logo näytetään oletusesityksellä.';
// ... ... Setting: Navbar color.
$string['navbarcolorsetting'] = 'Navigointipalkin väri';
$string['navbarcolorsetting_desc'] = 'Tällä asetuksella voit muuttaa navigointipalkin väriä oletusvaaleasta tummaksi tai värilliseksi.';
$string['navbarcolorsetting_light'] = 'Vaalea navigointipalkki tummalla fonttivärillä (muuttamaton Moodlen ytimen esityksessä)';
$string['navbarcolorsetting_dark'] = 'Tumma navigointipalkki vaalealla fonttivärillä';
$string['navbarcolorsetting_primarydark'] = 'Pääväri navigointipalkissa vaalealla fonttivärillä';
$string['navbarcolorsetting_primarylight'] = 'Pääväri navigointipalkissa tummalla fonttivärillä';

// Settings: Activity branding tab.
$string['activitybrandingtab'] = 'Toiminnan brändäys';
// ... Section: Activity icon colors.
$string['activityiconcolorsheading'] = 'Toimintakuvakkeen värit';
// ... ... Setting: Activity icon color for 'Administration'.
$string['activityiconcoloradministrationsetting'] = 'Toimintakuvakkeen väri "Hallinta"';
$string['activityiconcoloradministrationsetting_desc'] = 'Toimintakuvakkeen väri "Hallinta"';
// ... ... Setting: Activity icon color for 'Assessment'.
$string['activityiconcolorassessmentsetting'] = 'Toimintakuvakkeen väri "Arviointi"';
$string['activityiconcolorassessmentsetting_desc'] = 'Toimintakuvakkeen väri "Arviointi"';
// ... ... Setting: Activity icon color for 'Collaboration'.
$string['activityiconcolorcollaborationsetting'] = 'Toimintakuvakkeen väri "Yhteistyö"';
$string['activityiconcolorcollaborationsetting_desc'] = 'Toimintakuvakkeen väri "Yhteistyö"';
// ... ... Setting: Activity icon color for 'Communication'.
$string['activityiconcolorcommunicationsetting'] = 'Toimintakuvakkeen väri "Viestintä"';
$string['activityiconcolorcommunicationsetting_desc'] = 'Toimintakuvakkeen väri "Viestintä"';
// ... ... Setting: Activity icon color for 'Content'.
$string['activityiconcolorcontentsetting'] = 'Toimintakuvakkeen väri "Sisältö"';
$string['activityiconcolorcontentsetting_desc'] = 'Toimintakuvakkeen väri "Sisältö"';
// ... ... Setting: Activity icon color for 'Interactive content'.
$string['activityiconcolorinteractivecontentsetting'] = 'Toimintakuvakkeen väri "Vuorovaikutteinen sisältö"';
$string['activityiconcolorinteractivecontentsetting_desc'] = 'Toimintakuvakkeen väri "Vuorovaikutteinen sisältö"';
// ... ... Setting: Activity icon color for 'Interface'.
$string['activityiconcolorinterfacesetting'] = 'Toimintakuvakkeen väri "Käyttöliittymä"';
$string['activityiconcolorinterfacesetting_desc'] = 'Toimintakuvakkeen väri "Käyttöliittymä"';
// ... Section: Activity icon purposes.
$string['activitypurposeheading'] = 'Toimintakuvakkeen tarkoitukset';
$string['activitypurposeheading_desc'] = 'Näiden asetusten avulla voit ohittaa toimintakuvakkeen taustavärin, joka määritellään toiminnon tarkoituksen mukaan (ja joka on kovakoodattu liitännäistoiminnallisuudessa jokaiselle toiminnolle).';
$string['activitypurposeheadingpleasenote'] = 'Huomaa: Kurssin toimintojen yleiskatsaus -sivulla kaikki resurssitoiminnot, kuten "kirja", on yhdistetty "resurssit" -osioon. Siksi näiden yksittäisten toimintotyyppien tarkoitusta ei voida muuttaa tällä sivulla. Voit vain muuttaa "resurssit" -kuvakkeen väriä yllä olevan asetuksen avulla.';
$string['activitypurposeheadingtechnote'] = 'Tekninen huomautus: Moodlen ytimen tapa toteuttaa toimintojen tarkoitukset ja niiden värit, toimintojen tarkoitukset ohitetaan vain CSS:llä Boost Unionissa. Tällä hetkellä kaikki Moodlen ytimen alueet, jotka näyttävät värillisiä toimintakuvakkeita, on katettu. Jos huomaat jonkin alueen tai kolmannen osapuolen liitännäisen, joka edelleen näyttää muuttumattomat toimintatarkoitusvärit, ilmoita siitä osoitteessa {$a}.';
$string['activitypurposeadministration'] = 'Hallinta';
$string['activitypurposeassessment'] = 'Arviointi';
$string['activitypurposecollaboration'] = 'Yhteistyö';
$string['activitypurposecommunication'] = 'Viestintä';
$string['activitypurposecontent'] = 'Sisältö';
$string['activitypurposeinteractivecontent'] = 'Vuorovaikutteinen sisältö';
$string['activitypurposeinterface'] = 'Käyttöliittymä';
$string['activitypurposeother'] = 'Muu';
// ... Section: Activity icons.
$string['modiconsheading'] = 'Toimintakuvakkeet';
// ... ... Setting: Enable custom icons for activities and resources.
$string['modiconsenablesetting'] = 'Ota käyttöön mukautetut kuvakkeet toiminnoille ja resursseille';
$string['modiconsenablesetting_desc'] = 'Tällä asetuksella voit muuttaa toimintojen ja resurssien kuvakkeita, joita Moodle käyttää kurssisivuilla ja toimintovalitsimessa.';
// ... ... Setting: Custom icon files.
$string['modiconsfiles'] = 'Mukautetut kuvakeetiedostot';
$string['modiconsfiles_desc'] = 'Täällä voit ladata mukautettuja kuvakkeita kaikille tai vain joillekin tässä Moodlen instanssissa asennetuista toimintamoduuleista.';
$string['modiconsfileshowto'] = 'Aloita lataamalla tietty mukautettu toimintokuvake luomalla kansio, jonka nimi on toiminnon sisäinen nimi, esim. <em>assign</em> tehtävätoiminnolle. Tässä kansiossa lataat kuvakkeen SVG-tiedostona nimeltä monologo.svg ja, jos mahdollista, varatiedostona PNG-muodossa nimeltä monologo.png. Jos haluat mukauttaa värillisiä kuvakkeita, joita on käytetty Moodle 3:ssa ja joita saatetaan edelleen käyttää vanhemmissa liitännäisissä, voit myös ladata ne nimillä icon.svg ja icon.png. Kuitenkin, käytä mahdollisuuksien mukaan yksivärisiä SVG-kuvakkeita parhaan tuloksen saavuttamiseksi. Tallenna sitten asetussivu. Niin pian kuin olet tallentanut asetuksen vähintään yhdellä tiedostolla, tiedostoluettelo tulee näkyviin alla, mikä auttaa sinua tarkistamaan, onko mukautetut kuvakkeet ladattu oikein.';
$string['modiconsfilestech'] = 'Tekninen huomautus: Asetuksen tallentamisen jälkeen ladattu kansiorakenne ja kuvakeetiedostot kopioidaan Moodlen datahakemistoon pix_plugins/mod. Tämä on paikka, johon Moodle ydin etsii mukautettuja toimintokuvakkeita. Kaikki kuvakeet, jotka saattavat jo olla tässä paikassa, korvataan, kun tallennat tämän asetuksen.';
$string['modiconserrorcreatingpath'] = 'Pix_plugins/mod-kansiota ei voitu luoda Moodlen datahakemistossasi.<br />Poikkeusviesti:{$a}.';
// ... ... Information: Custom icons files list.
$string['modiconlistsetting'] = 'Mukautettujen kuvakeetiedostojen luettelo';
$string['modiconlistsetting_desc'] = 'Tämä on luettelo mukautetuista kuvakeetiedostoista, jotka olet ladannut yllä olevaan mukautettujen kuvakkeiden tiedostotiedostoon. Kaikki voimassa olevat kuvakeet on lueteltu täällä. Lisäksi muut mahdollisesti lataamasi tiedostot, mutta jotka eivät ole voimassa olevia kuvakeita, näytetään myös rikkinäisinä tiedostoina.';
$string['modiconsuccess4x'] = 'Tätä kuvaketta käytetään <em>{$a}</em> -toiminnolle Moodle 4 -kuvakkeena.';
$string['modiconsuccess3x'] = 'Tätä kuvaketta käytetään <em>{$a}</em> -toiminnolle Moodle 3 perintökuvakkeena.';
$string['modiconnamefail'] = 'Tämä tiedosto on ladattu oikeaan kansioon <em>{$a}</em> -toiminnolle, mutta tiedostonimi ei ole voimassa. Muuta tiedostonimi joko muotoon <em>monologo.svg</em> / <em>monologo.png</em> (Moodle 4 -kuvakkeet) tai muotoon <em>icon.svg</em> / <em>icon.png</em> (Moodle 3 perintökuvakkeet).';
$string['modiconnotexist'] = 'Tämä tiedosto on ladattu sopimattomaan paikkaan, koska on mahdotonta päätellä tiettyä toimintoa tiedostopolun <em>{$a}</em> perusteella.';
$string['modiconactivity'] = 'Toiminto';
$string['modiconactivityunknown'] = 'Tuntematon';
$string['modiconversion'] = 'Kuvakkeen versio';
$string['modicongtmoodle4'] = 'Moodle 4 -kuvake';
$string['modiconltmoodle311'] = 'Moodle 3 perintökuvake';

// Settings: Login page tab.
$string['loginpagetab'] = 'Kirjautumissivu';
// ... Section: Login page background images.
$string['loginbackgroundimagesheading'] = 'Kirjautumissivun taustakuvat';
// ... ... Setting: Login page background image.
$string['loginbackgroundimage'] = 'Kirjautumissivun taustakuva';
$string['loginbackgroundimage_desc'] = 'Kuvat, jotka näytetään kirjautumissivun taustana. Yksi näistä kuvista valitaan satunnaisesti ja näytetään, kun käyttäjä vierailee kirjautumissivulla. Varmista, ettet käytä ei-ASCII-merkkejä tiedostonimessä, jos haluat näyttää tekstiä kirjautumisen taustakuvissa.';
// ... ... Setting: Login page background image position.
$string['loginbackgroundimagepositionsetting'] = 'Kirjautumissivun taustakuvan sijainti';
$string['loginbackgroundimagepositionsetting_desc'] = 'Tällä asetuksella hallitset kirjautumissivun taustakuvan sijoittamista selainikkunassa. Ensimmäinen arvo on vaakasuuntainen sijainti, toinen arvo on pystysuuntainen sijainti.';
// ... ... Setting: Login page background image text.
$string['loginbackgroundimagetextsetting'] = 'Näytä teksti kirjautumissivun taustakuville';
$string['loginbackgroundimagetextsetting_desc'] = 'Tällä valinnaisella asetuksella voit lisätä tekstiä, esim. tekijänoikeusilmoituksen, lataamillesi taustakuville. Tämä teksti näkyy sivun alatunnisteen yläpuolella kirjautumissivulla. Kuitenkin, näytön kiinteän tilan vuoksi, se näytetään vain suuremmilla näytöillä.<br/>
Jokainen rivi koostuu tiedoston tunnisteesta (tiedoston nimestä), näytettävästä tekstistä ja tekstiväristä, jotka on erotettu putki-merkillä. Jokainen ilmoitus on kirjoitettava uudelle riville. <br/>
Esimerkiksi:<br/>
background-image-1.jpg|Tekijänoikeus: CC0|tumma<br/>
Tekstivärinä voit käyttää arvoja "tumma" tai "vaalea".<br />
Voit ilmoittaa tekstejä mielivaltaiselle määrälle lataamiasi kirjautumisen taustakuvia. Tekstit lisätään vain niille kuville, jotka vastaavat tiedostonimeään tässä asetuksessa ilmoitetun tunnisteen mukaan.';
// ... Section: Login form.
$string['loginformheading'] = 'Kirjautumislomake';
// ... ... Setting: login form position.
$string['loginformpositionsetting'] = 'Kirjautumislomakkeen sijainti';
$string['loginformpositionsetting_desc'] = 'Tällä asetuksella voit optimoida kirjautumislomakkeen sopimaan suurempaan valikoimaan taustakuvia. Oletusarvoisesti kirjautumislomake näytetään keskitettynä kirjautumissivulla. Vaihtoehtoisesti voit siirtää sen vasemmalle tai oikealle puolelle kirjautumissivua, jotta voit antaa muiden taustakuvan osien näkyä. Tietenkin voit myös muuttaa tätä asetusta, jos taustakuvia ei ole ladattu lainkaan.';
$string['loginformpositionsetting_center'] = 'Keskitetty';
$string['loginformpositionsetting_left'] = 'Vasemmalle kohdistettu';
$string['loginformpositionsetting_right'] = 'Oikealle kohdistettu';
// ... ... Setting: login form transparency.
$string['loginformtransparencysetting'] = 'Kirjautumislomakkeen läpinäkyvyys';
$string['loginformtransparencysetting_desc'] = 'Tällä asetuksella voit tehdä kirjautumislomakkeesta hieman läpinäkyvän, jotta taustakuva näkyy vieläkin paremmin läpi.';
// ... Section: Login providers.
$string['loginprovidersheading'] = 'Kirjautumisen tarjoajat';
$string['loginprovidersheading_desc'] = 'Huomaa: Boost Unionilla on omat kirjautumisen tarjoajien asetukset, eikä se käytä \'{$a->settingname}\' -asetusta <a href="{$a->url}">Moodlen ytimen todennusasetuksessa</a>.';
// ... ... Setting: Local login form.
$string['loginlocalloginenablesetting'] = 'Paikallinen kirjautuminen';
$string['loginlocalloginenablesetting_desc'] = 'Tällä asetuksella hallitset, näytetäänkö paikallinen kirjautumislomake kirjautumissivulla vai ei. Oletusarvoisesti paikallinen kirjautumislomake näytetään ja käyttäjät voivat kirjautua sivustolle normaalisti. Jos poistat tämän asetuksen käytöstä, paikallinen kirjautumislomake piilotetaan. Tämä mahdollistaa vain ulkoisten henkilöllisyys tarjoajien, kuten OAuth2 tai OIDC, kirjautumispainikkeiden tarjoamisen.';
$string['loginlocalloginenablesetting_note'] = 'Huomaa: Kun piilotat paikallisen kirjautumislomakkeen, riskeerat, että ylläpitäjät eivät voi enää kirjautua sisään paikallisella tilillä, jos ulkoisessa henkilöllisyys tarjoajassa on ongelma. Sama koskee, jos muita todennusmenetelmiä kuin manuaalista todennusta ei ole käytössä lainkaan.<br />Salli paikalliset kirjautumiset tällaisissa tapauksissa <a href="{$a->url}">sivuston sisäänkäynnin paikallisen kirjautumissivun</a> (katso alla lisätietoja) avulla. Muista tallentaa tämä URL-osoite turvaverkkona.';
$string['loginlocalloginformhead'] = 'Paikallinen kirjautuminen';
$string['loginlocalloginlocalnotdisabled'] = 'Tällä sivun sisäänkäynnin kirjautumissivulla ei tarvitse kirjautua sisään. Käytä kirjautumiseen <a href="{$a->url}">vakiokirjautumissivua</a>.';
// ... ... Setting: Local login intro.
$string['loginlocalshowintrosetting'] = 'Paikallisen kirjautumisen esittely';
$string['loginlocalshowintrosetting_desc'] = 'Tällä asetuksella hallitset, näytetäänkö paikallisen kirjautumisen lomakkeen yläpuolella esittelyteksti vai ei. Oletusarvoisesti esittelytekstiä ei näytetä. Mutta jos otat sen käyttöön, tämä esittely voi auttaa käyttäjiä ymmärtämään, mitä tunnistetietoja käyttää paikallisessa kirjautumislomakkeessa, erityisesti jos tarjoat useita kirjautumismenetelmiä tai jos olet muuttanut kirjautumismenetelmien järjestystä.';
$string['loginlocalintro'] = 'Kirjaudu Moodle-tililläsi';
// ... ... Setting: IDP login intro.
$string['loginidpshowintrosetting'] = 'IDP-kirjautumisen esittely';
$string['loginidpshowintrosetting_desc'] = 'Tällä asetuksella hallitset, näytetäänkö IDP-kirjautumispainikkeiden yläpuolella esittelyteksti vai ei. Oletusarvoisesti esittelyteksti näytetään ja käyttäjät saavat nopeasti tietoa siitä, mihin IDP-painikkeet liittyvät. Jos poistat tämän asetuksen käytöstä, IDP-esittely piilotetaan. Tämä mahdollistaa puhtaan käyttäjäliittymän tarjoamisen, jos käytät vain ulkoisia henkilöllisyys tarjoajia, kuten OAuth2 tai OIDC.';
$string['splitidentityprovidersetting'] = 'Hajota henkilöllisyys tarjoajat';
$string['splitidentityprovidersetting_desc'] = 'Tällä asetuksella henkilöllisyys tarjoajat jaetaan kahteen ryhmään - OIDC tarjoajat ja muut tarjoajat. Tämä mahdollistaa niiden sijoittamisen eri paikkoihin kirjautumissivulla.';
// ... Section: Login order.
$string['loginorderheading'] = 'Kirjautumisjärjestys';
$string['loginorderheading_desc'] = 'Näiden asetusten avulla hallitset kirjautumismenetelmien järjestystä kirjautumislomakkeessa. Esitetty järjestys määritellään matalimmasta korkeimpaan järjestysnumeroon, ohittaen kaikki kirjautumismenetelmät ja kirjautumislomakkeen elementit, jotka on poistettu käytöstä Moodlessa.';
$string['loginorderheading_note'] = 'Tekninen huomautus: Esitetty järjestys toteutetaan CSS:n flexbox-järjestyksillä, ei siirtämällä kirjautumiswidgettejä HTML DOM:issa. Tämän pitäisi toimia kaikilla moderneilla selaimilla, mutta ei välttämättä toimi todella vanhoilla selaimilla.';
// ... ... Settings: Login order.
$string['loginorderlocalsetting'] = 'Paikallinen kirjautuminen';
$string['loginorderidpsetting'] = 'IDP-kirjautuminen';
$string['loginorderfirsttimesignupsetting'] = 'Tietoa ensikertaa vieraileville ja itse rekisteröityminen';
$string['loginorderguestsetting'] = 'Vieras kirjautuminen';
// ... Section: Side entrance login.
$string['sideentranceloginheading'] = 'Sivusisäänkäynti kirjautuminen';
// ... ... Setting: Endable side entrance login.
$string['sideentranceloginenablesetting'] = 'Ota käyttöön sivusisäänkäynnin kirjautuminen';
$string['sideentranceloginenablesetting_desc'] = 'Tällä asetuksella voit ottaa käyttöön <a href="{$a->url}">sivusisäänkäynnin paikallisen kirjautumissivun</a>. Se otetaan automaattisesti käyttöön, jos piilotat paikallisen kirjautumislomakkeen (katso yllä), mutta voit myös ottaa sen käyttöön jatkuvasti sallimaan paikallisten käyttäjien ohittaa pääkirjautumissivu ja -prosessi, mikä on erityisen hyödyllistä SSO-asetuksissa. Sivusisäänkäynnin paikallisen kirjautumissivun kaikki Moodlen kirjautumisen suojausmenettelyt ovat voimassa, tietenkin.';

// Settings: Dashboard / My courses tab.
$string['dashboardtab'] = 'Koontinäyttö / Kurssini';
// ... Section: Course overview block.
$string['courseoverviewheading'] = 'Kurssin yleiskatsaus -lohko';
// ... ... Setting: Show course images.
$string['courseoverviewshowcourseimagessetting'] = 'Näytä kurssikuvat';
$string['courseoverviewshowcourseimagessetting_desc'] = 'Tällä asetuksella voit hallita, näkyykö kurssikuva kurssin yleiskatsaus -lohkon sisällä vai ei. On mahdollista valita eri asetus korttinäkymälle, yhteenvetönäkymälle ja luettelonäkymälle.';
// ... ... Setting: Show course completion progress.
$string['courseoverviewshowprogresssetting'] = 'Näytä kurssin suoritusaste';
$string['courseoverviewshowprogresssetting_desc'] = 'Tällä asetuksella voit hallita, näkyykö kurssin suoritusaste kurssin yleiskatsaus -lohkon sisällä vai ei.';

// Settings: Category index / site home tab.
$string['categoryindextab'] = 'Kategoriaindeksi / Etusivu';
// ... Section: Course listing.
$string['courselistingheading'] = 'Kurssiluettelo';
// ... ... Setting: Course listing presentation.
$string['courselistingpresentation'] = 'Kurssiluettelon esitys';
$string['courselistingpresentation_desc'] = 'Tällä asetuksella voit muuttaa kurssiluettelon ulkoasua ja tuntumaa kategoriaindeksisivulla ja etusivulla. Moodlen ytimen esittämien kurssiluetteloiden sijasta voit esittää kurssiluettelon kurssikortteina (samankaltaisia kuin "Kurssini" -sivun kurssikortit) tai kurssiluettelona (samankaltaisia kuin "Kurssini" -sivun kurssiluettelo).';
$string['courselistingpresentation_nochange'] = 'Suunnittelijan painajainen (muuttamaton Moodlen ytimen esityksessä)';
$string['courselistingpresentation_cards'] = 'Kurssikortit';
$string['courselistingpresentation_list'] = 'Kurssiluettelo';
$string['courselistingpresentation_note'] = 'Huomaa: Jos otat käyttöön kurssikortit tai kurssiluettelon, <a href="{$a->url1}">coursesperpage</a> -asetusta kunnioitetaan edelleen ja se ohjaa, kuinka monta korttia/riviä näytetään. Kuitenkin, <a href="{$a->url2}">courseswithsummarieslimit</a> -asetuksella ei ole enää vaikutusta - kaikki kurssit näytetään täydellisillä tiedoilla. Ole hyvä ja älä aseta <a href="{$a->url1}">coursesperpage</a> -arvoa liian korkeaksi välttääksesi pitkät latausajat sivuilla, joilla on paljon kursseja.';
// ... ... Setting: Course card column count.
$string['coursecardscolumncount'] = 'Kurssikorttien sarakemäärä';
$string['coursecardscolumncount_desc'] = 'Kurssikorttien ruudukko esitetään responsiivisesti ja sen sarakkeet kääntyvät pienillä näytöillä. Tällä asetuksella hallitset vain kurssikorttien ruudukon maksimaalista sarakemäärää suuremmilla näytöillä. Maksimaalisen sarakemäärän asettaminen arvoon 2 kolmonen sijasta voi saada kurssikortit näyttämään avarammilta ja vähemmän ahtailta. Maksimaalisen sarakemäärän asettaminen arvoon 1 on myös mahdollista ja muuttaa käytännössä kurssiluettelon pystysuunnassa olevaksi korttilistaksi.';
// ... ... Setting: Show course image in the course listing.
$string['courselistinghowimage'] = 'Näytä kurssikuva kurssiluettelossa';
$string['courselistinghowimage_desc'] = 'Tällä asetuksella voit hallita, näytetäänkö kurssikuva kurssiluettelossa vai ei.';
// ... ... Setting: Show course contacts in the course listing.
$string['courselistingshowcontacts'] = 'Näytä kurssiyhteyshenkilöt kurssiluettelossa';
$string['courselistingshowcontacts_desc'] = 'Tällä asetuksella voit hallita, näytetäänkö kurssiyhteyshenkilöiden kuvat kurssiluettelossa vai ei. Huomaa: Yhteyshenkilökuvat näytetään yhdessä kurssikuvan kanssa, joten kurssiyhteyshenkilöiden esittäminen ilman kurssikuvan esittämistä ei ole mahdollista.';
// ... ... Setting: Show course shortname in the course listing.
$string['courselistinghowshortname'] = 'Näytä kurssin lyhyt nimi kurssiluettelossa';
$string['courselistinghowshortname_desc'] = 'Tällä asetuksella voit hallita, näytetäänkö kurssin lyhyt nimi kurssiluettelossa vai ei.';
// ... ... Setting: Show course category in the course listing.
$string['courselistinghowcategory'] = 'Näytä kurssikategoria kurssiluettelossa';
$string['courselistinghowcategory_desc'] = 'Tällä asetuksella voit hallita, näytetäänkö kurssikategoria kurssiluettelossa vai ei.';
// ... ... Setting: Show course completion progress in the course listing.
$string['courselistinghowprogress'] = 'Näytä kurssin suoritusaste kurssiluettelossa';
$string['courselistinghowprogress_desc'] = 'Tällä asetuksella voit hallita, näkyykö kurssin suoritusaste kurssiluettelossa vai ei.';
// ... ... Setting: Show course enrolment icons in the course listing.
$string['courselistinghowenrolicons'] = 'Näytä kurssin ilmoittautumiskuvakkeet kurssiluettelossa';
$string['courselistinghowenrolicons_desc'] = 'Tällä asetuksella voit hallita, näkyvätkö kurssin ilmoittautumiskuvakkeet kurssiluettelossa vai ei.';
// ... ... Setting: Show course fields in the course listing.
$string['courselistinghowfields'] = 'Näytä kurssin kentät kurssiluettelossa';
$string['courselistinghowfields_desc'] = 'Tällä asetuksella voit hallita, näkyvätkö mukautetut kurssikentät kurssiluettelossa vai ei.';
// ... ... Setting: Show goto button in the course listing.
$string['courselistinghowgoto'] = 'Näytä siirry kurssiin -painike kurssiluettelossa';
$string['courselistinghowgoto_desc'] = 'Tällä asetuksella voit hallita, näytetäänkö "Siirry kurssiin" -painike kurssiluettelossa vai ei. Jos tämä asetus on pois käytöstä, käyttäjä voi silti siirtyä kurssille napsauttamalla kurssin nimeä tai kurssikuvaa.';
$string['courselistinggoto'] = 'Kurssille';
// ... ... Setting: Show details popup in the course listing.
$string['courselistinghowpopup'] = 'Näytä lisätietojen ponnahdusikkuna kurssiluettelossa';
$string['courselistinghowpopup_desc'] = 'Tällä asetuksella voit hallita, näytetäänkö "Kurssin tiedot" -painike kurssiluettelossa vai ei. Tämän painikkeen avulla käyttäjä voi avata lisätietojen ponnahdusikkunan, joka sisältää kurssin yhteenvedon, kurssiyhteyshenkilöt ja kurssikentät. Ponnahdusikkuna sisältää tämän tiedon riippumatta siitä, oletko ottanut sen käyttöön itse kurssikortilla/rivillä vai et.';
$string['courselistingpopup'] = 'Lisätiedot';
$string['courselistingummary'] = 'Kurssin yhteenveto';
$string['courselistingnosummary'] = 'Tällä kurssilla ei ole yhteenvetoa';
$string['courselistingcontacts'] = 'Kurssin yhteyshenkilö';
$string['courselistingviewprofile'] = 'Näytä profiili';
$string['courselistingfields'] = 'Kurssin luokittelu';
// ... Section: Category listing.
$string['categorylistingheading'] = 'Kategorian luettelo';
// ... ... Setting: Category listing presentation.
$string['categorylistingpresentation'] = 'Kategorian luettelon esitys';
$string['categorylistingpresentation_desc'] = 'Tällä asetuksella voit muuttaa kategorian luettelon ulkoasua ja tuntumaa kategoriaindeksisivulla ja etusivulla. Moodlen ytimen esittämien kategorian luetteloiden sijasta voit esittää kategorian luettelon päivitettynä laatikkona.';
$string['categorylistingpresentation_nochange'] = 'Suunnittelijan painajainen (muuttamaton Moodlen ytimen esityksessä)';
$string['categorylistingpresentation_boxlist'] = 'Laatikoiden luettelo';
$string['categorylistingpresentation_note'] = 'Huomaa: Jos otit käyttöön "Kurssiluettelon esitys" -asetuksen yllä, suosittelemme, että otat tämän asetuksen käyttöön myös. Molemmat on suunniteltu toimimaan yhdessä.';

// Settings: Blocks tab.
// The string for this tab is the same as on the 'Feel' page.
// ... Section: Timeline block.
$string['timelineheading'] = 'Aikajana-lohko';
// Setting: Tint activity icons in the timeline block.
$string['timelinetintenabled'] = 'Väritä aikajanan toimintakuvakkeet';
$string['timelinetintenabled_desc'] = 'Tällä asetuksella voit värittää aikajanan kuvakkeet aikajanan toimintojen perusteella. Oletusarvoisesti Moodle ydin näyttää ne vain mustina kuvakkeina.';
// ... Section: Upcoming events block.
$string['upcomingeventsheading'] = 'Tulevat tapahtumat -lohko';
// Setting: Tint activity icons in the upcoming events block.
$string['upcomingeventstintenabled'] = 'Väritä tulevien tapahtumien toimintakuvakkeet';
$string['upcomingeventstintenabled_desc'] = 'Tällä asetuksella voit värittää tulevien tapahtumien kuvakkeet tapahtumien toimintojen perusteella. Oletusarvoisesti Moodle ydin näyttää ne vain mustina kuvakkeina.';

// Settings: Course tab.
$string['coursetab'] = 'Kurssi';
// ... Section: Course header.
$string['courseheaderheading'] = 'Kurssin otsikko';
// ... ... Setting: Course header.
$string['courseheaderimageenabled'] = 'Näytä kurssikuva kurssin otsikossa';
$string['courseheaderimageenabled_desc'] = 'Kun käytössä, kurssikuva (jonka voit ladata kurssin asetuksissa) näytetään kurssin otsikossa. Kurssikuvia näytetään siellä Moodlen "Kurssini" -sivun lisäksi, jossa niitä näytetään aina.';
$string['courseheaderimagefallback'] = 'Vara kurssin otsikkokuva';
$string['courseheaderimagefallback_desc'] = 'Jos lataat kuvan tähän asetukseen, sitä käytetään varakuvana ja näytetään kurssin otsikossa, jos tietyn kurssin asetuksissa ei ole ladattu kurssikuvaa. Jos et lataa kuvaa tänne, kurssin otsikkokuva näytetään vain, jos se on ladattu kyseisten kurssin asetuksissa.';
$string['courseheaderimageheight'] = 'Kurssin otsikkokuvan korkeus';
$string['courseheaderimageheight_desc'] = 'Tällä asetuksella hallitset esitetyn kurssin otsikkokuvan korkeutta.';
$string['courseheaderimagelayout'] = 'Kurssin otsikkokuvan asettelu';
$string['courseheaderimagelayout_desc'] = 'Tällä asetuksella hallitset kurssin otsikkokuvan ja kurssin nimen asettelua.';
$string['courseheaderimagelayoutstackeddark'] = 'Kurssin nimi pinottuna kurssikuvan päälle (valkoinen fonttiväri tummille taustakuville)';
$string['courseheaderimagelayoutstackedlight'] = 'Kurssin nimi pinottuna kurssikuvan päälle (mustavalkoinen fonttiväri vaaleille taustakuville)';
$string['courseheaderimagelayoutheadingabove'] = 'Kurssin nimi kurssikuvan yläpuolella';
$string['courseheaderimageposition'] = 'Kurssin otsikkokuvan sijainti';
$string['courseheaderimageposition_desc'] = 'Tällä asetuksella hallitset kurssin otsikkokuvan sijoittamista kurssin otsikkokuvan säiliössä. Ensimmäinen arvo on vaakasuuntainen sijainti, toinen arvo on pystysuuntainen sijainti.';
// ... Section: Course index.
$string['courseindexheading'] = 'Kurssin indeksi';
// ... ... Setting: Course index.
$string['courseindexmodiconenabled'] = 'Näytä toimintotyypin kuvakkeet kurssin indeksissä';
$string['courseindexmodiconenabled_desc'] = 'Kun käytössä, vastaava toimintotyypin kuvake näytetään indeksirivin edessä, jossa on toiminnon otsikko. Näin ollen kurssin toimintatyypin kuvake joko korvataan kurssin suoritusindikaattorilla, joka siirretään kurssin indeksirivin loppuun, tai väritetään suoritusasteen värillä.';
$string['courseindexcompletioninfoposition'] = 'Toimintojen suoritusasteen indikaattorin sijainti';
$string['courseindexcompletioninfoposition_desc'] = 'Valitse, mihin kohtaan suoritusasteen indikaattori näytetään. <em>Rivin loppu</em> näyttää tavanomaisen suoritusasteen indikaattorin rivin lopussa. <em>Rivin alku</em> näyttää tavanomaisen suoritusasteen indikaattorin rivin alussa. <em>Kuvakkeen väri</em> ei näytä tavanomaista suoritusasteen indikaattoria, vaan koodaa suoritusasteen tiedot kurssimoduulin kuvakkeen taustalle.';
$string['courseindexcompletioninfopositionendofline'] = 'Rivin loppu';
$string['courseindexcompletioninfopositioniconcolor'] = 'Kuvakkeen väri';
$string['courseindexcompletioninfopositionstartofline'] = 'Rivin alku';

// Settings: E-Mail branding tab.
$string['emailbrandingtab'] = 'Sähköposti brändäys';
$string['templateemailhtmlprefix'] = '';
$string['templateemailhtmlsuffix'] = '';
$string['templateemailtextprefix'] = '';
$string['templateemailtextsuffix'] = '';
// ... Section: E-Mails introduction.
$string['emailbrandingintroheading'] = 'Johdanto';
$string['emailbrandingintronote'] = 'Huomaa: Tämä on edistynyt toiminto, joka käyttää joitain kiertoteitä tarjotakseen sähköposti brändäysvaihtoehtoja. Noudata ohjeita tarkasti.';
$string['emailbrandinginstruction'] = 'Kuinka tehdä';
$string['emailbrandinginstruction0'] = 'Tämän Boost Union -ominaisuuden avulla voit soveltaa brändäystä kaikkiin sähköposteihin, jotka Moodle lähettää.';
$string['emailbrandinginstructionli1'] = 'Siirry <a href="{$a->url}" target="_blank">kielimuokkausasetussivulle</a> avatakseen <em>{$a->lang}</em> kielipaketin muokkaamista varten.';
$string['emailbrandinginstructionli2'] = 'Etsi ja muokkaa näitä merkkijonoja <code>theme_boost_union</code> kielipaketissa:';
$string['emailbrandinginstructionli2li1'] = '<code>templateemailhtmlprefix</code>: Tämä pätkä lisätään <em>kaikkien</em> Moodlen lähettämien <em>HTML-sähköpostien</em> <em>alkuun / ennen sisältöä</em>.';
$string['emailbrandinginstructionli2li2'] = '<code>templateemailhtmlsuffix</code>: Tämä pätkä lisätään <em>kaikkien</em> Moodlen lähettämien <em>HTML-sähköpostien</em> <em>lopuksi / sisällön jälkeen</em>.';
$string['emailbrandinginstructionli2li3'] = '<code>templateemailtextprefix</code>: Tämä pätkä lisätään <em>kaikkien</em> Moodlen lähettämien <em>tekstimuotoisten sähköpostien</em> <em>alkuun / ennen sisältöä</em>.';
$string['emailbrandinginstructionli2li4'] = '<code>templateemailtextsuffix</code>: Tämä pätkä lisätään <em>kaikkien</em> Moodlen lähettämien <em>tekstimuotoisten sähköpostien</em> <em>lopuksi / sisällön jälkeen</em>.';
$string['emailbrandinginstructionli3'] = 'Tallenna muutokset kielipakettiin.';
$string['emailbrandinginstructionli4'] = 'Palaa tälle sivulle ja katso alla olevia sähköpostin esikatseluja.';
$string['emailbrandingpitfalls'] = 'Käytännön ongelmat';
$string['emailbrandingpitfalls0'] = 'Tätä ominaisuutta käyttäessäsi on joitain ongelmia, joista sinun tulisi olla tietoinen:';
$string['emailbrandingpitfallsli1'] = 'On pakollista, että muokkaat kielipaketin merkkijonoja tämän sivuston <em>nykyiselle oletuskielelle</em>. Vaikka sinulla olisi useita kielipaketteja asennettuna, vain oletuskielen muutokset vaikuttavat.';
$string['emailbrandingpitfallsli2'] = 'Vastaanottajan kielen huomioiminen ei ole mahdollista. Siksi sähköposti brändäyspätkissä tulisi käyttää kieliä huomioimattomia termejä.';
$string['emailbrandingpitfallsli3'] = 'Jos koskaan vaihdat sivuston oletuskielen tulevaisuudessa, sinun on siirrettävä muokatut kielipaketin merkkijonot uuteen oletuskielipakettiin.';
$string['emailbrandingpitfallsli4'] = 'Tekstimuotoisissa sähköposteissa rivinvaihto ja tyhjää riviä lisätään automaattisesti ennen ja jälkeen etuliitteen ja tyhjää riviä lisätään automaattisesti ennen liitteenä olevan pätkän. Tämä tehdään varmistamaan, että liite ja etuliite eivät tartu suoraan sähköpostin runkoon.';
$string['emailbrandingpitfallsli5'] = 'HTML-sähköposteissa etuliite ja liite lisätään suoraan sähköpostin rungon ylle ja alle. Tämä varmistaa, että voit työskennellä HTML-tunnusten kanssa helposti, mutta sinun on käsiteltävä kaikki väliin jäävät tyhjät tilat rungon ympärillä itse.';
$string['emailbrandingpitfallsli6'] = 'HTML-sähköposteissa voit avata HTML-tunnuksen etuliitteessä ja sulkea tunnuksen liitteessä ilman ongelmia. Muista vain luoda voimassa olevaa HTML:ää tuloksena olevaan sähköpostiin.';
// ... Section: HTML E-Mails.
$string['emailbrandinghtmlheading'] = 'HTML-sähköpostin esikatselu';
$string['emailbrandinghtmlintro'] = 'Tämä on esikatselu HTML-sähköpostista, joka perustuu kielipaketissa tällä hetkellä asetettuihin brändäys etuliitteisiin ja liitteisiin.';
$string['emailbrandinghtmlnopreview'] = 'Toistaiseksi HTML-sähköposteja ei ole mukautettu tämän ominaisuuden avulla. Sähköpostit koostetaan ja lähetetään normaalisti.';
$string['emailbrandinghtmldemobody'] = '<p>Sähköpostin runko alkaa täältä.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><p>Id donec ultrices tincidunt arcu non sodales. Id volutpat lacus laoreet non curabitur gravida arcu.</p><p>Cursus turpis massa tincidunt dui. Pellentesque nec nam aliquam sem et tortor consequat id. In ornare quam viverra orci sagittis eu volutpat. Sem nulla pharetra diam sit amet nisl suscipit. Justo donec enim diam vulputate ut pharetra.</p><p>Sähköpostin runko päättyy tähän.</p>';
// ... Section: Plaintext E-Mails.
$string['emailbrandingtextheading'] = 'Tekstimuotoisen sähköpostin esikatselu';
$string['emailbrandingtextintro'] = 'Tämä on esikatselu tekstimuotoisesta sähköpostista, joka perustuu kielipaketissa tällä hetkellä asetettuihin brändäys etuliitteisiin ja liitteisiin.';
$string['emailbrandingtextnopreview'] = 'Toistaiseksi tekstimuotoisia sähköposteja ei ole mukautettu tämän ominaisuuden avulla. Sähköpostit koostetaan ja lähetetään normaalisti.';
$string['emailbrandingtextdemobody'] = 'Sähköpostin runko alkaa täältä.

Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

Id donec ultrices tincidunt arcu non sodales. Id volutpat lacus laoreet non curabitur gravida arcu.

Cursus turpis massa tincidunt dui. Pellentesque nec nam aliquam sem et tortor consequat id. In ornare quam viverra orci sagittis eu volutpat. Sem nulla pharetra diam sit amet nisl suscipit. Justo donec enim diam vulputate ut pharetra.

Sähköpostin runko päättyy tähän.';

// Settings: Resources tab.
$string['resourcestab'] = 'Resurssit';
$string['resourcescachecontrolnote'] = 'Huomaa, että tiedostot lähetetään selaimelle \'Cache-Control\'-otsikolla, joka käskee selainta välimuistittämään tiedoston. Jos olet varma, ettet muuta tiedostoa lähiaikoina, voit käyttää pysyvää URL-osoitetta tiedoston linkittämiseen. Kuitenkin, jos aiot muokata tiedostoa mutta pitää saman tiedostonimen, sinun pitäisi ennemmin käyttää versioitua URL-osoitetta ja linkittää tiedosto uudelleen joka kerta, kun päivität tiedoston, välttääksesi selainten näyttämästä välimuistissa olevia vanhentuneita versioita tiedostosta.';
// ... Section: Additional resources.
$string['additionalresourcesheading'] = 'Lisäresurssit';
// ... ... Setting: Additional resources.
$string['additionalresourcessetting'] = 'Lisäresurssit';
$string['additionalresourcessetting_desc'] = 'Tällä asetuksella voit ladata lisäresursseja teemalle. Tiedostojen lataamisen etuna on se, että näitä tiedostoja voidaan toimittaa ilman tarkistusta, onko käyttäjä kirjautunut sisään vai ei. Tämä on myös syy siihen, miksi sinun tulisi lisätä vain tiedostoja, jotka ovat ei-kriittisiä ja joiden kaikkien tulisi olla sallittuja ja joita ei tarvitse suojata voimassa olevalla kirjautumisella. Niin pian kuin olet ladannut vähintään yhden tiedoston tähän tiedostotiedostoon ja tallentanut asetukset, luettelo tulee näkyviin alla, mikä antaa sinulle URL-osoitteen, jota voit käyttää viitataksesi tiettyyn tiedostoon.';
// ... ... Information: Additional resources list.
$string['additionalresourceslistsetting'] = 'Lisäresurssien luettelo';
$string['additionalresourceslistsetting_desc'] = 'Tämä on luettelo tiedostoista, jotka olet ladannut lisäresurssitiedostotiedostoon. Annetut URL-osoitteet voidaan käyttää näiden tiedostojen linkittämiseen mukautetussa CSS:ssä, alatunnisteessa tai missä tahansa tarvitsetkin ladattuja tiedostoja, mutta et voi ladata tiedostoja paikassa.';
$string['additionalresourcesfileurlpersistent'] = 'URL (pysyvä)';
$string['additionalresourcesfileurlrevisioned'] = 'URL (versioitu)';
// ... Section: Custom fonts.
$string['customfontsheading'] = 'Mukautetut fontit';
// ... ... Setting: Custom fonts.
$string['customfontssetting'] = 'Mukautetut fontit';
$string['customfontssetting_desc'] = 'Tällä asetuksella voit ladata mukautettuja fontteja teemalle. Fonttien lataamisen etuna on se, että näitä fontteja voidaan toimittaa ilman tarkistusta, onko käyttäjä kirjautunut sisään vai ei, ja niitä voidaan käyttää paikallisesti asennettuina fonteina kaikkialla sivustolla. Niin pian kuin olet ladannut vähintään yhden fontin tähän tiedostotiedostoon ja tallentanut asetukset, luettelo tulee näkyviin alla, mikä antaa sinulle CSS-koodinpätkiä, joita voit käyttää pohjana viitataksesi tiettyihin fonteihin mukautetussa SCSS:ssäsi.';
// ... ... Information: Custom fonts list.
$string['customfontslistsetting'] = 'Mukautettujen fonttien luettelo';
$string['customfontslistsetting_desc'] = 'Tämä on luettelo fonteista, jotka olet ladannut mukautettujen fonttien tiedostotiedostoon. Annetut CSS-pätkät voidaan käyttää näiden fonttien lisäämiseen mukautettuun SCSS:ään. Huomaa, että sinun on itse huolehdittava fontin muotoarvoista sekä fontti-perhe, fontti-tyyli ja fontti-paino CSS-ominaisuuksista tällä hetkellä, sillä Boost Union ei pysty vielä analysoimaan fonttitiedostoja.';
$string['customfontsfileurlpersistent'] = 'URL (pysyvä)';
$string['customfontsfileurlrevisioned'] = 'URL (versioitu)';

// Settings: H5P tab.
$string['h5ptab'] = 'H5P';
// ... Section: Raw CSS for H5P.
$string['cssh5pheading'] = 'Raaka CSS H5P:lle';
// ... ... Setting: Raw CSS for H5P.
$string['cssh5psetting'] = 'Raaka CSS H5P:lle';
$string['cssh5psetting_desc'] = 'Käytä tätä kenttää antaaksesi CSS-koodia, jota sovelletaan H5P-sisällön esittämiseen mod_h5p:ssä ja mod_hvp:ssä. Tarkista H5P-sisällön tyypit löytääksesi tarvittavat CSS-valitsimet.';
// ... Section: Content width.
$string['contentwidthheading'] = 'Sisällön leveys';
// ... ... Setting: H5P content bank max width.
$string['h5pcontentmaxwidthsetting'] = 'H5P-sisältöpankin maksimi leveys';
$string['h5pcontentmaxwidthsetting_desc'] = 'Tällä asetuksella voit ohittaa Moodlen H5P-sisältöpankin leveyden ilman manuaalisia SCSS-muutoksia. Tätä leveyttä käytetään H5P-editorissa sisältöpankissa. Se ei ole käytössä H5P-toiminnan leveyden määrittämisessä. Oletuksena Moodle käyttää H5P-sisältöpankin maksimi leveytenä 960px. Voit syöttää muita pikselipohjaisia arvoja, kuten 1200px, mutta voit myös syöttää prosenttipohjaisen arvon, kuten 100%, tai näkymäleveyden arvon, kuten 90vw.';

// Settings: Mobile tab.
$string['mobiletab'] = 'Mobiili';
// ... Section: Mobile app.
$string['mobileappheading'] = 'Mobiilisovellus';
// ... ... Setting: Additional CSS for Mobile app.
$string['mobilecss'] = 'Lisä CSS mobiilisovellukselle';
$string['mobilecss_desc'] = 'Tällä asetuksella voit kirjoittaa mukautettua CSS-koodia mobiilisovelluksen käyttöliittymän mukauttamiseksi. CSS-koodi lisätään vain tämän Moodlen instanssin mobiilisovelluksen kuvastoon eikä sitä näytetä verkkoselaimen versiossa. Lue lisää tästä ominaisuudesta <a href="https://moodledev.io/general/app/customisation/remote-themes#how-do-remote-themes-work">Moodle dev docs</a>.';
$string['mobilecss_set'] = 'Niin pian kuin lisäät minkä tahansa CSS-koodin tähän asetukseen ja tallennat asetuksen, Moodlen ydinasetuksen <em>mobilecssurl</em> URL-osoite asetetaan automaattisesti Boost Union -teeman URL-osoitteeksi.';
$string['mobilecss_overwrite'] = 'Niin pian kuin lisäät minkä tahansa CSS-koodin tähän asetukseen ja tallennat asetuksen, Moodlen ydinasetuksen <em>mobilecssurl</em> URL-osoite korvataan automaattisesti Boost Union -teeman URL-osoitteella. Tällä hetkellä tämä asetus on asetettu <a href="{$a->value}">{$a->value}</a>.';
$string['mobilecss_donotchange'] = 'Tämä vaihe on välttämätön CSS-koodin toimittamiseksi mobiilisovellukseen. Älä muuta URL-osoitetta siellä, ellet todella halua poistaa CSS-koodia mobiilisovelluksesta.';
// ... Section: Mobile appearance.
$string['mobileappearanceheading'] = 'Mobiilin ulkoasu';
// ... ... Setting: Touch icon files for iOS.
$string['touchiconfilesios'] = 'Kosketusikonitiedostot iOS:lle';
$string['touchiconfilesios_desc'] = 'Tässä asetuksessa voit ladata tiedostoja, joita käytetään aloitusnäytön kuvakkeina, kun Moodle-sivusto lisätään iOS:n aloitusnäytölle kirjanmerkkinä.';
$string['touchiconfilesios_recommended'] = 'Suositellut tiedostot iOS:lle:';
$string['touchiconfilesios_optional'] = 'Valinnaiset tiedostot iOS:lle:';
$string['touchiconfilesios_example'] = 'Esimerkkitiedostonimi: apple-icon-152x152.png';
$string['touchiconfilesios_note'] = 'Suositellut tiedostot ovat hyvän kokoisia, jotta ne näkyvät oikein nykyisillä iOS-laitteilla, ja ne tulisi toimittaa. Valinnaiset tiedostot ovat (tai ovat aiemmin olleet) tuettuja iOS-laitteilla, mutta niitä tulisi todella pitää vain valinnaisina, ellet tue erityistä vanhaa laitetta.';
$string['touchiconfilesioslist'] = 'Kosketusikonitiedostojen luettelo iOS:lle';
$string['touchiconfilesioslist_desc'] = 'Tämä on luettelo tiedostoista, jotka olet ladannut kosketusikonitiedostojen iOS-tiedostotiedostoon.';
$string['touchiconlistiosrecommendeduploaded'] = 'Tämä on suositeltu tiedosto käytettäväksi kosketusikonina iOS-laitteilla, ja se on ladattu.';
$string['touchiconlistiosrecommendedmissing'] = 'Tämä on suositeltu tiedosto käytettäväksi kosketusikonina iOS-laitteilla, mutta se ei ole ladattu oikein.';
$string['touchiconlistiosoptionaluploaded'] = 'Tämä on valinnainen tiedosto käytettäväksi kosketusikonina iOS-laitteilla, ja se on ladattu.';
$string['touchiconlistiosoptionalmissing'] = 'Tämä on valinnainen tiedosto käytettäväksi kosketusikonina iOS-laitteilla, mutta se ei ole ladattu.';

// Settings: Feel page.
$string['configtitlefeel'] = 'Tunne';

// Settings: Navigation tab.
$string['navigationtab'] = 'Navigointi';
// ... Section: Primary navigation.
$string['primarynavigationheading'] = 'Päänavigointi';
// ... ... Settings: Hide nodes in primary navigation.
$string['hidenodesprimarynavigationsetting'] = 'Piilota solmut päänavigoinnissa';
$string['hidenodesprimarynavigationsetting_desc'] = 'Tällä asetuksella voit piilottaa yhden tai useamman solmun päänavigoinnista.<br /><br />
Huomaa: Täällä voit vain poistaa navigointisolmuja. Mutta jos haluat lisätä mukautettuja navigointisolmuja, harkitse <a href="{$a}">Boost Unionin älykkään valikkotoiminnallisuuden</a> käyttöä.';
// ... ... Settings: Alternative logo link URL.
$string['alternativelogolinkurlsetting'] = 'Vaihtoehtoinen logo-linkki URL';
$string['alternativelogolinkurlsetting_desc'] = 'Tällä asetuksella voit asettaa vaihtoehtoisen linkki-URL-osoitteen, jota käytetään linkkinä navigointipalkin logolle. Voit käyttää tätä asetusta esimerkiksi linkittääksesi organisaatiosi verkkosivustolle Moodlen etusivun sijasta, jotta navigointipalkki pysyy homogeenisena koko organisaatiosi järjestelmissä.';

// ... Section: User menu.
$string['usermenuheading'] = 'Käyttäjävalikko';
// ... ... Settings: Show full name in the user menu.
$string['showfullnameinusermenussetting'] = 'Näytä koko nimi käyttäjävalikossa';
$string['showfullnameinusermenussetting_desc'] = 'Tällä asetuksella voit näyttää kirjautuneen käyttäjän koko nimen käyttäjävalikon yläosassa. Tämä voi olla erityisen hyödyllistä tenttitilanteissa, joissa opettajien on vahvistettava, että käyttäjä on kirjautunut omalla tilillään, mutta se voi olla hyödyllistä myös käyttäjälle itselleen. Toisin kuin Classic-teemassa, joka näyttää käyttäjän koko nimen navigointipalkissa lähellä avatar-kuvaa, tämä lähestymistapa ei vie ylimääräistä harvinaista tilaa navigointipalkissa.';
$string['showfullnameinusermenussetting_loggedinas'] = 'Olet kirjautuneena:';
// ... ... Settings: Add preferred language link to language menu.
$string['addpreferredlangsetting'] = 'Lisää suosikkikielen linkki kielivalikkoon';
$string['addpreferredlangsetting_desc'] = 'Tällä asetuksella voit lisätä "Aseta suosikkikieli" -asetuksen kielivalikkoon käyttäjävalikossa. Ymmärrettävästi tämä asetus käsitellään vain, jos asetus <a href="{$a->url1}">Näytä kielivalikko</a> on käytössä, ja jos vähintään <a href="{$a->url2}">toinen kielipaketti on asennettu</a> ja <a href="{$a->url3}">tarjotaan valittavaksi</a>.';
$string['setpreferredlanglink'] = 'Aseta suosikkikieli';
// ... Section: Navbar heading.
$string['navbarheading'] = 'Navigointipalkki';
// ... ... Setting: Show starred courses popover in the navbar.
$string['shownavbarstarredcoursessetting'] = 'Näytä tähditetyt kurssit -ponnahdusvalikko navigointipalkissa';
$string['shownavbarstarredcoursessetting_desc'] = 'Tällä asetuksella voit näyttää ponnahdusvalikon, jossa on linkkejä tähditettyihin kursseihin, viestien ja ilmoitusten valikoiden vieressä.';
$string['shownavbarstarredcourses_config'] = 'Aseta tähditetyt kurssit sivulla \'{$a}\' ';
$string['shownavbarstarredcourses_label'] = 'Tähditetyt kurssit';
// ... ... Setting: Starred courses popover cog icon link target.
$string['starredcourseslinktargetsetting'] = 'Tähditetyt kurssit -ponnahdusvalikon rataskuvakkeen linkin kohde';
$string['starredcourseslinktargetsetting_desc'] = 'Tällä asetuksella voit asettaa rataskuvakkeen linkin kohteen tähditetyt kurssit -ponnahdusvalikossa. Oletusarvoisesti rataskuvake linkittää "Kurssini" -sivulle. Voit kuitenkin myös linkittää "Koontinäyttö" -sivulle, erityisesti jos olet poistanut "Kurssini" -sivun käytöstä päänavigoinnissa.';
// ... Section: Breadcrumbs.
$string['breadcrumbsheading'] = 'Navigointipolut';
// ... ... Setting: Course category breadcrumb.
$string['categorybreadcrumbs'] = 'Näytä kategorian navigointipolut kurssin otsikossa';
$string['categorybreadcrumbs_desc'] = 'Oletusarvoisesti kurssin kategorian navigointipolkuja ei näytetä kurssisivujen otsikossa. Tällä asetuksella voit näyttää kurssin kategorian navigointipolut kurssin nimen yläpuolella otsikossa.';
// ... Section: Navigation.
$string['navigationheading'] = 'Navigointi';
// ... ... Setting: Back to top button.
$string['backtotop'] = 'Takaisin ylös';
$string['backtotopbuttonsetting'] = 'Takaisin ylös -painike';
$string['backtotopbuttonsetting_desc'] = 'Tällä asetuksella takaisin ylös -painike ilmestyy sivun oikeaan alakulmaan heti, kun käyttäjä vierittää sivua alaspäin. Tällainen painike oli olemassa jo Boostissa Moodlen ytimessä aina Moodle 3.11:een asti, mutta se poistettiin käytöstä versiossa 4.0. Boost Unionin avulla voit tuoda sen takaisin.';
// ... ... Setting: Scroll-spy
$string['scrollspysetting'] = 'Vieritysvakoilu';
$string['scrollspysetting_desc'] = 'Tällä asetuksella, kun muokkaustila otetaan käyttöön ja pois päältä, käyttäjän vierityspaikka säilyy, kun muutos tapahtuu.';
// ... ... Setting: Activity & section navigation
$string['activitynavigationsetting'] = 'Toimintojen ja osioiden navigointielementit';
$string['activitynavigationsetting_desc'] = 'Tällä asetuksella edelliseen ja seuraavaan toimintaan/resurssiin siirtymiseen tarkoitetut elementit sekä pudotusvalikko, josta voi siirtyä tiettyyn toimintaan/resurssiin, näytetään. Lisäksi kursseissa, joissa käytetään "yksi osio per sivu" -tilaa, näytetään vastaavat elementit edelliseen ja seuraavaan osioon.';
