<?php
declare(strict_types=1);

namespace App\Domain\Services;

use Money\Money;
use Ramsey\Uuid\Uuid;

class Service {

    public function __construct(
        public readonly ?Uuid $id,
        public readonly string $name,
        public readonly ?string $description,
        public readonly Money $price,
        public readonly ?bool $active
    ) {
    }

    public static function create(
        ?Uuid $id,
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
            $data['id'] ?? null,
            $data['name'],
            $data['description'] ?? null,
            $data['price'],
            $data['active'] ?? null
        );
    }

    public function toArray(): array {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'active' => $this->active
        ];
    }
}
