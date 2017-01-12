<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "static_info_tables".
 *
 * Auto generated | Identifier: 3cd1915787001035a38df64d0104f3e8
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Static Info Tables',
	'description' => 'Data and API for countries, languages and currencies.',
	'category' => 'misc',
	'version' => '6.3.10',
	'state' => 'stable',
	'uploadfolder' => false,
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'author' => 'Stanislas Rolland/René Fritz',
	'author_email' => 'typo3@sjbr.ca',
	'author_company' => 'SJBR',
	'constraints' => 
	array (
		'depends' => 
		array (
			'typo3' => '6.2.0-7.6.99',
			'php' => '5.3.7-0.0.0',
		),
		'conflicts' => 
		array (
			'sr_static_info' => '0.0.0-99.99.99',
			'cc_infotablesmgm' => '0.0.0-99.99.99',
			'uncache' => '0.0.0-99.99.99',
		),
		'suggests' => 
		array (
		),
	),
	'clearcacheonload' => false,
	'_md5_values_when_last_written' => 'a:162:{s:9:"ChangeLog";s:4:"29e8";s:20:"class.ext_update.php";s:4:"054f";s:38:"class.tx_staticinfotables_encoding.php";s:4:"73bb";s:8:"Classes/";s:4:"d41d";s:14:"Classes/Cache/";s:4:"d41d";s:35:"Classes/Cache/CachedClassLoader.php";s:4:"ebc1";s:35:"Classes/Cache/ClassCacheManager.php";s:4:"416f";s:22:"Classes/Configuration/";s:4:"d41d";s:33:"Classes/Configuration/TypoScript/";s:4:"d41d";s:56:"Classes/Configuration/TypoScript/ConfigurationHelper.php";s:4:"c2e3";s:19:"Classes/Controller/";s:4:"d41d";s:40:"Classes/Controller/ManagerController.php";s:4:"f3b9";s:17:"Classes/Database/";s:4:"d41d";s:30:"Classes/Database/SqlParser.php";s:4:"9593";s:15:"Classes/Domain/";s:4:"d41d";s:21:"Classes/Domain/Model/";s:4:"d41d";s:39:"Classes/Domain/Model/AbstractEntity.php";s:4:"cc5c";s:32:"Classes/Domain/Model/Country.php";s:4:"9599";s:36:"Classes/Domain/Model/CountryZone.php";s:4:"b78c";s:33:"Classes/Domain/Model/Currency.php";s:4:"444b";s:33:"Classes/Domain/Model/Language.php";s:4:"b9dc";s:37:"Classes/Domain/Model/LanguagePack.php";s:4:"43c7";s:34:"Classes/Domain/Model/Territory.php";s:4:"1cf3";s:26:"Classes/Domain/Repository/";s:4:"d41d";s:54:"Classes/Domain/Repository/AbstractEntityRepository.php";s:4:"b7ac";s:47:"Classes/Domain/Repository/CountryRepository.php";s:4:"fb7a";s:51:"Classes/Domain/Repository/CountryZoneRepository.php";s:4:"6826";s:48:"Classes/Domain/Repository/CurrencyRepository.php";s:4:"0234";s:52:"Classes/Domain/Repository/LanguagePackRepository.php";s:4:"355a";s:48:"Classes/Domain/Repository/LanguageRepository.php";s:4:"85f9";s:49:"Classes/Domain/Repository/TerritoryRepository.php";s:4:"1a81";s:13:"Classes/Hook/";s:4:"d41d";s:21:"Classes/Hook/Backend/";s:4:"d41d";s:26:"Classes/Hook/Backend/Form/";s:4:"d41d";s:52:"Classes/Hook/Backend/Form/ElementRenderingHelper.php";s:4:"423a";s:43:"Classes/Hook/Backend/Form/FormDataProvider/";s:4:"d41d";s:64:"Classes/Hook/Backend/Form/FormDataProvider/TcaLabelProcessor.php";s:4:"36f3";s:70:"Classes/Hook/Backend/Form/FormDataProvider/TcaSelectItemsProcessor.php";s:4:"4832";s:45:"Classes/Hook/Backend/Form/SuggestReceiver.php";s:4:"75d2";s:33:"Classes/Hook/Backend/Form/Wizard/";s:4:"d41d";s:52:"Classes/Hook/Backend/Form/Wizard/SuggestReceiver.php";s:4:"ca7b";s:18:"Classes/Hook/Core/";s:4:"d41d";s:31:"Classes/Hook/Core/DataHandling/";s:4:"d41d";s:49:"Classes/Hook/Core/DataHandling/ProcessDataMap.php";s:4:"1ea1";s:21:"Classes/PiBaseApi.php";s:4:"1957";s:13:"Classes/Slot/";s:4:"d41d";s:30:"Classes/Slot/Extensionmanager/";s:4:"d41d";s:55:"Classes/Slot/Extensionmanager/AfterExtensionInstall.php";s:4:"0872";s:16:"Classes/Utility/";s:4:"d41d";s:41:"Classes/Utility/DatabaseUpdateUtility.php";s:4:"e2c1";s:35:"Classes/Utility/DatabaseUtility.php";s:4:"4947";s:38:"Classes/Utility/HtmlElementUtility.php";s:4:"bfbb";s:33:"Classes/Utility/LocaleUtility.php";s:4:"b8e8";s:39:"Classes/Utility/LocalizationUtility.php";s:4:"ce22";s:32:"Classes/Utility/ModelUtility.php";s:4:"bff1";s:30:"Classes/Utility/TcaUtility.php";s:4:"a25a";s:20:"Classes/ViewHelpers/";s:4:"d41d";s:25:"Classes/ViewHelpers/Form/";s:4:"d41d";s:45:"Classes/ViewHelpers/Form/SelectViewHelper.php";s:4:"42fa";s:13:"composer.json";s:4:"69c4";s:14:"Configuration/";s:4:"d41d";s:18:"Configuration/TCA/";s:4:"d41d";s:28:"Configuration/TCA/Overrides/";s:4:"d41d";s:43:"Configuration/TCA/Overrides/StaticFiles.php";s:4:"74ad";s:48:"Configuration/TCA/Overrides/static_countries.php";s:4:"e535";s:52:"Configuration/TCA/Overrides/static_country_zones.php";s:4:"045a";s:49:"Configuration/TCA/Overrides/static_currencies.php";s:4:"029c";s:48:"Configuration/TCA/Overrides/static_languages.php";s:4:"97b6";s:50:"Configuration/TCA/Overrides/static_territories.php";s:4:"3d00";s:44:"Configuration/TCA/Overrides/sys_language.php";s:4:"78e1";s:54:"Configuration/TCA/Overrides/tx_rtehtmlarea_acronym.php";s:4:"5720";s:38:"Configuration/TCA/static_countries.php";s:4:"99d1";s:42:"Configuration/TCA/static_country_zones.php";s:4:"e080";s:39:"Configuration/TCA/static_currencies.php";s:4:"3555";s:38:"Configuration/TCA/static_languages.php";s:4:"ac37";s:40:"Configuration/TCA/static_territories.php";s:4:"ed05";s:25:"Configuration/TypoScript/";s:4:"d41d";s:33:"Configuration/TypoScript/Extbase/";s:4:"d41d";s:42:"Configuration/TypoScript/Extbase/setup.txt";s:4:"bacf";s:33:"Configuration/TypoScript/Manager/";s:4:"d41d";s:42:"Configuration/TypoScript/Manager/setup.txt";s:4:"4351";s:32:"Configuration/TypoScript/Static/";s:4:"d41d";s:45:"Configuration/TypoScript/Static/constants.txt";s:4:"e312";s:41:"Configuration/TypoScript/Static/setup.txt";s:4:"8e2d";s:4:"doc/";s:4:"d41d";s:14:"doc/manual.sxw";s:4:"c72b";s:16:"ext_autoload.php";s:4:"4310";s:21:"ext_conf_template.txt";s:4:"346d";s:12:"ext_icon.gif";s:4:"639f";s:17:"ext_localconf.php";s:4:"8d62";s:14:"ext_tables.php";s:4:"a3f3";s:14:"ext_tables.sql";s:4:"04b0";s:25:"ext_tables_static+adt.sql";s:4:"3a77";s:4:"pi1/";s:4:"d41d";s:37:"pi1/class.tx_staticinfotables_pi1.php";s:4:"94f0";s:10:"Resources/";s:4:"d41d";s:18:"Resources/Private/";s:4:"d41d";s:27:"Resources/Private/.htaccess";s:4:"5cc8";s:27:"Resources/Private/Language/";s:4:"d41d";s:39:"Resources/Private/LanguagePackTemplate/";s:4:"d41d";s:60:"Resources/Private/LanguagePackTemplate/class.ext_update.code";s:4:"883c";s:47:"Resources/Private/LanguagePackTemplate/Classes/";s:4:"d41d";s:54:"Resources/Private/LanguagePackTemplate/Classes/Domain/";s:4:"d41d";s:60:"Resources/Private/LanguagePackTemplate/Classes/Domain/Model/";s:4:"d41d";s:72:"Resources/Private/LanguagePackTemplate/Classes/Domain/Model/Country.code";s:4:"dc04";s:76:"Resources/Private/LanguagePackTemplate/Classes/Domain/Model/CountryZone.code";s:4:"90b6";s:73:"Resources/Private/LanguagePackTemplate/Classes/Domain/Model/Currency.code";s:4:"a805";s:73:"Resources/Private/LanguagePackTemplate/Classes/Domain/Model/Language.code";s:4:"8eee";s:74:"Resources/Private/LanguagePackTemplate/Classes/Domain/Model/Territory.code";s:4:"d49d";s:52:"Resources/Private/LanguagePackTemplate/composer.json";s:4:"a8c0";s:53:"Resources/Private/LanguagePackTemplate/Configuration/";s:4:"d41d";s:74:"Resources/Private/LanguagePackTemplate/Configuration/DomainModelExtension/";s:4:"d41d";s:94:"Resources/Private/LanguagePackTemplate/Configuration/DomainModelExtension/StaticInfoTables.txt";s:4:"b17a";s:57:"Resources/Private/LanguagePackTemplate/Configuration/TCA/";s:4:"d41d";s:67:"Resources/Private/LanguagePackTemplate/Configuration/TCA/Overrides/";s:4:"d41d";s:87:"Resources/Private/LanguagePackTemplate/Configuration/TCA/Overrides/static_countries.php";s:4:"1eb5";s:91:"Resources/Private/LanguagePackTemplate/Configuration/TCA/Overrides/static_country_zones.php";s:4:"c7f1";s:88:"Resources/Private/LanguagePackTemplate/Configuration/TCA/Overrides/static_currencies.php";s:4:"af37";s:87:"Resources/Private/LanguagePackTemplate/Configuration/TCA/Overrides/static_languages.php";s:4:"0911";s:89:"Resources/Private/LanguagePackTemplate/Configuration/TCA/Overrides/static_territories.php";s:4:"cd25";s:64:"Resources/Private/LanguagePackTemplate/Configuration/TypoScript/";s:4:"d41d";s:72:"Resources/Private/LanguagePackTemplate/Configuration/TypoScript/Extbase/";s:4:"d41d";s:81:"Resources/Private/LanguagePackTemplate/Configuration/TypoScript/Extbase/setup.txt";s:4:"0da0";s:53:"Resources/Private/LanguagePackTemplate/ext_emconf.php";s:4:"a634";s:51:"Resources/Private/LanguagePackTemplate/ext_icon.gif";s:4:"639f";s:56:"Resources/Private/LanguagePackTemplate/ext_localconf.php";s:4:"3c90";s:53:"Resources/Private/LanguagePackTemplate/ext_tables.sql";s:4:"2126";s:64:"Resources/Private/LanguagePackTemplate/ext_tables_static+adt.sql";s:4:"5cbf";s:49:"Resources/Private/LanguagePackTemplate/Resources/";s:4:"d41d";s:57:"Resources/Private/LanguagePackTemplate/Resources/Private/";s:4:"d41d";s:66:"Resources/Private/LanguagePackTemplate/Resources/Private/.htaccess";s:4:"5cc8";s:66:"Resources/Private/LanguagePackTemplate/Resources/Private/Language/";s:4:"d41d";s:82:"Resources/Private/LanguagePackTemplate/Resources/Private/Language/locallang_db.xlf";s:4:"3395";s:40:"Resources/Private/Language/locallang.xlf";s:4:"5eb3";s:43:"Resources/Private/Language/locallang_db.xlf";s:4:"8c69";s:44:"Resources/Private/Language/locallang_mod.xlf";s:4:"a175";s:26:"Resources/Private/Layouts/";s:4:"d41d";s:38:"Resources/Private/Layouts/Default.html";s:4:"a0f4";s:27:"Resources/Private/Partials/";s:4:"d41d";s:42:"Resources/Private/Partials/FormErrors.html";s:4:"6011";s:28:"Resources/Private/Templates/";s:4:"d41d";s:36:"Resources/Private/Templates/Manager/";s:4:"d41d";s:52:"Resources/Private/Templates/Manager/Information.html";s:4:"6cb7";s:56:"Resources/Private/Templates/Manager/NewLanguagePack.html";s:4:"d106";s:49:"Resources/Private/Templates/Manager/TestForm.html";s:4:"d3c8";s:55:"Resources/Private/Templates/Manager/TestFormResult.html";s:4:"6e89";s:17:"Resources/Public/";s:4:"d41d";s:24:"Resources/Public/Images/";s:4:"d41d";s:30:"Resources/Public/Images/Icons/";s:4:"d41d";s:57:"Resources/Public/Images/Icons/StaticInfoTablesManager.png";s:4:"6cd3";s:50:"Resources/Public/Images/Icons/static_countries.svg";s:4:"0933";s:54:"Resources/Public/Images/Icons/static_country_zones.svg";s:4:"0933";s:51:"Resources/Public/Images/Icons/static_currencies.svg";s:4:"eb17";s:50:"Resources/Public/Images/Icons/static_languages.svg";s:4:"52df";s:52:"Resources/Public/Images/Icons/static_territories.svg";s:4:"6b11";s:29:"Resources/Public/StyleSheets/";s:4:"d41d";s:40:"Resources/Public/StyleSheets/manager.css";s:4:"8f9e";s:6:"Tests/";s:4:"d41d";s:11:"Tests/Unit/";s:4:"d41d";s:18:"Tests/Unit/Domain/";s:4:"d41d";s:29:"Tests/Unit/Domain/Repository/";s:4:"d41d";s:61:"Tests/Unit/Domain/Repository/AbstractEntityRepositoryTest.php";s:4:"a056";}',
);

?>