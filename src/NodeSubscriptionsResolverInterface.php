<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexMviewApi;

use Traversable;

interface NodeSubscriptionsResolverInterface
{
    public function resolve(): Traversable;
}
