<?php

namespace Models;

use DbConnectionI;
use PDOStatement;

abstract class Model {
    public function __construct(
        protected DbConnectionI $pdo,
    ) { }

    public abstract function getData(): array;
    public abstract function findData(string $id): PDOStatement;
    public abstract function insertData(array $data): bool;
    public abstract function updateData(): bool;
    public abstract function deleteData(int $id): bool;
}