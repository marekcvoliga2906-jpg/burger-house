<?php

class ContactController
{
    public bool $formSent = false;
    public string $formError = "";

    public string $name = "";
    public string $phone = "";
    public string $email = "";
    public string $message = "";

    public function handleRequest(): void
    {
        if ($_SERVER["REQUEST_METHOD"] !== "POST") {
            return;
        }

        $this->name = $_POST['name'] ?? '';
        $this->phone = $_POST['phone'] ?? '';
        $this->email = $_POST['email'] ?? '';
        $this->message = $_POST['message'] ?? '';

        $contact = new Contact($this->name, $this->phone, $this->email, $this->message);
        $validator = new ContactValidator();
        $this->formError = $validator->validate($contact);

        if ($this->formError === "") {
            try {
                $contactMessage = new ContactMessage();
                $contactMessage->create($contact);
                $this->formSent = true;
            } catch (Throwable $e) {
                $this->formError = 'Spravu sa nepodarilo ulozit. Skus to prosim znova.';
                $this->formSent = false;
            }
        }
    }
}
