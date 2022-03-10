<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexerMviewApi;

use Traversable;

interface NodeSubscriptionsResolverInterface
{
    public function resolve(): Traversable;
}
