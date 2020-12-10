<?php

declare(strict_types=1);

namespace Adrenth\Thetvdb\Exception;

/**
 * Class InvalidJsonInResponseException.
 *
 * @author   Alwin Drenth <adrenth@gmail.com>
 * @license  MIT
 *
 * @see     https://github.com/adrenth/thetvdb2
 */
class InvalidJsonInResponseException extends \InvalidArgumentException
{
    /**
     * @return static
     */
    public static function couldNotDecodeJson(): InvalidJsonInResponseException
    {
        return new static('Could not decode JSON data');
    }

    /**
     * @return static
     */
    public static function incorrectDataStructure(): InvalidJsonInResponseException
    {
        return new static('Incorrect data structure');
    }
}
