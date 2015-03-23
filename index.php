<?php
$title = "Home";
$content = '<img src="Obrazky/IPV6_timeline.png" class="imgLeft" />
<h3>História</h3>
<p>
    Sieťový protokol verzie 6 (IPv6) je nasledovník
    súčasného kmeňového protokolu celého internetu – IPv4. V priebehu 90 rokov dramaticky
    narástol počet používateľov internetu, ľudia a podniky začali používať nespočetné aplikácie
    založené na internete (video telefonovanie, hlasový prenos cez internet, kolaboračné
    nástroje, sociálne siete). To všetko spôsobuje rýchly úbytok IPv4 adries a otvára dvere
    tomuto novému internetovému protokolu
    S novým obrovským (priam až nekonečným) rozsahom IPv6 adries sa predpokladá, že
    budú mať IP adresu všetky elektrické zariadenia. 
    Nie len mobilné telefóny a autá, no vedci si
    predstavujú aj výrobu IP chladničiek, IP televízorov a pod. Veď nie je sa čo čudovať, keď
    v novom protokole IPv6 je rozsah pre 3.4×1038 (340 sextiliónov) adries. To je približne
    4.3×1020 (430 triliónov) adries na štvorcový palec zemského povrchu
</p>

<img src="Obrazky/vycerpanie.png" class="imgRight"/>
<h3>Vyčerpanie</h3>
<p>
    Internet je verejne dostupný celosvetový systém vzájomne prepojených počítačových
    sietí. Pozostáva z tisícok menších komerčných, akademických, vládnych a vojenských sietí.
    Slúži ako prenosové médium pre rôzne informácie a služby ako napr. elektronická pošta,
    chat, WWW (World Wide Web). Dáta a komunikácia v Internete prebieha pomocou
    prepínania datagramov, a to hlavne za použitia štandardizovaného sieťového protokolu
    IP(Internet Protocol) vo verzii 4 a mnohých ďalších protokolov. V tomto protokole je každý
    uzol identifikovaný 32 bitovým číslom, tzv. IP adresou.
    Prvé uzly tvoriace internet vznikli už v roku 1964 ako ARPANET, sieť vytvorená
    skupinou ARPA (Advanced Research Projects Agency) ministerstva obrany Spojených štátov
    Amerických. Pri vtedajšom návrhu sieťového protokolu IP sa nepočítalo s takým obrovským
    rozmachom tejto technológie, čo v súčasnosti spôsobuje míňanie rozsahu voľných verejných
    IP adries. Organizácia IANA1 vo svojej správe predpovedá minutie adresného priestoru
    IPv4 na druhý kvartál roku 2011
</p>

<img src="Obrazky/v4_v6_table.png" class="imgLeft" />
<h3>Adresy v IPv6 </h3>
<p>
    Medzi hlavné prínosy IPv6 patria väčšie adresy. V porovnaní s IPv4 sa ich veľkosť
    zväčšila štvornásobne na 128 bitov a zmizli taktiež oznamovacie (broadcast) adresy. Vznikol
    ale nový typ správ – výberové, čiže stále existujú tri druhy adries:
    - Individuálne (unicast) adresy – klasické adresy identifikujúce jedno sieťové rozhranie
    - Skupinové (multicast) adresy – slúžia na adresovanie skupín zariadení, pričom musia
    byť dáta dopravené všetkým členom skupiny
    - Výberové (anycast) adresy - slúžia tiež na adresovanie skupín zariadení, no dáta sú
    doručované iba jednému najbližšiemu členovi skupiny
    IPv6 adresa sa zvyčajne zapisuje ako osem skupín po štyroch hexadecimálnych číslach: 0123:0000:0000:0000:fedc:ba98:4567:89ab
    Keďže sú nové adresy o moc dlhšie, boli prijatých niekoľko pravidiel pre
    zjednodušenie zápisu adries. Ak skupina číslic obsahuje 0000, je možné túto skupinu
    vynechať. Ak sú výsledkom takéhoto zjednodušenia viac ako dve po sebe nasledujúce
    dvojbodky, je možné ich zredukovať na dve dvojbodky. Jedinou podmienkou je existencia len
    jednej skupiny takýchto dvojbodiek.
</p>

<img src="Obrazky/datagram.png" class="imgRight" />
<h3>Datagram v IPv6 </h3>
<p>
    Datagram v IPv6 má stále základný tvar, čiže začína hlavičkami, za ktorými nasledujú
prenášané dáta. V porovnaní zo staršou verziou protokolu však došlo k výraznej zmene,
keďže hlavička má konštantnú veľkosť. Hlavička IPv4 mala premenlivú dĺžku a jednotliví
účastníci komunikácie mohli pripájať nepovinné voľby podľa potreby. IPv6 naproti tomu
hlavičku minimalizovalo a obmedzilo len na najzákladnejšie polia. Všetky nepovinné,
doplňujúce a rozširujúce údaje boli presunuté do rozširujúcich nepovinných hlavičiek.
 Tvar základnej hlavičky a IPv4 a IPv6 vidieť na obrázku Obrázok 2. Napriek tomu, že sa
zdrojové a cieľové adresy zväčšili štvornásobne, veľkosť celého datagramu vzrástla vďaka
zjednodušeniu iba dvojnásobne. 
 
</p>';

include 'Sablona.php';
?>

