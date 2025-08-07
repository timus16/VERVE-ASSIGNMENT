<?php
/*
Template Name: Contact Page
*/
get_header();
?>
<div class="contact-page">
    <h1>Contact Us</h1>
    <form method="post" action="">
        <p><label for="name">Name:</label><br>
        <input type="text" name="name" id="name" required></p>
        <p><label for="email">Email:</label><br>
        <input type="email" name="email" id="email" required></p>
        <p><label for="message">Message:</label><br>
        <textarea name="message" id="message" required></textarea></p>
        <p><input type="submit" value="Send"></p>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $message = esc_textarea($_POST['message']);
        $to = get_option('admin_email');
        $subject = 'Contact Form Submission';
        $headers = 'From: ' . $name . ' <' . $email . '>';
        wp_mail($to, $subject, $message, $headers);
        echo '<p>Thank you for contacting us!</p>';
    }
    ?>
</div>
<?php
get_footer();
