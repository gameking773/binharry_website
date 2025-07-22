<?php

declare(strict_types=1);

namespace Entity\Exception;

use OutOfBoundsException;

/**
 * EntityNotFoundException.
 * The parameter of the object you tried to find does not exist!
 */
class EntityNotFoundException extends OutOfBoundsException
{
}
