{ DeveloperHub

PHPTestCase - spoustec testu pro aplikace napsane v PHP
========================================================

Obsahuje:

* PHPunit 3.x
* predpripraveny skeleton tests/ pro okamzite psani testu
* phpunit.xml s doporucenou konfiguraci
* pre-commit hook pro spousteni testu pred commitem
* podporu pro psani selenovych testu
* PHPTestCase instalujte jako composer balicek


Instalace PHPTestCase 
---------------------
* v rootu vaseho projektu si vytvorte soubor composer.json s obsahem:

```json
{
	"name": "Nazev vaseho projektu",
	"description": "ukazkova aplikace",
	"homepage": "http://www.developerhub.cz",
	"authors": [
		{
			"name": "Radim Daniel Panek",
			"homepage": "http://www.developerhub.cz"
		}
	],
	"repositories": {
		"PHPTestCase": { 
			"type": "package", 
			"package": {
				"name": "PHPTestCase",
				"version": "1.0",
				"source": {
					"url": "http://github.com/DeveloperHub/PHPTestCase.git", 
					"type": "git", 
					"reference": "1.0.0"
				}
			}
		}
	},
	"require": {
		"PHPTestCase": "1.0"
	},
	"config": {
		"vendor-dir": "libs"
	} 
}

```

 

Nastaveni
--------
* obsah adresare libs/PHPTestCase/skeleton/ prekopirujte do rootu Vasi aplikace
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
-------------------------------------------
* $ php tests/run.php
	* bez parametru se spusti vsechny testy
	* s parametrem --group unit pouze unit testy
* pokud pouzivate pre-commit, automaticky se spousteji testy pouze ve skupine unit


Spousteni testu pred provedenim prikazu git commit
--------------------------------------------------
* prekopirujte z libs/PHPTestCase/framework/Hooks/pre-commit a pre-commit.php do .git/hooks/
* muzete nsatavit urcitou skupinu testu, ktera se ma spoustet pri commitu
* muzete nastavit cestu k PHP
* git commit 
	* spousti PHPUnit na testech
	* pri uspesnem probehnuti testu se provede git commit
	* pri neuspesnem probehnuti testu se git commit neprovede

Podpora
-------
irc://irc.freenode.net/developerhub
