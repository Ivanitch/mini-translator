<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

use Buki\Pdox;
use Laminas\Diactoros\ServerRequestFactory;
use Translator\Db;
use Translator\Request;
use Translator\Translator;

$config = require_once __DIR__ . '/../config/config.php';
$path = $config['path'];

$requestFactory = ServerRequestFactory::fromGlobals();
$request = new Request($requestFactory);

$pdox = new Pdox($config);
$db = new Db($pdox);

$translator = new Translator($db);
