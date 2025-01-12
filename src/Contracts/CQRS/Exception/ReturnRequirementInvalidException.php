<?php

declare(strict_types=1);

namespace Etel\Contracts\CQRS\Exception;

/**
 * When return value requirement specified for asynchronous message.
 *
 * @author Mykola Zyk <mykola@etel.dev>
 */
interface ReturnRequirementInvalidException extends CQRSException {}
