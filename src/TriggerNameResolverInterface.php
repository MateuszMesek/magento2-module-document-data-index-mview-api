<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexMviewApi;

use MateuszMesek\DocumentDataIndexMviewApi\Data\SubscriptionInterface;

interface TriggerNameResolverInterface
{
    public function resolver(array $context, SubscriptionInterface $subscription): string;
}
