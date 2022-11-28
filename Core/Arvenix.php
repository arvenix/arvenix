<?php

declare(strict_types=1);

namespace Arvenix;

class Bootstrapper
{
  private static function loadVendor()
  {
    if (is_dir(BASEDIR . 'vendor') && is_file(BASEDIR . 'vendor/autorun.php')) {
      require(BASEDIR . 'vendor/autorun.php');
    }
  }

  public static function run()
  {
    self::loadVendor();

    echo "OK";
  }
}
