<?php

namespace FluxIliasRestApi;

require_once __DIR__ . "/../libs/FluxRestApi/autoload.php";

use FluxAutoloadApi\Adapter\Autoload\PhpVersionChecker;
use FluxAutoloadApi\Adapter\Autoload\Psr4Autoload;
use FluxIliasRestApi\Adapter\Autoload\IliasAutoload;

PhpVersionChecker::new(
    ">=7.4",
    __NAMESPACE__
)
    ->check();

Psr4Autoload::new(
    [
        __NAMESPACE__ => __DIR__
    ]
)
    ->autoload();

IliasAutoload::new(
    __DIR__ . "/../../../.."
)
    ->autoload();
