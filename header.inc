<?php
session_start();
require_once("settings.php");
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $title; ?></title>
 <meta name="robots" content="noindex" />

<!--
Viewing source code is a sign of intelligence! This CSS is available at http://github.com/philipithomas/philipithomasFrame as an open-source project!

By Philip I. Thomas
http://philipithomas.com
-->

<link rel="stylesheet" type="text/css" href="/stylesheet.css" />
<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:700' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="/favicon.ico" />

<?php echo $tracking;?>
</head>

<div id="wrapper">
  <div id="header"></div>
  
  <div id="left">
  <ul id="nav">
  <?php echo $nav; ?>
  </ul>
  
  </div>


<div id="center"><body>
