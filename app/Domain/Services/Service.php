<?php
declare(strict_types=1);

namespace App\Domain\Services;

use Money\Money;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class Service {

    public function __construct(
        public readonly ?UuidInterface $id,
        public readonly string $name,
        public readonly ?string $description,
        public readonly Money $price,
        public readonly ?bool $active
    ) {
    }

    public static function create(
        ?UuidInterface $id,
        string $name,
        ?string $description,
        Money $price,
        ?bool $active
    ): self {
        return new self(
            $id,
            $name,
            $description,
            $price,
            $active
        );
    }

    public static function fromArray(array $data): self {
        return self::create(
            Uuid::fromString($data['id']) ?? null,
            $data['name'],
            $data['description'] ?? null,
            new Money($data['price'], new \Money\Currency('EUR')),
            !!$data['active'] ?? null
        );
    }

    public function toArray(): array {
        return [
            'id' => $this->id->toString(),
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price->getAmount(),
            'active' => $this->active
        ];
    }
}
