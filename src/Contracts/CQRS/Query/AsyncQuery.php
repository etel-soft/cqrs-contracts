<?php

declare(strict_types=1);

namespace Etel\Contracts\CQRS\Query;

/**
 * Base interface for asynchronous queries.
 *
 * This means that the execution of the query does not return any direct result.
 *
 * @author Mykola Zyk <mykola@etel.dev>
 */
interface AsyncQuery extends Query {}
