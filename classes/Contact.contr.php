<?php
require_once 'Contact.model.php';
require_once 'Contact.Validator.class.php';

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
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $this->formSent = true;
        }
        $this->name = $_POST['name'] ?? '';
        $this->phone = $_POST['phone'] ?? '';
        $this->email = $_POST['email'] ?? '';
        $this->message = $_POST['message'] ?? '';

        $contact = new Contact($this->name, $this->phone, $this->email, $this->message);
        $validator = new ContactValidator();
        $this->formError = $validator->validate($contact);

        if ($this->formError === "") {
            $this->formSent = true;
        }
    }
}
