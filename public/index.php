<?php

use Lifenet\App;

require_once "../vendor/autoload.php";

$app = new App([
    BlogModule::class,
]);
$response = $app->run(\GuzzleHttp\Psr7\ServerRequest::fromGlobals());
