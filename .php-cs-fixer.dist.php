<?php

use Realodix\CsConfig\Config;
use Realodix\CsConfig\Finder;
use Realodix\CsConfig\Rules\Realodix;

$finder = Finder::laravel(__DIR__);

$addOrOverrideRules = [
    // Base
];

return Config::create(new Realodix($addOrOverrideRules))
    ->setFinder($finder);
