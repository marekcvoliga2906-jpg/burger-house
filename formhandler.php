<?php
if (!isset($renderFormData)) {
    $formSent = false;
    $formError = '';
    $name = '';
    $phone = '';
    $email = '';
    $message = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if (empty($name) || empty($phone) || empty($email) || empty($message)) {
            $formError = 'Please fill in all fields.';
        } else {
            $formSent = true;
        }
    }

    return;
}

if ($formError !== '') {
?>
                    <div class="contact-card mt-16">
                        <span class="eyebrow">Form Error</span>
                        <h3>Please fill in all fields</h3>
                        <p>All form fields are required before sending the message.</p>
                    </div>
<?php
} elseif ($formSent) {
?>
                    <div class="contact-card mt-16">
                        <span class="eyebrow">Your Form Data</span>
                        <h3>Sent data</h3>
                        <p><strong>Name:</strong> <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></p>
                        <p><strong>Phone:</strong> <?php echo htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'); ?></p>
                        <p><strong>Email:</strong> <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></p>
                        <p><strong>Message:</strong><br><?php echo nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8')); ?></p>
                    </div>
<?php
}