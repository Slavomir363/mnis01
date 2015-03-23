<?php
$title = "Tunelovanie";
$content = '<img src="Obrazky/tunelovanie.png" class="imgRight" />
<h3>Tunelovanie a mechanizmy</h3>
<p>
    Tunelovanie je všeobecne známy spôsob ako prejsť nepriechodným terénom
    efektívne a rýchlo. Takisto to je v informačných technológiách a koexistencii dvoch rôznych
    protokolov. Pri IPv4 vs. 6 sa datagramy zabalia do datagramu druhého protokolu, ktorý je
    v sietí podporovaný, a to nám zabezpečí úspešný prenos viacprotokolovou infraštruktúrou.
    Fungovanie IPv4 tunelu v IPv6 sieti znázorňuje obrázok Obrázok 4. Tunel má dva
    konce, pričom každý má svoju IPv6 adresu. Keď na základe smerovacej tabuľky a cieľovej
    adresy smerovač R4 zistí, že prijatý IPv4 datagram nemôže poslať priamo do IPv6 siete, ale
    do tunelu, zoberie ho a celý zabalí do novovytvoreného IPv6 datagramu. Cieľová adresa
    novovytvoreného datagramu je IPv6 adresa smerovača na druhej strane. Vnorený datagram
    je identifikovaný polom „Protokol obaľujúci IP diagram“ v hlavičke IPv6 datagramu.Datagram je ďalej normálne poslaný do IPv6 siete a prijatý na druhej strane tunela.
    Druhý smerovač zistí, že prijal tunelovaný datagram, rozbalí ho a ďalej spracováva podľa jeho
    smerovacích politík. 

</p>

<h3>Konfigurovaný režim tunelovania </h3>
<p>
    Prvý a základný režim tunelovania. Pri tomto spôsobe sú na daných zariadeniach
    predkonfigurované príkazy, ktoré funkcionalitu tunelovania vytvárajú. Na smerovači vznikne
    nové sieťové virtuálne rozhranie a v smerovacej tabuľke vznikne záznam pre smerovanie
    určených rámcov na toto rozhranie.
    Konfigurované tunely sa najčastejšie používajú pri trvalých spojeniach sietí alebo IPv4
    počítačov. Výborne poslúži pri experimentovaní s IPv6, no treba myslieť aj na to, že niektoré
    cesty v sieti nemusia byť optimálne a správa siete bude náročnejšia. 
    1
    Pre zjednodušenie konfigurovania boli vytvorené tzv. tunel servery. Na tomto servery
    sa používateľ musí najskôr zaregistrovať prostredníctvom web stránky, robot následne
    vytvorí druhú stranu tunela a používateľovi pošle konfiguračný skript na jeho stanu tunela.
    Komunikáciu medzi používateľom a tunel serverom sprostredováva tzv. tunel broker, ktorý
    vyberá používateľovi najvhodnejší server. Komunikácia prebieha protokolom TSP (Tunnel
    Setup Protocol) 
 
</p>

<h3>Automatický režim tunelovania</h3>
<p>
    Automatické tunelovanie poskytuje kompromis medzi jednoduchým používaním
    automatizovaného tunelovania a determinizmom konfigurovaného režimu. Pre automatické
    nastavenie tunelovania vzniklo viacero známych mechanizmov.

 </p>

<h3>6to4</h3>
<p>
    Najrozšírenejší návrh automatického tunelovania definovaný v RFC 3056: Connection
    of IPv6 Domains via IPv4 Clouds. 6to4 tunely umožňujú komunikáciu izolovaných IPv6 sietí
    prostredníctvom automatických tunelov cez IPv4 sieť. V každej sieti, kde treba podporu 6to4,
    treba vymedziť jeden hraničný smerovač s IPv4 adresou, ktorý sa bude zúčastňovať na
    vytváraní tunelov do iných 6to4 sietí alebo natívnych IPv6 sietí.
    
 </p>

<h3>ISATAP</h3>
<p>
    Cieľom ISATAP protokolu je umožniť komunikáciu viacerých IPv6 uzlov, no na rozdiel
    od 6to4 v rámci jednej IPv4 siete. Práve preto je ideálnym doplnkom k 6to4 a spolu vytvárajú
    mocný mechanizmus na koexistenciu oboch protokolov. ISATAP protokol je definovaný v RFC
    5214: Intra-Site Automatic Tunnel Addressing Protocol (ISATAP). 
    2
    Komunikujúce počítače musia podporovať oba protokoly. Princíp je jednoduchý
    a podobný k mechanizmu 6over4. Podľa štandardnej tunelovacej procedúry je zabalený IPv6
    datagram do IPv4, pričom IPv6 adresa v sebe obsahuje IPv4 adresu. Ďalej sa odošle na
    adresu získanú z cieľovej ISATAP adresy. 
 </p>

<h3>TEREDO</h3>
<p>
    Veľmi nepríjemnou prekážkou okrem DNS je pre kopu tunelovacích protokolov aj
    NAT. NAT skrýva počítače vnútornej siete, skrýva ich IP adresu, poprípade port a navyše je
    často nastavený tak aby komunikácia mohla začať iba z vnútornej siete. S týmito problémami
    sa snaží vysporiadať mechanizmus TEREDO definovaný v RFC 4380: Teredo: Tunneling IPv6
    over UDP through Network Address Translations (NATs).
    Rovnako ako ISATAP je vhodný na sprostredkovanie IPv6 komunikácie uzlov v IPv4
    sieti, no navyše dokáže do značnej miery prechádzať aj cez NAT, a preto je vhodný pre
    domáce siete zvyčajné skryte za NAT-om. Tato výhoda však spôsobuje nízku efektivitu
    protokolu. 

 </p>';


include 'Sablona.php';
?>
