<?php

declare(strict_types=1);

namespace Etel\Contracts\CQRS\Command;

/**
 * Base interface for asynchronous commands.
 *
 * @author Mykola Zyk <mykola@etel.dev>
 */
interface AsyncCommand extends Command {}
