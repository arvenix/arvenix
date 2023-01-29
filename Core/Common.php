<?php

declare(strict_types=1);

function baseUrl(string $path = null)
{
  if (isCLI()) return null;

  $scheme = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 'https' : 'http');
  $subDir = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

  return "{$scheme}://{$_SERVER['HTTP_HOST']}{$subDir}{$path}";
}

function getGet($name)
{
  if (isCLI()) return null;
  return (isset($_GET[$name]) ? $_GET[$name] : null);
}

function getHeaders($name = null)
{
  if (isCLI()) return null;
  $headers = [];

  foreach (getallheaders() as $n => $v) {
    if ($name) {
      if (strcasecmp($name, $n) === 0) {
        return $v;
      }
    } else {
      $headers[$n] = $v;
    }
  }

  return $headers;
}

function getLastError()
{
  return (isset($_SESSION['lastErrMsg']) ? $_SESSION['lastErrMsg'] : null);
}

function getPost($name)
{
  if (isCLI()) return null;
  return (isset($_POST[$name]) ? $_POST[$name] : null);
}

function getRawContents()
{
  if (isCLI()) return null;
  return file_get_contents('php://input');
}

function getRequest($name)
{
  if (isCLI()) return null;
  return (isset($_REQUEST[$name]) ? $_REQUEST[$name] : null);
}

/**
 * Check if environment is CLI.
 */
function isCLI()
{
  return (PHP_SAPI === 'cli');
}

function setLastError($message = null)
{
  if ($message) {
    $_SESSION['lastErrMsg'] = $message;
  } else {
    unset($_SESSION['lastErrMsg']);
  }

  return true;
}

function view($name, array $data = null)
{
  if (!defined('APPDIR')) {
    setLastError('Const APPDIR is missing.');
    return null;
  }

  $file = realpath(APPDIR . 'View/' . $name . '.php');

  if (is_file($file)) {
    if ($data) {
      extract($data);
    }
    return require($file);
  }

  return null;
}
