<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexMviewApi\Command;

interface GetDocumentNameByViewIdInterface
{
    public function execute(string $viewId): ?string;
}
