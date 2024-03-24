<?php
declare(strict_types=1);

namespace App\Domain\Services;

use Illuminate\Support\Collection;
use Ramsey\Uuid\Uuid;

interface Services {

    public function create(Service $service): void;

    public function getAll(): Collection;

    public function getActive(): Collection;

    public function getInactive(): Collection;

    public function getByName(string $name): ?Service;

    public function getById(Uuid $id): ?Service;

}
