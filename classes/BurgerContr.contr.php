<?php
class BurgerContr extends Burger
{
    public function create(array $data): array
    {
        $name = ($data['name'] ?? '');
        $description = ($data['description'] ?? '');
        $price = ($data['price'] ?? '');
        $badge = ($data['badge'] ?? '');
        $tags = ($data['tags'] ?? '');
        $imagePath = ($data['image_path'] ?? '');

        $error = $this->validate($name, $description, $price, $imagePath);
        if ($error !== '') {
            return ['ok' => false, 'error' => $error];
        }

        $this->createBurger($name, $description, $price, $badge, $tags, $imagePath);
        return ['ok' => true, 'success' => 'Burger bol pridany.'];
    }

    public function update(array $data): array
    {
        $id = isset($data['id']) ? (int) $data['id'] : 0;
        $name = ($data['name'] ?? '');
        $description = ($data['description'] ?? '');
        $price = ($data['price'] ?? '');
        $badge = ($data['badge'] ?? '');
        $tags = ($data['tags'] ?? '');
        $imagePath = ($data['image_path'] ?? '');

        if ($id <= 0) {
            return ['ok' => false, 'error' => 'Neplatne ID burgera.'];
        }

        $error = $this->validate($name, $description, $price, $imagePath);
        if ($error !== '') {
            return ['ok' => false, 'error' => $error, 'edit' => $id];
        }

        $this->updateBurger($id, $name, $description, $price, $badge, $tags, $imagePath);
        return ['ok' => true, 'success' => 'Burger bol upraveny.'];
    }

    public function delete(array $data): array
    {
        $id = isset($data['id']) ? (int) $data['id'] : 0;
        if ($id <= 0) {
            return ['ok' => false, 'error' => 'Neplatne ID burgera.'];
        }

        $this->deleteBurger($id);
        return ['ok' => true, 'success' => 'Burger bol zmazany.'];
    }

    private function validate(string $name, string $description, string $price, string $imagePath): string
    {
        if ($name === '' || $description === '' || $price === '' || $imagePath === '') {
            return 'Vypln nazov, popis, cenu a cestu k obrazku.';
        }

        if (!is_numeric($price)) {
            return 'Cena musi byt cislo.';
        }

        return '';
    }
}
