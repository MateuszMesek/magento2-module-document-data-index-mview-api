<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexMviewApi\Model\Config;

interface SubscriptionProviderInterface
{
    /**
     * @param string $documentName
     * @return string|null
     */
    public function getSubscriptionProvider(string $documentName): ?string;
}
