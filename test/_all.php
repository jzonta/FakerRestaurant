<?php

try {
	$fakersByLanguage = []; // array to cache faker instances, for faster garbage collection later
	foreach (new DirectoryIterator(__DIR__) as $item) {
		if (!$item->isDot() && $item->getFilename()[0] !== '_') { // all files except "." and those starting with "_"
			require $item->getPathname(); // requiring those files ("food", "beverage", ecc) will then call the printer
		}
	}
} catch (\Exception $e) {
	print PHP_EOL . PHP_EOL . PHP_EOL . 'ERROR OCCURRED';
	throw $e; // stop everything
}


print PHP_EOL . PHP_EOL . PHP_EOL . '====== THE END - ALL GOOD ======';


//die;