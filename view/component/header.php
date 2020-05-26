<?php
  include "config/connection.php";
    if (isset($_REQUEST["page"])) {
      $page = $_REQUEST["page"];
    } else {
      $page = "index";
    }
 ?>
<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <title></title>
  </head>
  <body>
