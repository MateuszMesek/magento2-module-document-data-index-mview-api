<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexMviewApi\Command;

use Traversable;

interface GetTriggersByDocumentNameInterface
{
    /**
     * @param string $documentName
     * @return \Traversable|\Magento\Framework\DB\Ddl\Trigger[]
     */
    public function execute(string $documentName): Traversable;
}
