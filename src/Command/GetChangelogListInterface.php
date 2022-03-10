<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexerMviewApi\Command;

use Traversable;

interface GetChangelogListInterface
{
    /**
     * @param array $ids
     * @return \MateuszMesek\DocumentDataIndexerMviewApi\Data\ChangelogInterface[]|\Traversable
     */
    public function execute(array $ids): Traversable;
}
