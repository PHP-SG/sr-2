<?php

declare(strict_types=1);

namespace Psg\Sr2;

use Psg\Sr1\ResponseInterface;
use Psg\Sr1\ServerRequestInterface;

/** Wrap coreware and inner middleware */
interface MiddlewareInterface
{
    /** Wrap coreware and inner middleware */
    public function process(ServerRequestInterface $request, MiddlewareAppInterface $app): ResponseInterface;
}
