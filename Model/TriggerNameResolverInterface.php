<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexMviewApi\Model;

use MateuszMesek\DocumentDataIndexMviewApi\Model\Data\SubscriptionInterface;

interface TriggerNameResolverInterface
{
    public function resolver(array $context, SubscriptionInterface $subscription): string;
}
