<?php
class ContactValidator
{
    public static function validate(Contact $contact): string
    {
        $errors = [];

        if (empty($contact->name)) {
            $errors[] = 'Name is required.';
        }

        if (empty($contact->phone)) {
            $errors[] = 'Phone number is required.';
        } elseif (!preg_match('/^\+?[0-9\s\-]+$/', $contact->phone)) {
            $errors[] = 'Invalid phone number format.';
        }

        if (empty($contact->email)) {
            $errors[] = 'Email is required.';
        } elseif (!filter_var($contact->email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Invalid email format.';
        }

        if (empty($contact->message)) {
            $errors[] = 'Message is required.';
        }

        return implode(' ', $errors);
    }
}

