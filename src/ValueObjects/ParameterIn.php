<?php


namespace Apie\OpenapiSchema\ValueObjects;

use Apie\ValueObjects\StringEnumTrait;
use Apie\ValueObjects\ValueObjectInterface;

/**
 * Enum for 'Parameters' in column.
 *
 * @see https://swagger.io/specification/#parameter-locations
 */
class ParameterIn implements ValueObjectInterface
{
    use StringEnumTrait;

    const HEADER = 'header';

    const PATH = 'path';

    const COOKIE = 'cookie';

    const QUERY = 'query';
}
