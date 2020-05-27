<?php
  include "app/config/connection.php";
    if (isset($_REQUEST["page"])) {
      $page = $_REQUEST["page"];
    } else {
      $page = "index";
    }
 ?>
<!DOCTYPE html>
  <head>
    <title>Track</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/mapbox-gl.css"  />
    <script src="assets/js/mapbox-gl.js"></script>
    <style media="screen" type="text/css">
    /* Navigation */
    .navigation-bottom {
      padding:10px;
      background:#162447;
      position:fixed;
      bottom:0px;
      z-index:99;
    }
    .menu-border:hover {
      box-shadow: 0px 0px 12px #e43f5a;
    }
    </style>
  </head>
  <body>
