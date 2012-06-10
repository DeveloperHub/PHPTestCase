Vytvořeno v { DeveloperHub

PHPTestCase
=============
* sada nastroju pro testovani aplikaci v PHP
* doporucuji PHPTestCase pouzit jako submodul

Instalace PHPTestCase
-----------------------
* naklonovani externiho repozitare
	$ git submodule add http://github.com/DeveloperHub/PHPTestCase.git libs/PHPTestCase
* v rootu projektu se vytvori sobor .gitmodules, ktery predstavuje konfiguracni soubor, v nemz je ulozeno mapovani
	mezi adresou URL projektu a lokalnim podadresarem PHPTestCase
* hostujici projekt je nyni povysen na "super projekt"
* pri klonovani je sice ziskan .gitmodules, ale ne jeho data, je potreba je stahnout
	* $ git submodule init = inicializace lokalniho konfiguracniho souboru
	* $ git submodule update = vyzvednuti vsech dat
* ve skeletonu v adresarich unit a selen jsou v souborech readme pripraveny ukazkove tridy testu


Nastaveni
=========
* obsah adresare skeleton/ prekopirujte do rootu Vasi aplikace
* ziskate 
	* phpunit.xml - konfigurace phpunit
	* tests/ 
		* case/ 
			* selen/ - adresar pro selen testy
			* unit/ - adresar pro integracni a jednotkove testy
		* coverage/ - adresar pro coverage report
		* libs/ - adresar pro tridy tretich stran, nebo jejich uzpusobeni, nebo Vase, ktere vyuzijete jen v testech
		* run.php - spoustec NetteTestCase a PHPUnit frameworku

Spousteni integracnich a jednotkovych testu
===========================================
* $ php tests/run.php
	* bez parametru se spusti vsechny testy
	* s parametrem --group unit pouze unit testy
* pokud pouzivate pre-commit, automaticky se spousteji testy pouze ve skupine unit

Spousteni integracnich a unit testu pred commitem
=================================================
* pre-commit prekopirujte z /PHPTestCase/framework/Hooks/pre-commit/ do
  /VasProjekt/.git/hooks/pre-commit
* spustte git commit - spusti se testy a pokud vporadku probehnou, bude se pokracovat v commitovani
* spusteni testu muzete v pre-commit i ovlivnit


Poznamky k nastaveni phpunit.xml
================================
* listeners
	* Application_Test_TestTimeListener - po odkomentovani hlida max. 2s delku behu jednoho testu
