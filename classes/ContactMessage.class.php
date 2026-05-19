<?php

declare(strict_types=1);

class ContactMessage extends Dbh
{
    public function create(Contact $contact): void
    {
        $stmt = $this->connect()->prepare(
            'INSERT INTO contact_messages (name, email, phone, message) VALUES (?, ?, ?, ?)'
        );

        $phone = trim($contact->phone);
        $stmt->execute([
            trim($contact->name),
            trim($contact->email),
            $phone === '' ? null : $phone,
            trim($contact->message),
        ]);
    }
}

