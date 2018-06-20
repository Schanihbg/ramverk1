---
title: "Report"
...
Report page
=========================

Kmom01
=========================

**Gör din egen kunskapsinventering baserat på PHP The Right Way, berätta om dina styrkor och svagheter som du vill förstärka under det kommande året.**

Känner rent spontant att jag har rätt dålig koll på hur namespaces fungerar, så det ska bli spännande att få lära sig mer om det.  
Sen är jag helt ny (nästan) på all form utav testning, jag menar då unit test och sådant.

**Vilket blev resultatet från din mini-undersökning om vilka ramverk som för närvarande är mest populära inom PHP (ange källa var du fann informationen)?**

Utifrån personlig erfarenhet av vad jag har sett på nätet är nog Wordpress den mest populäraste ramverket som används. Sen tror jag att Laravel ligger rätt högt upp på listan också.

Efter en undersökning så visar det sig att jag hade fel om Wordpress, det är en CMS och inte en MVC. Sen kom jag på att det är rätt svårt utifrån att vilket ramverk en sida använder sig utav.

Enligt en Medium artikel från 20e juni [Länk här](https://medium.com/@elitechsystems/the-most-popular-php-frameworks-in-2017-a90a1189405e).  
De topp tre är:

* Laravel
* Codeigniter
* Symfony

Det kanske är ramverk man ska bygga sin grundsida på i framtiden för att komma någonstans? Eller ska man köra ren PHP?


**Berätta om din syn/erfarenhet generellt kring communities och specifikt communities inom opensource och programmeringsdomänen.**

Jag har själv inte gjort några publiceringar mot opensource projekt. Men det är något jag kan tänka mig att göra i framtiden. Jag gillar idén att alla kan göra lite som strävar gemensamt mot en bättre slutprodukt.


**Vad tror du om begreppet “en ramverkslös värld” som framfördes i videon?**

Det blir enklare om alla samarbetar om att skapa ett gemensamt ramverk, men folk har ju olika syn på saker. Därför blir det lätt att man grenar av något eller skapa nytt projekt.  
Just nu ser det ut som att man hellre bygger bibliotek till ett ramverk än att bygga själva ramverket.  
En framtid med kompabilitet mellan alla ramverk känns trevligt, om någon gör det.



**Hur gick dina förberedelser inför kommentarssystemet?**

Funderade lite och kom väl fram till att det krävs en databas, ett interface kanske ett API för att underlätta skicka/ta emot data. Sen får man fundera på om man ska köra en WYSIWYG-editor eller om man bara ska ha rena formulär fält.



Kmom02
=========================

**Vilka tidigare erfarenheter har du av MVC? Använde du någon speciell källa för att läsa på om MVC? Kan du med egna ord förklara någon fördel med kontroller/modell-begreppet, så som du ser på det?**

Har tydligen jobbat med MVC innan i Webapp, men det var så länge sedan nu så man har glömt. Jag läste på om MVC på Wikipedia. Vad jag förstår det som så delar man upp koden i relevanta kodstycken. Där vyn används för att rendera allting som ska visas, väl här inne så ska det inte finnas någon logik som t.ex. ta bort något i databasen. MVC är uppdelat i tre delar: Model, View och Controller.

**Kom du fram till vad begreppet SOLID innebar och vilka källor använde du? Kan du förklara SOLID på ett par rader med dina egna ord?**

Läste lite på Wikipedia, men jag blev inte klokare utav den artikeln. Verkar fatta det som att det är fem designprinciper som ska göra programmering utav mjukvara lite mer lättläsliga och enklare att uppfatta.

**Gick arbetet med REM servern bra och du lyckades integrera den i din me-sida?**

Det gick bra att följa efter guiden som fanns, det tog inte så lång tid efter man hade testat det i anax2. Det var ungefär bara 6st filer som behövdes läggas till i anax.

**Berätta om arbetet med din kommentarsmodul, hur långt har du kommit och hur tänker du?**

Jag har gjorde alla kraven som stod på sidan. Nu har det blivit lite som ett RESTapi blandat med lite formulär. Men det fungerar ser det ut som. Nu kan vem som helst ta bort en post utan auth, på grund av att det fungerar som ett RESTapi.  
Vet dock inte om jag har gjort rätt gällande kontroller/modeller. För personligen tycker jag att allt detta med MVC är bara krångligt att greppa. Varför inte bara skippa controller och bara köra all kod i model direkt? För just nu i kmom02 så pekar alla funktioner på modellen, vilket skapar bara en extra ”onödig” fil.


Kmom03
=========================

**Hur känns det att jobba med begreppen kring dependency injection, service locator och lazy loading?**

Det är mycket bättre att saker lazy-loadar istället för att allting laddas på en gång. Det sparar väl en liten mängd minne. Det sparar även lite bandbredd så man slipper ladda lite extra data.

**Hur känns det att göra dig av med beroendet till $app, blir $di bättre?**

Jag har absolut ingen aning bytet till $di gjorde någon skillnad mot $app. Det har blivit rätt så flummigt om vad fördelarna och nackdelarna är på de två. Det verkar dock som att ifall man lägga till fler moduler så blir det enklare än innan i $app.

**Hur känns det att återigen göra refaktoring på din me-sida, blir det förbättringar på kodstrukturen, eller bara annorlunda?**

Gjorde inte så mycket refaktoring av min kod i mån förbättringar då. Men det blev ett par rader som fick skrivas om till $di kompatibel kod. Vad jag ser så blir det bara mer kod som gör samma saker. Det kanske blir bättre i slutändan.

**Lyckades du införa begreppen kring DI när du vidareutvecklade ditt kommentarssystem?**

Ja, det gick bra att införa DI i mitt kommentarssystem. Hade bara glömt ändra setDI på modellen från början, men insåg det och nu funkar det som det ska. Hoppas att jag har gjort det rätt med hur man ska använda funktionerna från databas och sånt.

**Påbörjade du arbetet (hur gick det) med databasmodellen eller avvaktar du till kommande kmom?**

Jag implementerade redan en MySQL databas i kmom02. Jag får se hur det blir nästa kursmoment om jag behöver göra om en massa eller inte.

**Allmänna kommentarer kring din me-sida och dess kodstruktur?**

Den ser väl ok ut, jag använder Bootstrap 4 beta. Tycker det är lite jobbigt att det är så många filer man måste ändra i för att få småsaker gjorda.


Kmom04
=========================

**Hur gick det att integrera formulärhantering och databashantering i ditt kommentarssystem?**

Det var inte så svårt att få in båda sakerna. För jag redan hade databashantering kopplat till mitt kommentarsystem. Formuläret var heller inte så svårt eftersom att jag har jobbat en del med databaser innan och att man kunde bara göra samma saker som man gjorde i övningarna direkt till sin skarpa sida istället.

**Berätta om din syn på Active record och liknande upplägg, ser du fördelar och nackdelar?**

Ser att en fördel att det blir objektorienterad programmering istället för att skriva en SQL-sats och sen bara skicka in data till frågetecknet.  Sen kan man bygga in flera checkar som körs varje gång, typ om det verkligen finns data och eventuell felhantering.

**Utveckla din syn på koden du nu har i ramverket och din kommentars- och användarkod. Hur känns det?**

Jag har fortfarande svårt att skilja på om man ska skriva sin kod som gör saker i Model eller Controller, alla exempel vi har fått så är de skrivna på olika sätt. Vissa har bara saker i Model, vissa har bara i Controller och vissa har saker i båda. Det är lite förvirrande.
Annars så är jag rätt nöjd med vad jag har producerat till min kod.


**Om du vill, och har kunskap om, kan du även berätta om din syn på ORM och designmönstret Data Mapper som är närbesläktade med Active Record. Du kanske har erfarenhet av likande upplägg i andra sammanhang?**

Jag ser det som att man har färdiga funktioner som gör saker den bara ska göra, då kan bygga in extra checkar. Jämfört med att skriva en SQL-sats rakt av. Annars så har jag inte använt det förut. Inte vad jag vet i alla fall.

**Vad tror du om begreppet scaffolding, kan det vara något att kika mer på?**

Det kan vara bra ifall man vill skapa om ett projekt hela tiden, men tänker mig att det passar bäst i en testmiljö. Fast då har man alltid ett fungerande snapshot som man går tillbaka till. Men ja det kan hjälpa en ibland, har använt det någon gång under detta kursmoment för att få se originalkoden.



Kmom05
=========================

**Hur gick arbetet med att lyfta ut koden ur me-sidan och placera i en egen modul?**

Det gick enkelt, trodde först att det bara räckte med `comment`, men tydligen berodde den på min egna `Gravatar` och `User` moduler som jag fick slänga med i `Comment` modulen.
Så det blir ett ”komplett” system för kommentarer. Hur komplett den är, det är en definitionsfråga, men den fungerar.

**Flöt det på bra med GitHub och kopplingen till Packagist?**

Jajamensan, inga problem. La även till en service hook så den automagiskt i Packagist plockar från Github.

**Hur gick det att åter installera modulen i din me-sida med composer, kunde du följa du din installationsmanual?**

Det gick bra att göra att följa min egen manual, det är ju jag som har skrivit den. Men jag testade en gång innan med en scaffoldad anax, det gick smidigt där. Sen testade jag på befintliga `anax` och det gick galant.

**Hur väl lyckas du enhetstesta din modul och hur mycket kodtäckning fick du med?**

Det var väldigt svårt att komma igång med enhetstestningen, övningen visade inte så mycket hur man skulle göra. Det står förvisso i repot för Remserver, men det står inget i artikeln.
Men lite om och men samt hjälp från mos och kolla på hur andra har gjort, så lyckades jag få ihop fyra enhetstester. Det blev inte så bra kodtäckning fick 11%, men jag ser det mer som proof of conecpt att det fungerar. Jag är nöjd!

**Några reflektioner över skillnaden med och utan modul?**

Är väl smidigt att inte låta användaren göra en massa kodande och bugfix. Man låter användaren bara lägga till config och routes så har man ett fungerande system. Det blir smidigare att inte behöva skapa ett eget.



Kmom06
=========================

Kmom10
=========================
