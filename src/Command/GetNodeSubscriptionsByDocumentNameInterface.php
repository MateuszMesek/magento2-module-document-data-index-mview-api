<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexMviewApi\Command;

use Traversable;

interface GetNodeSubscriptionsByDocumentNameInterface
{
    public function execute(string $documentName): Traversable;
}
