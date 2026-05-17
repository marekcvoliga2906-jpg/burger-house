<?php

declare(strict_types=1);

class Contact
{
    public string $name;
    public string $phone;
    public string $email;
    public string $message;

    public function __construct(string $name, string $phone, string $email, string $message)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->message = $message;
    }
}
