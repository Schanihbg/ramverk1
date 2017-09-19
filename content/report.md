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

Kmom04
=========================

Kmom05
=========================

Kmom06
=========================

Kmom10
=========================
