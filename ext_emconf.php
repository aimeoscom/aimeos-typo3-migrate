<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Aimeos shop data migration',
	'description' => 'Migrates the data from other shop systems into the Aimeos tables. Currently supported are: TYPO3 commerce',
	'category' => 'be',
	'author' => 'Aimeos GmbH',
	'author_email' => 'info@aimeos.com',
	'author_company' => 'Aimeos GmbH',
	'state' => 'beta',
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'uploadfolder' => 0,
	'version' => '16.2.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.0-7.99.99',
			'aimeos' => '16.1.0-16.99.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);