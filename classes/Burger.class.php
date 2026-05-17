<?php

declare(strict_types=1);

class Burger extends Dbh
{
    public function getAll(): array
    {
        $stmt = $this->connect()->query('SELECT * FROM burgers ORDER BY id DESC');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById(int $id): ?array
    {
        $stmt = $this->connect()->prepare('SELECT * FROM burgers WHERE id = ?');
        $stmt->execute([$id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row ?: null;
    }

    public function createBurger(string $name, string $description, string $price, string $badge, string $tags, string $imagePath): void
    {
        $stmt = $this->connect()->prepare(
            'INSERT INTO burgers (name, description, price, badge, tags, image_path) VALUES (?, ?, ?, ?, ?, ?)'
        );
        $stmt->execute([$name, $description, $price, $badge, $tags, $imagePath]);
    }

    public function updateBurger(int $id, string $name, string $description, string $price, string $badge, string $tags, string $imagePath): void
    {
        $stmt = $this->connect()->prepare(
            'UPDATE burgers SET name = ?, description = ?, price = ?, badge = ?, tags = ?, image_path = ? WHERE id = ?'
        );
        $stmt->execute([$name, $description, $price, $badge, $tags, $imagePath, $id]);
    }

    public function deleteBurger(int $id): void
    {
        $stmt = $this->connect()->prepare('DELETE FROM burgers WHERE id = ?');
        $stmt->execute([$id]);
    }
}
