<?php

declare(strict_types=1);

namespace Etel\Contracts\CQRS\Query;

/**
 * Bus for query messages.
 *
 * @author Mykola Zyk <mykola@etel.dev>
 */
interface QueryBus
{
    /**
     * Dispatches the given query and returns result for synchronous queries.
     *
     * You can specify the expected type of returned value and get an exception when an invalid value is returned.
     * This also provides a type of returned value to static analyzers and IDE.
     * Valid return types are FQCN and primitive types 'array', 'bool', 'int', 'float' and 'string'.
     *
     * @template T
     *
     * @param null|class-string<T> $returnType
     *
     * @phpstan-param string $returnType
     *
     * @return T The handler returned value
     *
     * @phpstan-return ($returnType is class-string ? T : mixed)
     */
    public function dispatch(Query $query, ?string $returnType = null): mixed;
}
