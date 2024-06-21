<?php

use Realodix\Relax\Config;
use Realodix\Relax\RuleSet\Sets\Realodix;

$localRules = [
    // ...
];

return Config::create(new Realodix, $localRules);
