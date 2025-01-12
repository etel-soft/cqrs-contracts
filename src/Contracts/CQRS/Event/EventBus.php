<?php

declare(strict_types=1);

namespace Etel\Contracts\CQRS\Event;

/**
 * Bus for dispatch events.
 *
 * @author Mykola Zyk <mykola@etel.dev>
 */
interface EventBus
{
    public function dispatch(Event $event): void;
}
