<?php

use App\Domains\Controller\Person as Controller;
use App\Domains\Model\PersonWithMeta as Model;

$template = isset($argv) && isset($argv[1]) ? $argv[1] : 'bootstrap';
$template = isset($_GET['fw']) ? $_GET['fw'] : $template;

define('__APP_ROOT__', dirname(__DIR__));
define('__APP_TEMPLATE__', $template);

require __APP_ROOT__ . '/vendor/autoload.php';

$person = new Controller(new Model);

try {
    $person->renderForm([]);
} catch (ErrorException $e) {
    echo $e->getMessage();
}
