<?php

declare(strict_types=1);

namespace Psg\Sr2;

use Psg\Sr1\{ServerRequestInterface};

/**
 * Do something at the start, unrelated to transforming a request or response
 *
 * An example of "before outerware" would be loading configurations,
 * setting up database connections, etc.
 */
interface BeforewareInterface
{
    /** Do something unrelated to transforming a request or response */
    public function process(ServerRequestInterface $request, LayeredAppInterface $app);
}
