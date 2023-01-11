<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexMviewApi\Model;

interface DocumentNameResolverInterface
{
    /**
     * @param array $context
     * @return string|null
     */
    public function resolver(array $context): ?string;
}
