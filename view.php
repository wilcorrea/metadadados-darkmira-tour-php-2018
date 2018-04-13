<?php

use App\Domains\Controller\Person as Controller;
use App\Domains\Model\Person as Model;

const __APP_ROOT__ = __DIR__;
const __APP_TEMPLATE__ = 'bootstrap';

require __DIR__ . '/vendor/autoload.php';

$person = new Controller(new Model);

try {
    $person->renderForm([]);
} catch (ErrorException $e) {
    echo $e->getMessage();
}
