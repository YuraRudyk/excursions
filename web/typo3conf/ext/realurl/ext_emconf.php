<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "realurl".
 *
 * Auto generated | Identifier: 16da3368ea07c91ea8710c3d5aa57770
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Speaking URLs for TYPO3',
	'description' => 'Makes TYPO3 URLs search engine friendly. Donations are welcome to dmitry.dulepov@gmail.com. They help to support the extension!',
	'category' => 'services',
	'version' => '2.1.5',
	'state' => 'stable',
	'uploadfolder' => true,
	'createDirs' => '',
	'clearcacheonload' => true,
	'author' => 'Dmitry Dulepov',
	'author_email' => 'dmitry.dulepov@gmail.com',
	'author_company' => '',
	'constraints' => 
	array (
		'depends' => 
		array (
			'typo3' => '6.2.0-8.4.999',
			'php' => '5.4.0-7.0.999',
			'scheduler' => '6.2.0-8.4.999',
		),
		'conflicts' => 
		array (
			'cooluri' => '',
			'simulatestatic' => '',
		),
		'suggests' => 
		array (
		),
	),
	'_md5_values_when_last_written' => 'a:61:{s:9:"README.md";s:4:"3620";s:20:"class.ext_update.php";s:4:"a757";s:13:"composer.json";s:4:"8c55";s:21:"ext_conf_template.txt";s:4:"ad76";s:12:"ext_icon.gif";s:4:"fec8";s:17:"ext_localconf.php";s:4:"aaf1";s:14:"ext_tables.php";s:4:"8bec";s:14:"ext_tables.sql";s:4:"2d5b";s:24:"ext_typoscript_setup.txt";s:4:"56f7";s:29:"Classes/EncodeDecoderBase.php";s:4:"2d5d";s:19:"Classes/Utility.php";s:4:"17ec";s:30:"Classes/Cache/CacheFactory.php";s:4:"74cc";s:32:"Classes/Cache/CacheInterface.php";s:4:"a027";s:31:"Classes/Cache/DatabaseCache.php";s:4:"f750";s:32:"Classes/Cache/PathCacheEntry.php";s:4:"319d";s:31:"Classes/Cache/UrlCacheEntry.php";s:4:"b54e";s:47:"Classes/Configuration/AutomaticConfigurator.php";s:4:"eb0d";s:45:"Classes/Configuration/ConfigurationReader.php";s:4:"131b";s:40:"Classes/Controller/AliasesController.php";s:4:"629f";s:46:"Classes/Controller/BackendModuleController.php";s:4:"230f";s:41:"Classes/Controller/OverviewController.php";s:4:"1c79";s:42:"Classes/Controller/PathCacheController.php";s:4:"6ad4";s:41:"Classes/Controller/UrlCacheController.php";s:4:"1031";s:30:"Classes/Decoder/UrlDecoder.php";s:4:"a206";s:30:"Classes/Domain/Model/Alias.php";s:4:"8344";s:39:"Classes/Domain/Model/PathCacheEntry.php";s:4:"0ad6";s:38:"Classes/Domain/Model/UrlCacheEntry.php";s:4:"37b7";s:48:"Classes/Domain/Repository/AbstractRepository.php";s:4:"c499";s:45:"Classes/Domain/Repository/AliasRepository.php";s:4:"f66a";s:54:"Classes/Domain/Repository/PathCacheEntryRepository.php";s:4:"071a";s:53:"Classes/Domain/Repository/UrlCacheEntryRepository.php";s:4:"a792";s:30:"Classes/Encoder/UrlEncoder.php";s:4:"8295";s:41:"Classes/Evaluator/SegmentFieldCleaner.php";s:4:"0689";s:29:"Classes/Hooks/DataHandler.php";s:4:"716f";s:48:"Classes/ViewHelpers/LanguageFromIdViewHelper.php";s:4:"9e93";s:45:"Classes/ViewHelpers/SetVariableViewHelper.php";s:4:"389a";s:49:"Classes/ViewHelpers/TranslateToJsonViewHelper.php";s:4:"9ed5";s:26:"Configuration/TSConfig.txt";s:4:"f517";s:41:"Configuration/TCA/tx_realurl_pathdata.php";s:4:"f0b0";s:42:"Configuration/TCA/tx_realurl_uniqalias.php";s:4:"5b5c";s:40:"Configuration/TCA/tx_realurl_urldata.php";s:4:"3d10";s:37:"Configuration/TCA/Overrides/pages.php";s:4:"632a";s:54:"Configuration/TCA/Overrides/pages_language_overlay.php";s:4:"9bc1";s:40:"Resources/Private/Language/locallang.xlf";s:4:"4d4d";s:43:"Resources/Private/Language/locallang_db.xlf";s:4:"3e3e";s:38:"Resources/Private/Layouts/Backend.html";s:4:"7731";s:45:"Resources/Private/Templates/Aliases/Edit.html";s:4:"9d0c";s:46:"Resources/Private/Templates/Aliases/Index.html";s:4:"ff6a";s:47:"Resources/Private/Templates/Overview/Index.html";s:4:"0ebb";s:48:"Resources/Private/Templates/PathCache/Index.html";s:4:"e976";s:47:"Resources/Private/Templates/UrlCache/Index.html";s:4:"dd7f";s:31:"Resources/Public/realurl_be.css";s:4:"9aa1";s:30:"Resources/Public/realurl_be.js";s:4:"a488";s:36:"Resources/Public/Icons/Extension.svg";s:4:"187b";s:33:"Resources/Public/Icons/Module.svg";s:4:"292d";s:34:"Resources/Public/Icons/Module2.svg";s:4:"974b";s:34:"Resources/Public/Icons/Module3.svg";s:4:"5a1e";s:26:"Tests/Fixtures/realurl.xml";s:4:"a342";s:32:"Tests/Functional/UtilityTest.php";s:4:"91ed";s:43:"Tests/Functional/Encoder/UrlEncoderTest.php";s:4:"9ad6";s:26:"Tests/Unit/RealurlTest.php";s:4:"c658";}',
);

?>