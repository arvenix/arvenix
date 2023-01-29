<?php

declare(strict_types=1);

define('BASEDIR', realpath(__DIR__ . '/../..') . DIRECTORY_SEPARATOR);
define('APPDIR', realpath(BASEDIR . 'App') . DIRECTORY_SEPARATOR);
define('COREDIR', BASEDIR);

require(COREDIR . 'Arvenix.php');

Arvenix\Bootstrapper::runSystem();