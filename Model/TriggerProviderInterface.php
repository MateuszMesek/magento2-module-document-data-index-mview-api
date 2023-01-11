<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexMviewApi\Model;

use Traversable;

interface TriggerProviderInterface
{
    public function get(array $context): Traversable;
}
