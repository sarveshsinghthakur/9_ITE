<?php
require_once 'vendor/autoload.php'; // Include Google API PHP Client Library

// Initialize Google Client
$client = new Google_Client();
$client->setClientId('YOUR_GOOGLE_CLIENT_ID');
$client->setClientSecret('YOUR_GOOGLE_CLIENT_SECRET');
$client->setRedirectUri('http://yourwebsite.com/google_callback.php');
$client->addScope("email");
$client->addScope("profile");

$login_url = $client->createAuthUrl();
header("Location: $login_url");
exit;
?>
