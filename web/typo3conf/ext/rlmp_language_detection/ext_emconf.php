<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "rlmp_language_detection".
 *
 * Auto generated | Identifier: dffbb7464191c5166e39792ab52fd0ac
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Language Detection',
	'description' => 'This plugin detects the visitor\'s preferred language and sets the local configuration for TYPO3\'s language engine accordingly. Both, one-tree and multiple tree concepts, are supported. It can also select from a list of similar languages if the user\'s preferred language does not exist.',
	'category' => 'misc',
	'version' => '7.0.8',
	'state' => 'stable',
	'uploadfolder' => false,
	'clearcacheonload' => false,
	'author' => 'Thomas Löffler',
	'author_email' => 'thomas.loeffler@typo3.org',
	'author_company' => '',
	'constraints' => 
	array (
		'depends' => 
		array (
			'php' => '5.3.0',
			'typo3' => '6.2.0-7.99.99',
			'static_info_tables' => '6.3.0',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
	'createDirs' => NULL,
	'_md5_values_when_last_written' => 'a:39:{s:8:"Classes/";s:4:"d41d";s:29:"Classes/LanguageDetection.php";s:4:"fbaf";s:14:"Configuration/";s:4:"d41d";s:18:"Configuration/TCA/";s:4:"d41d";s:28:"Configuration/TCA/Overrides/";s:4:"d41d";s:44:"Configuration/TCA/Overrides/sys_template.php";s:4:"6489";s:25:"Configuration/TypoScript/";s:4:"d41d";s:38:"Configuration/TypoScript/constants.txt";s:4:"d41d";s:34:"Configuration/TypoScript/setup.txt";s:4:"5908";s:14:"Documentation/";s:4:"d41d";s:24:"Documentation/.gitignore";s:4:"8e3b";s:28:"Documentation/Configuration/";s:4:"d41d";s:65:"Documentation/Configuration/DefiningALanguageParameterOtherThanL/";s:4:"d41d";s:74:"Documentation/Configuration/DefiningALanguageParameterOtherThanL/Index.rst";s:4:"cfca";s:55:"Documentation/Configuration/DefiningTheDefaultLanguage/";s:4:"d41d";s:64:"Documentation/Configuration/DefiningTheDefaultLanguage/Index.rst";s:4:"c0bd";s:37:"Documentation/Configuration/Index.rst";s:4:"7a02";s:41:"Documentation/Configuration/Installation/";s:4:"d41d";s:50:"Documentation/Configuration/Installation/Index.rst";s:4:"62b4";s:60:"Documentation/Configuration/One-treeVsMultiple-treesConcept/";s:4:"d41d";s:69:"Documentation/Configuration/One-treeVsMultiple-treesConcept/Index.rst";s:4:"4927";s:61:"Documentation/Configuration/UsingTheMultiplePageTreesConcept/";s:4:"d41d";s:70:"Documentation/Configuration/UsingTheMultiplePageTreesConcept/Index.rst";s:4:"99bc";s:24:"Documentation/Developer/";s:4:"d41d";s:33:"Documentation/Developer/Index.rst";s:4:"ec10";s:18:"Documentation/Faq/";s:4:"d41d";s:27:"Documentation/Faq/Index.rst";s:4:"d32d";s:23:"Documentation/Index.rst";s:4:"1de1";s:27:"Documentation/Introduction/";s:4:"d41d";s:36:"Documentation/Introduction/Index.rst";s:4:"7d6e";s:28:"Documentation/KnownProblems/";s:4:"d41d";s:37:"Documentation/KnownProblems/Index.rst";s:4:"dded";s:26:"Documentation/Settings.yml";s:4:"5408";s:34:"Documentation/TypoScriptReference/";s:4:"d41d";s:43:"Documentation/TypoScriptReference/Index.rst";s:4:"e9a7";s:7:"LICENSE";s:4:"783b";s:9:"README.md";s:4:"04a4";s:13:"composer.json";s:4:"07c2";s:12:"ext_icon.gif";s:4:"184c";}',
);

?>