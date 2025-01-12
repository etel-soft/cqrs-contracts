<?php

declare(strict_types=1);

namespace Etel\Contracts\CQRS\Exception;

/**
 * When return value has an unexpected type.
 *
 * @author Mykola Zyk <mykola@etel.dev>
 */
interface ReturnValueInvalidException extends CQRSException {}
