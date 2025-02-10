<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$domain_name = "example";
$phone_number = "0123456789";
$email_address = "info@example.com";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            if (!isset($pageTitle)) {
                $pageTitle = "designfoxy";
            }
            echo htmlspecialchars($pageTitle); ?></title>
    <link rel="shortcut icon" href="./assets/images/fav.webp" type="image/x-icon">
    <meta name="description"
    content="Top Leading Digital Design Agency in Asutin Texas USA. Our mission is help brands to be relevant in the ecosystem digital through creativity, Digiatl media. Further Contact us now">
    <meta name="keywords" content="<?php echo $domain_name; ?>, software development, mobile app development, website development, custom software solutions, mobile development, web development, enterprise software, iOS app development, Android app development, digital product development, SaaS development, full-stack development, web application development, cross-platform mobile development, software engineering, innovative software solutions, technology consulting, custom web design, mobile solutions, software house, tech-driven solutions, <?php echo $domain_name; ?> software house">
    <meta property="og:locale" content="en_GB">
  <meta property="og:type" content="article">
  <meta property="og:title" content="<?= $domain_name ?>">
  <meta property="og:site_name" content="<?= $domain_name ?>">
  <meta property="og:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
  <meta property="og:site_name" content="<?= $domain_name; ?>">
  <meta property="og:image" content="./images/favicon.png" />
  <meta property="og:description" content="<?= $pageTitle; ?>">
  <meta property="og:locale" content="en">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:label1" content="Estimated reading time">
  <meta name="twitter:data1" content="1 minute">
  <meta charset="UTF-8">
</head>

<body class="position-relative">
<div class="cursor"></div>
<div class="cursor2"></div>
    <div class="side-bar d-none d-lg-block">
        <div class="d-flex align-items-center justify-content-between flex-column h-100">
            <div class="logo"><a href="./"><img src="./assets/images/logo.png" alt=""></a></div>
            <div class="menu-icon menu-toggle ">
                <i class="fa-solid fa-bars"></i>
            </div>
            <ul class="social-links d-flex gap-30 flex-column align-items-center justify-content-between">
                <li><a href="javascript:;"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="javascript:;"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="javascript:;"><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href="javascript:;"><i class="fa-brands fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="side-bar-menu-wrap">
        <ul>
            <div class="menu-icon menu-toggle ">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <li><a href="./">Home</a></li>
            <li><a href="./about">About Us</a></li>
            <li><a href="./services">Services</a></li>
            <li><a href="./career">Career</a></li>
            <li><a href="javascript:;">Testimonials</a></li>    
            <li><a href="./contact">Contact</a></li>
        </ul>
    </div>