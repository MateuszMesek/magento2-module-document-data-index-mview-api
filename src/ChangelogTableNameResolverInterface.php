<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexMviewApi;

interface ChangelogTableNameResolverInterface
{
    /**
     * @param array $context
     * @return string
     */
    public function resolve(array $context): string;
}
