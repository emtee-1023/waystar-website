<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// forms/get-a-quote.php
// Handles the 'Get a Quote' form submission from service-details.php

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method Not Allowed']);
    exit;
}

// Sanitize and validate input
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$contact = isset($_POST['contact']) ? trim($_POST['contact']) : '';
$subject = isset($_POST['subject']) ? trim($_POST['subject']) : 'Service Quote Request';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

if (empty($name) || empty($contact) || empty($subject) || empty($message)) {
    http_response_code(400);
    echo json_encode(['error' => 'All fields are required.']);
    exit;
}

// Use PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php';

// Load .env
if (file_exists(__DIR__ . '/../.env')) {
    $env = parse_ini_file(__DIR__ . '/../.env');
} else {
    $env = [];
}

$mail = new PHPMailer(true);
try {
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host = $env['SMTP_HOST'] ?? '';
    $mail->SMTPAuth = true;
    $mail->Username = $env['SMTP_USER'] ?? '';
    $mail->Password = $env['SMTP_PASS'] ?? '';
    $mail->Port = isset($env['SMTP_PORT']) ? (int)$env['SMTP_PORT'] : 465;
    $secure = $env['SMTP_SECURE'] ?? 'ssl';
    if ($secure === 'ssl' || $secure === 'SMTPS') {
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    } elseif ($secure === 'tls' || $secure === 'STARTTLS') {
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    }

    // Recipients
    $mail->setFrom($env['MAIL_FROM'] ?? 'noreply@yourdomain.com', $env['MAIL_FROM_NAME'] ?? 'Waystar noreply');
    $mail->addAddress($env['MAIL_TO'] ?? 'info@waystar.co.ke');

    // Content
    $mail->isHTML(false);
    $mail->Subject = "[Waystar Quote] $subject";
    $mail->Body    = "Name: $name\nContact: $contact\nSubject: $subject\nMessage:\n$message";

    $mail->send();
    echo json_encode(['success' => 'Your quote request has been sent.']);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Mailer Error: ' . $mail->ErrorInfo]);
}
