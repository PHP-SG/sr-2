<?php

declare(strict_types=1);

namespace Psg\Sr2;

use Psg\Sr1\ResponseInterface;
use Psg\Sr1\ServerRequestInterface;

/**
 * Middleware that expects a `next` callback
 *
 * Some middleware has been written with the expectation receiving a `next`
 * callback.  This interface is available to accomodate such with the next
 * callback receiving the request
 */
interface MiddlewareNextInterface
{
    /** Wrap coreware and inner middleware */
    public function process(ServerRequestInterface $request, \Closure $next): ResponseInterface;
}
