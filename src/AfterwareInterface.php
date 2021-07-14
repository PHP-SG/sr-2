<?php

declare(strict_types=1);

namespace Psg\Sr2;

use Psg\Sr1\{ResponseInterface, ServerRequestInterface};


/**
 * Do something after the server has responded
 *
 * An example of "after outerware" would be clean up,
 * dequeueing, or logging
 */
interface AfterwareInterface
{
    /** Do something unrelated to transforming a request or response */
    public function process(ServerRequestInterface $request,  ResponseInterface $response, LayeredAppInterface $app);
}
