<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title><?php echo isset($pageTitle) ? $pageTitle . ' - Tomorrow Digital' : '' ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="Tomorrow">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <base href="<?php echo $siteRoot; ?>">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/libs.min.css">
  <link rel="stylesheet" href="css/main.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;600;700&family=Paytone+One&display=swap" rel="stylesheet">

  <meta name="theme-color" content="#1a1414">
</head>

<body>

  <?php include_once('img/client-logos.svg');?>

  <?php include('includes/layout/preloader.php');?>

  <?php include('includes/layout/nav.php');?>
