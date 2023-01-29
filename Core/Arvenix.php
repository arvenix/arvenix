<?php

declare(strict_types=1);

namespace Arvenix;

const APP_VERSION = '1.0.0';

class Bootstrapper
{
  private static function loadControllers()
  {
    $controllerDir = realpath(APPDIR . 'Controller') . DIRECTORY_SEPARATOR;

    if (is_dir($controllerDir)) {
      $files = scandir($controllerDir);

      foreach ($files as $file) {
        if ($file == '.' || $file == '..') continue;

        if (is_file($controllerDir . $file)) {
          require($controllerDir . $file);
        }
      }
    }
  }

  private static function loadCores()
  {
    if (is_dir(COREDIR)) {
      $files = scandir(COREDIR);

      foreach ($files as $file) {
        if ($file == '.' || $file == '..' || $file == pathinfo(__FILE__, PATHINFO_BASENAME)) {
          continue;
        }

        if (is_file(COREDIR . $file)) {
          require(COREDIR . $file);
        }
      }
    }

    return false;
  }

  private static function loadVendor()
  {
    if (is_file(BASEDIR . 'vendor/autoload.php')) {
      require(BASEDIR . 'vendor/autoload.php');
    }
  }

  public static function run()
  {
    if (!defined('APPNAME')) {
      die('<b>APPNAME is not defined.</b>');
    }

    if (!defined('APPDIR')) {
      die('<b>APPDIR is not defined.</b>');
    }

    if (!defined('BASEDIR')) {
      die('<b>BASEDIR is not defined.</b>');
    }

    if (!defined('COREDIR')) {
      die('<b>COREDIR is not defined.</b>');
    }

    self::loadVendor();

    if (!self::loadCores()) {
      echo getLastError();
    }

    if (!self::loadControllers()) {
      echo getLastError();
    }

    $app = new ('\App\\' . APPNAME . '\Controller\Main')();
    $app->index();
  }

  public static function runConsole()
  {
    global $argv;

    if (!defined('APPDIR')) {
      die('<b>APPDIR is not defined.</b>');
    }

    if (!defined('BASEDIR')) {
      die('<b>BASEDIR is not defined.</b>');
    }

    if (!defined('COREDIR')) {
      die('<b>COREDIR is not defined.</b>');
    }

    array_shift($argv);

    if (!$argv) {
      self::consoleShowHelp();
    }
  }

  public static function runSystem()
  {
    if (!defined('APPDIR')) {
      die('<b>APPDIR is not defined.</b>');
    }

    if (!defined('BASEDIR')) {
      die('<b>BASEDIR is not defined.</b>');
    }

    if (!defined('COREDIR')) {
      die('<b>COREDIR is not defined.</b>');
    }

    self::loadVendor();

    if (!self::loadCores()) {
      echo getLastError();
    }

    if (!self::loadControllers()) {
      echo getLastError();
    }

    $app = new Controller\Main();
    $app->index();
  }

  public static function consoleShowHelp()
  {
    echo 'Arvenix PHP v' . APP_VERSION . "\r\n\r\n";
    echo 'Help:';
  }
}
