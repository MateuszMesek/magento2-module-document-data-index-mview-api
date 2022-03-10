<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexerMviewApi\Data;

interface SubscriptionInterface
{
    public function getTableName(): string;

    public function getTriggerEvent(): string;

    public function getTriggerTime(): string;

    public function getCondition(): ?string;

    public function getDocumentId(): string;

    public function getDimensions(): ?string;
}
