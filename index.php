<?php

// PinPIE can be installed in two ways.
// Choose appropriate and comment another.

// Option one: composer
// composer install requires to include composer's autoload.php
// uncomment next line and comment PinPIE autoload above
include __DIR__ . '/vendor/autoload.php';

// Option two: standalone install
// standalone install requires to include autoload.php
// comment next line if PinPIE is installed with composer
// include __DIR__ . '/pinpie/autoload.php';


// Adding alias to PinPIE class to allow global access to its methods (optional)
// class_alias('\pinpie\pinpie\PinPIE', 'PinPIE'); // optional, uncomment if you want

// Running PinPIE
\pinpie\pinpie\PinPIE::newInstance();
