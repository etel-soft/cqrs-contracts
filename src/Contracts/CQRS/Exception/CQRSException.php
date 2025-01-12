<?php

declare(strict_types=1);

namespace Etel\Contracts\CQRS\Exception;

use Throwable;

/**
 * The base interface for all exceptions in CQRS contract.
 *
 * @author Mykola Zyk <mykola@etel.dev>
 */
interface CQRSException extends Throwable {}
