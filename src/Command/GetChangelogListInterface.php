<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexMviewApi\Command;

use Traversable;

interface GetChangelogListInterface
{
    /**
     * @param array $ids
     * @return \MateuszMesek\DocumentDataIndexMviewApi\Data\ChangelogInterface[]|\Traversable
     */
    public function execute(array $ids): Traversable;
}
