<?php

declare(strict_types=1);

namespace Psg\Sr2;

use Psg\Sr1\{ResponseInterface, ServerRequestInterface};

/** Process a the response and request after coreware has run */
interface BackwareInterface
{
    /** Process a the response and request after coreware has run */
    public function process(ServerRequestInterface $request, ResponseInterface $response, LayeredAppInterface $app): ResponseInterface;
}
