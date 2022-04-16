<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexMviewApi;

use Traversable;

interface SubscriptionProviderInterface
{
    /**
     * @param array $context
     * @return \Traversable
     */
    public function get(array $context): Traversable;
}
