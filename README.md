Complete Web Backend Course (PHP)
===========

## Installation

### GIT gebruiken om cursus te downloaden
  - Download en installeer [GIT](http://git-scm.com/). Installeer de CLI-versie.

  - Maak een map "web-backend" aan 

  - Open je [CLI](http://en.wikipedia.org/wiki/Command-line_interface):

    1. Navigeer naar de map "web-backend" via de CLI:
    
       ````
       cd \user\dropbox\web-backend
       ````
    2. Clone de web-backend repository:
       
       ````
       git clone https://github.com/sam-kdg/web-backend.git cursus
       ````
       Opmerking: Door op het einde van deze command "cursus" toe te voegen, zal er automatisch een map "cursus" aangemaakt worden waarin de de web-backend repository wordt geplaatst. Het is dus niet nodig om de map "cursus" manueel aan te maken. 

### Virtual hosts

  - De mappenstructuur web-backend moet er als volgt uitzien:
  
    ```
    web-backend (map)
    |- cursus (map)
    |- oplossingen (map)
    ```
  
    - De map "cursus" bevat de web-backend repository
    - De map "oplossingen" zal uiteindelijk je zelfgemaakte oplossingen bevatten.

  - Stel daarna je virtual hosts in (zie slides [Virtual Server Setup](https://github.com/sam-kdg/web-backend/blob/master/public/cursus/virtual-server-setup.pdf)):

    - http://web-backend.local -> verwijst naar de map web-backend/cursus
    - http://oplossingen.web-backend.local -> verwijst naar de map web-backend/oplossingen

    - Deze virtual hosts moeten correct ingesteld worden, anders zullen sommige voorbeelden niet werken. Neem alle virtual host en mapbenamingen dus exact over
    


## Nieuwste versie van de cursus ophalen

  - Om de lokale versie te updaten naar de laatste nieuwe versie (enkel nodig wanneer de online versie geüpdatet is):
    1. Navigeer naar de map waar de cursus staat:
    
       ````
       cd \user\dropbox\web-backend\cursus
       ````
    2. Voer een pull-request uit:
       
       ````
       git pull
       ````

## Je eigen oplossingen uploaden naar je online repository

  - [Maak een GitHub repository](https://help.github.com/articles/create-a-repo) aan die je oplossing zal bevatten en voer de voorgestelde bewerkingen uit.

  - Telkens wanneer je een oplossing hebt afgewerkt, kan je deze op je online repository zetten

  - Open de CLI en voer de volgende commands uit:

    1. Navigeer naar de map waar je oplossingen staan
       ````
       cd \user\dropbox\web-backend\oplossingen
       ````
      
      Bij het aanmaken van je GitHub repository stelde GitHub een stappenplan voor dat je kon volgen om je lokale versie aan de online versie te koppelen. Is dit niet het geval, kan je de onderstaande stappen volgen.
      ````
      git init
      git remote add origin URL-VAN-GITHUB-REPO.git
      ````
      Let op: vergeet niet achter de url van de repo .git te plaatsen.
      
      De `remote add origin URL` staat voor een online versie van de GitHub repo linken aan een alias, in dit geval origin. 

    2. Bekijk de status van je lokale git repository om te weten te komen welke bestanden er gewijzigd/toegevoegd/verwijderd zijn
       ````
       git status
       ````
       
       

    3. Voeg de wijzigingen/toevoegingen/weglating toe aan je lokale repository 
       ````
       git add .
       ````
    De `.` staat voor de hele working directory

    4. Finaliseer je wijzigingen door deze aan de repository toe te voegen. Voeg best ook een boodschap toe
       ````
       git commit -m "Oplossing toegevoegd"
       ````
    De `-m` staat voor "message". Je voegt best iedere keer een beschrijving toe van wat je in deze commit hebt uitgevoerd.

    5. Voeg je lokale repository samen met de repository die online op je GitHub-account staat
       ````
       git push origin master
       ````
    De `origin` staat voor url van je GitHub oplossingen repository. De `master` staat voor je lokale versie.

## License

  - Deze cursus is gemaakt door [Pascal Nosenzo](mailto:info@pascalculator.be)
  - Alles uit deze cursus valt onder de [Apache Licence v2.0](http://www.apache.org/licenses/LICENSE-2.0.html). Alles uit deze cursus mag vrij gebruikt worden, mits dezelfde disclaimer én bronvermelding worden overgenomen.

## Contributors

[Giele Cools](https://github.com/GieleCools), [Sam Schuddinck](https://github.com/TheNumber4/), [Jim Peeters](https://github.com/jimpeeters), [Stijn De Ridder](https://github.com/DeRidderStijn), [Ruud Luijten](https://github.com/rluijten/ ), [Jeroen Van den Broeck](https://www.github.com/jeroenjvdb), [Ruben Wouters](https://github.com/Ravar33), [Christoph Van Hees](https://github.com/Christophvh), [Floor Leemans](https://github.com/FloorLeemans), [Jonas Iliaens](https://github.com/jonasiliaens), [Anton Patokin](https://github.com/Anton-Patokin/), [Rowan Van Ekeren](https://github.com/rowanvanekeren/), [Adriaan Vermeire](https://github.com/adriaanvermeire), [Thomas Verhelst](https://github.com/TVke), [Robbert Luit](https://github.com/RobLui), [Jordy Peireira](https://github.com/Woozsh), [Pieter Melis](https://github.com/PieterMelis)
