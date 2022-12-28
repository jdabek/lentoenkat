# lentoenkat
Suomen ilmailuennätykset

* Suomalaisten lentoennätysten hallintajärjestelmä.
    * Purjekoneilla
    * Lennokeilla
* Yksinkertaisella sisäänkirjautumisjärjestelmällä.
* Tietojen tallentaminen ja hallinta.

## Alustava "backlog"

1. Tallennettavien lentotietojen vieminen tietorakenteeseen. Hyväksymiskriteerit:
    * Ennätyksestä tallennetaan lentäjän nimi, päivämäärä, kilpailuluokka, mahdollinen igc tiedosto, etäisyys, konetyyppi, lisääjän tunnus ja lisäysaikaleima.
    * Poistaminen/muuttaminen tehdään "soft erase"-tyyppisenä, mikä antaa ylläpitäjälle mahdollisuuden palauttaa tietoja, jos niitä vahingossa poistetaan.
        * Tietokantarivin tyhjentämisen sijasta on totuusarvo, joka kertoo, näytetäänkö kirjaus vai ei.
        * Jos jonkin kirjauksen haluaisi päivittää, niin se ensin poistettaisiin ("soft erase"-tila "true"), ja sitten tehtäisiin uusi kirjaus ("soft erase"-tila "false").
        * Poistamisesta "soft erase" kirjataan poistajan tunnus ja poistoaikaleima.
2. Pääkäyttäjätunnusten tietorakenne. Hyväksymiskriteerit:
    * Kirjattuna tietorakenteeseen tunnus eli sähköpostiosoite, salasana kryptattuna, päivitysaikaleima, etunimi ja sukunimi.
    * Luotavissa URL-linkki, jonka kautta pääkäyttäjät voivat kukin lisätä itsensä tietorakenteeseen.
3. Lentotietokäyttöliittymä on yksi sivu, joka toimii kaikille käyttäjille. Hyväksymiskriteerit:
    * Sivu pystyy näyttämään lentotiedot kohdasta 1.
    * Vain tiedot, jotka ovat "soft erase"/"false" näytetään.
    * Pääkäyttäjä voi kirjautua palveluun.
    * Pääkäyttäjä voi ***palauttaa salasanansa saamalla linkin kohdan 4. sivulle***.
    * Sivun kautta voidaan tallentaa uusia lentotietoja.
    * Lentotietoja voidaan poistaa "soft erase"-toiminnon mukaan.
4. Pääkäyttäjille on oma sivunsa. Hyväksymiskriteerit:
    * Kohdan 2. mukaiset tiedot ovat soveltuvin osin muokattavissa.


Kuka tahansa pääkäyttäjä saa muokata mitä tahansa suoritusta.
