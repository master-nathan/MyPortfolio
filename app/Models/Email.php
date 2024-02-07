<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class email extends Model
{
    use HasFactory;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Add your email settings here
    $to = "nathan.vosloo@icloud.com";
    $subject = "Contact Form Submission";
    $headers = "From: $email";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "Message:\n$message";

    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "success"; // You can customize this response as needed
    } else {
        echo "error"; // You can customize this response as needed
    }
}