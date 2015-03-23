<?php
$title = "Mechanizmy";
$content = '</>
<h3>Prekladové mechanizmy</h3>
<p>
    Prekladové mechanizmy sa snažia sprostredkovať komunikáciu medzi IPv4 a IPv6
    uzlami prekladaním datagramov z jedného typu na druhý (na rozdiel od tunelovacích
    mechanizmov). 

 </p>

<h3>SIIT</h3>
<p>
    Stateless IP/ICMP Translation (SIIT) používa pri prekladaní datagramov tzv. bestavový
    prístup, čiže si neuchováva informácie o prechádzajúcich spojeniach a každý datagram
    prekladá úplne samostatne, bez akýchkoľvek návezností na predošlé datagramy. Je
    definovaný v RFC 2765: Stateless IP/ICMP Translation Algorithm (SIIT).
    Tento prekladací uzol je zvyčajne smerovač a stojí na rozhraní medzi IPv4 a IPv6
    sieťou. Problém vzájomnej identifikácie zdrojov rieši prideľovaním dočasných IPv4 adries.
    SIIT používa pre preklad jednotlivých hlavičiek medzi oboma protokolmi presné pravidlá.
    Tieto pravidlá sú bohužiaľ značne obmedzené, a preto musíme zabudnúť na rozširujúce
    hlavičky ako IPsec alebo mobilita. SIIT taktiež nerieši dôležitý problém, akým je väzba IPv6
    a IPv4 adresami a odraz v DNS systéme. 

    
 </p>

<h3>NAT-PT</h3>
<p>
    Network Address Translation – Protocol Translation (NAT-PT) je práve jedným
    z prístupov, ktorý využíva základné konvencie SIIT a doplňuje k ním chýbajúcu podporu pre
    rozširujúce hlavičky. Jeho hlavným cieľom je poskytnúť kompletnú podporu pre koexistenciu
    oboch protokolov a využiť pri tom skúsenosti s prekladačmi adries. Všetka komunikácia musí
    prechádzať smerovačom s podporou NAT-PT, ktorý býva spravidla prístupový smerovač pre
    danú IPv6 sieť.
    NAT-PT používa pri prekladaní švindľovanie s DNS, ktoré je nutné pre nadviazanie
    spojenia dovnútra prekladanej IPv6 siete. Odpovede prichádzajúce z IPv4 siete sa menia na
    IPv6 a adresy v nich sa mapujú pomocou vyčleneného prefixu. 
 </p>

<h3>TRT</h3>
<p>
    Transport Relay Translator (TRT) sa snaží o podobnú vec ako NAT-PT, no tento krát
    o jednu vrstvu vyššie - na transportnej vrstve. Je definovaný v RFC 3142: An IPv6-to-IPv4
    Transport Relay Translator.
    TRT podobne ako NAT-PT vyžaduje vyčlenenie jedného IPv6 prefixu pre mapovanie
IPv4 adries a taktiež dochádza k úpravám DNS. Keď chce počítač X6 v miestnej IPv6 sieti
komunikovať zo vzdialeným strojom Y4 v IPv4 sieti, dostal od DNS servera adresu Y4
zmenenú na IPv4 adresu prefix:Y4. Žiadosť o doručenie je preto doručená TRT stroju, ktorý
mu odpovie, naviaže s ním spojenie a predstiera, že je Y4.
Zároveň však otvorí cez IPv4 a TCP spojenie zo strojom Y4, pričom predstiera, že je
X6. Medzi jedného spojenia teda vzniknú spojenie dve, pričom TRT zariadenie komunikáciu
medzi nimi transparentne predáva [8]. Keďže je prenos dát rozpojený, nepoužívajú sa
prekladové pravidlá SIIT, no dáta sa iba vybaľujú a preposielajú novým datagramom.  

 </p>';


include 'Sablona.php';
?>
