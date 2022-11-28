<?php

declare(strict_types=1);

define('BASEDIR', realpath(__DIR__ . '/..') . DIRECTORY_SEPARATOR);
define('COREDIR', BASEDIR . 'Core' . DIRECTORY_SEPARATOR);

require(COREDIR . 'Arvenix.php');

Arvenix\Bootstrapper::run();