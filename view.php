<?php

use App\Domains\PersonWithMethod;

require __DIR__ . '/vendor/autoload.php';

$personWithMethod = new PersonWithMethod;

echo PHP_EOL;

$serialized = serialize($personWithMethod);

var_dump($serialized);

echo PHP_EOL, ' -- ', PHP_EOL;

$unSerialized = unserialize($serialized);

var_dump($unSerialized);

echo PHP_EOL, ' -- ', PHP_EOL;

$unSerialized->save();

echo PHP_EOL;
