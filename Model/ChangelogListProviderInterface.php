<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexMviewApi\Model;

use Traversable;

interface ChangelogListProviderInterface
{
    /**
     * @param array $context
     * @return \Traversable
     */
    public function get(array $context): Traversable;
}
