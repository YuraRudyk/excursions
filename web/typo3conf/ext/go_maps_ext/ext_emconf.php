<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "go_maps_ext".
 *
 * Auto generated | Identifier: 50dfcd4f0bb25e4781f4ddcaad20b2f7
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Google Maps API Extbase',
	'description' => 'Google Maps Extension. Simply insert a google map Version 3 inc. jQuery, calculate a route,
										images for markers, style maps, KML, categories, responsive and many more.',
	'category' => 'plugin',
	'version' => '2.2.0',
	'state' => 'stable',
	'uploadfolder' => true,
	'clearcacheonload' => true,
	'author' => 'Marc Hirdes',
	'author_email' => 'marc_hirdes@gmx.de',
	'author_company' => 'clickstorm GmbH',
	'constraints' => 
	array (
		'depends' => 
		array (
			'typo3' => '7.6.0 - 8.9.99',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
	'createDirs' => NULL,
	'_md5_values_when_last_written' => 'a:85:{s:17:"ext_localconf.php";s:4:"d959";s:9:"README.md";s:4:"d747";s:41:"Resources/Private/Templates/Map/Show.html";s:4:"204c";s:38:"Resources/Private/Layouts/Default.html";s:4:"b55d";s:82:"Resources/Private/Language/pl.locallang_csh_tx_gomapsext_domain_model_category.xlf";s:4:"bd55";s:46:"Resources/Private/Language/pl.locallang_db.xlf";s:4:"9790";s:46:"Resources/Private/Language/de.locallang_db.xlf";s:4:"6c9e";s:43:"Resources/Private/Language/de.locallang.xlf";s:4:"8f04";s:81:"Resources/Private/Language/de.locallang_csh_tx_gomapsext_domain_model_address.xlf";s:4:"9518";s:40:"Resources/Private/Language/locallang.xlf";s:4:"b6a5";s:77:"Resources/Private/Language/de.locallang_csh_tx_gomapsext_domain_model_map.xlf";s:4:"84e3";s:77:"Resources/Private/Language/pl.locallang_csh_tx_gomapsext_domain_model_map.xlf";s:4:"ee55";s:43:"Resources/Private/Language/locallang_db.xlf";s:4:"50e2";s:82:"Resources/Private/Language/de.locallang_csh_tx_gomapsext_domain_model_category.xlf";s:4:"f9d7";s:78:"Resources/Private/Language/locallang_csh_tx_gomapsext_domain_model_address.xlf";s:4:"1a6c";s:43:"Resources/Private/Language/pl.locallang.xlf";s:4:"8194";s:74:"Resources/Private/Language/locallang_csh_tx_gomapsext_domain_model_map.xlf";s:4:"4b53";s:81:"Resources/Private/Language/pl.locallang_csh_tx_gomapsext_domain_model_address.xlf";s:4:"a525";s:79:"Resources/Private/Language/locallang_csh_tx_gomapsext_domain_model_category.xlf";s:4:"882d";s:45:"Resources/Private/Partials/Map/Addresses.html";s:4:"3ebc";s:46:"Resources/Private/Partials/Map/Categories.html";s:4:"84f7";s:42:"Resources/Private/Partials/Map/Assign.html";s:4:"a321";s:40:"Resources/Private/Partials/Map/Form.html";s:4:"f2d4";s:51:"Resources/Public/Scripts/jquery-polyline-example.js";s:4:"c640";s:38:"Resources/Public/Scripts/jquery.min.js";s:4:"5185";s:52:"Resources/Public/Scripts/markerclusterer_compiled.js";s:4:"8c4a";s:44:"Resources/Public/Scripts/jquery.gomapsext.js";s:4:"21c4";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:56:"Resources/Public/Icons/tx_gomapsext_domain_model_map.png";s:4:"eca0";s:60:"Resources/Public/Icons/tx_gomapsext_domain_model_address.png";s:4:"92b0";s:12:"ext_icon.gif";s:4:"2826";s:39:"Classes/Evaluation/Double6Evaluator.php";s:4:"31df";s:32:"Classes/Domain/Model/Address.php";s:4:"500e";s:28:"Classes/Domain/Model/Map.php";s:4:"cc0f";s:33:"Classes/Domain/Model/Category.php";s:4:"53fb";s:43:"Classes/Domain/Repository/MapRepository.php";s:4:"74cf";s:48:"Classes/Domain/Repository/CategoryRepository.php";s:4:"701b";s:47:"Classes/Domain/Repository/AddressRepository.php";s:4:"33a2";s:40:"Classes/ViewHelpers/EscapeViewHelper.php";s:4:"befa";s:40:"Classes/ViewHelpers/ScriptViewHelper.php";s:4:"2067";s:48:"Classes/ViewHelpers/HideInFrontendViewHelper.php";s:4:"ecdd";s:35:"Classes/Utility/LocationUtility.php";s:4:"c333";s:36:"Classes/Controller/MapController.php";s:4:"16cb";s:14:"ext_tables.sql";s:4:"cf88";s:13:"composer.json";s:4:"1605";s:7:"LICENSE";s:4:"a8b4";s:14:"ext_tables.php";s:4:"f6c5";s:12:"ext_icon.png";s:4:"535f";s:21:"ext_conf_template.txt";s:4:"23a2";s:34:"Configuration/TypoScript/setup.txt";s:4:"f6a4";s:38:"Configuration/TypoScript/constants.txt";s:4:"4ce2";s:41:"Configuration/FlexForms/flexform_show.xml";s:4:"e6dd";s:51:"Configuration/TCA/tx_gomapsext_domain_model_map.php";s:4:"d502";s:55:"Configuration/TCA/tx_gomapsext_domain_model_address.php";s:4:"ff37";s:23:"Documentation/Index.rst";s:4:"8906";s:32:"Documentation/Tutorial/Index.rst";s:4:"3f84";s:33:"Documentation/Tutorial/Images.txt";s:4:"f99e";s:26:"Documentation/Includes.txt";s:4:"2768";s:37:"Documentation/Administrator/Index.rst";s:4:"9dc6";s:36:"Documentation/Introduction/Index.rst";s:4:"fee3";s:37:"Documentation/Introduction/Images.txt";s:4:"57c5";s:32:"Documentation/ToDoList/Index.rst";s:4:"a3cc";s:46:"Documentation/Images/manual_html_m6bd1d8f9.png";s:4:"0a5f";s:46:"Documentation/Images/manual_html_m3443a6fa.png";s:4:"131d";s:46:"Documentation/Images/manual_html_m5ff9d64e.png";s:4:"c775";s:45:"Documentation/Images/manual_html_22ebf792.gif";s:4:"1563";s:46:"Documentation/Images/manual_html_m738beaec.png";s:4:"057d";s:45:"Documentation/Images/manual_html_1c4bdccf.png";s:4:"3757";s:45:"Documentation/Images/manual_html_3c9c2593.png";s:4:"0eb5";s:44:"Documentation/Images/manual_html_30e38af.png";s:4:"2924";s:45:"Documentation/Images/manual_html_63b0bfc9.png";s:4:"46b0";s:45:"Documentation/Images/manual_html_7a8fd584.png";s:4:"65ea";s:45:"Documentation/Images/manual_html_66d12e78.png";s:4:"f7fa";s:46:"Documentation/Images/manual_html_m56807251.png";s:4:"ab81";s:46:"Documentation/Images/manual_html_m27b58b15.png";s:4:"9e48";s:46:"Documentation/Images/manual_html_m49f72a2b.png";s:4:"89c8";s:45:"Documentation/Images/manual_html_20668ace.jpg";s:4:"f3bf";s:37:"Documentation/KnownProblems/Index.rst";s:4:"2b6b";s:28:"Documentation/User/Index.rst";s:4:"dcdb";s:29:"Documentation/User/Images.txt";s:4:"a578";s:37:"Documentation/Configuration/Index.rst";s:4:"a862";s:48:"Documentation/Configuration/QuickStart/Index.rst";s:4:"482d";s:47:"Documentation/Configuration/Reference/Index.rst";s:4:"b506";s:33:"Documentation/Changelog/Index.rst";s:4:"9646";s:34:"Documentation/Changelog/Images.txt";s:4:"ed16";}',
);

?>