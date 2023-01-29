<?php

declare(strict_types=1);

namespace App\Welcome\Controller;

class Main
{
  public function __construct()
  {
  }

  public function index()
  {
    view('welcome');
  }
}
