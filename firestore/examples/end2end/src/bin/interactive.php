<?php
namespace FireStore;

/**
 * This application demonstrated how to use the core firestore api calls to access, create or update
 * information in the Firebase NoSQL database.
 *
 * It is a rewrite in PHP of the python application provided by Geoff Scarvell
 *
 */

/*
 * The code below registers and uses the composer autoloader
 */
require_once __DIR__.'/../vendor/autoload.php';

$commands = new Commands();

$option = '';

while(true) {
	$commands->usage();
	$option = readline("> Enter an Option ('quit' to exit): ");
	if ($option == 'quit' || $option == 'q') {
	    break;
	}
	try{
		$commands->run($option);
	}
	catch (\Google\ApiCore\ApiException $ex){
		echo "\n*******************************\n";
		echo "   Got exception: ".$ex->getMessage()."\n";
		echo "\n*******************************\n";
		readline("Press a key to continue");
	}
	echo "\n====================================\n";
}