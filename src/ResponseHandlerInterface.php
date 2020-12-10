<?php

declare(strict_types=1);

namespace Adrenth\Thetvdb;

use Adrenth\Thetvdb\Model\ValueObject;

/**
 * @author   Alwin Drenth <adrenth@gmail.com>
 * @license  MIT
 *
 * @see     https://github.com/adrenth/thetvdb2
 */
interface ResponseHandlerInterface
{
    /**
     * Handle the response which produces the Response value object.
     */
    public function handle(): ValueObject;
}
