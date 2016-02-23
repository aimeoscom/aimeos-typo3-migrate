<?php

if ( ! defined( 'TYPO3_MODE' ) ) {
	die ( 'Access denied.' );
}

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['aimeos']['extDirs']['1_'.$_EXTKEY] =
  'EXT:' . $_EXTKEY . '/Resources/Private/Extensions/';

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['aimeos']['confDirs']['1_'.$_EXTKEY] =
  'EXT:' . $_EXTKEY . '/Resources/Private/Config/';

?>