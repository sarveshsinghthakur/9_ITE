<?php
require_once 'vendor/autoload.php'; // Include Facebook SDK

$fb = new \Facebook\Facebook([
  'app_id' => 'YOUR_FACEBOOK_APP_ID',
  'app_secret' => 'YOUR_FACEBOOK_APP_SECRET',
  'default_graph_version' => 'v10.0',
]);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email']; // Optional permissions
$login_url = $helper->getLoginUrl('http://yourwebsite.com/facebook_callback.php', $permissions);

header("Location: $login_url");
exit;
?>
