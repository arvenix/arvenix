<?php
/**
 * This is the Arvenix index.php. Very simple right?
 */
define('APPNAME', 'Welcome');
define('BASEDIR', realpath(__DIR__ . '/../../..') . DIRECTORY_SEPARATOR);
define('APPDIR', realpath(BASEDIR . 'App/' . APPNAME) . DIRECTORY_SEPARATOR);
define('COREDIR', BASEDIR . 'Core' . DIRECTORY_SEPARATOR);

require(COREDIR . 'Arvenix.php');

Arvenix\Bootstrapper::run();