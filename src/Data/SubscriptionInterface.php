<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexMviewApi\Data;

interface SubscriptionInterface
{
    public function getTableName(): string;

    public function getTriggerEvent(): string;

    public function getTriggerTime(): string;

    public function getCondition(): ?string;

    public function getDocumentId(): ?string;

    public function getDimensions(): ?string;

    public function getRows(): ?string;
}
