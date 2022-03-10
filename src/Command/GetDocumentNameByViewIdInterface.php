<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexerMviewApi\Command;

interface GetDocumentNameByViewIdInterface
{
    public function execute(string $viewId): ?string;
}
