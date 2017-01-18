<?php
if (!defined('TYPO3_MODE')) {
    exit('Access denied.');
}

$TYPO3_CONF_VARS['SYS']['displayErrors'] = '0';
$TYPO3_CONF_VARS['SYS']['devIPmask'] = '';
$TYPO3_CONF_VARS['SYS']['errorHandler'] = '';
$TYPO3_CONF_VARS['SYS']['debugExceptionHandler'] = '';
$TYPO3_CONF_VARS['SYS']['productionExceptionHandler'] = '';
$TYPO3_CONF_VARS['SYS']['systemLog'] = '';
$TYPO3_CONF_VARS['SYS']['enable_errorDLOG'] = '0';
$TYPO3_CONF_VARS['SYS']['enable_exceptionDLOG'] = '0';
$TYPO3_CONF_VARS['SYS']['enableDeprecationLog'] = '0';

