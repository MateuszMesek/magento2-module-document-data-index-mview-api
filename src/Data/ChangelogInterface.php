<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexMviewApi\Data;

use Traversable;

interface ChangelogInterface
{
    public function getDimensions(): array;

    public function getIds(): Traversable;

    public function getPaths(): array;
}
