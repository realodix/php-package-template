<?php

use Realodix\Relax\Config;
use Realodix\Relax\RuleSet\Sets\Realodix;

$localRules = [
    // ...
];

return Config::create(new Realodix)
    ->setRules($localRules)
    ->setCacheFile(__DIR__.'/.tmp/.php-cs-fixer.cache');
