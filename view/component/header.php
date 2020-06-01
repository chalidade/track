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
    .text-form {
      text-align:center;
      border:none;
    }
    td {
      vertical-align:top;
    }
    th {
      vertical-align:top;
    }
    .text-ciri {
      padding:5px;
      text-align:center;
      width:100%;
      height:80px;
      margin-top:-10px;
      border:solid thin #d4d4d4;
    }
    .img-camera {
      width:15px;
      margin-left:5px;
      margin-bottom:7px;
    }
    .img-upload {
      width:80px;
      height:80px;
      border:solid thin #d4d4d4;
    }
    .bubble {
      margin-left: 10p
      text-align:center;
      padding: 0px 5px;
      border-radius:3px;
      font-size:10px;
    }
    .p-side-20 {
      padding: 0px 20px;
    }
    .menu-border:hover {
      box-shadow: 0px 0px 12px #e43f5a;
    }
    .main-background {
      background:#d4d4d421;
      margin-top:-17px;
      padding: 10px 10px;
      min-height:600px;
    }

    .device-list {
      border:solid thin #d4d4d4;
      margin:5px;
      border-radius:5px;
      box-shadow: 0px 0px 4px #16244721;
    }
    </style>
  </head>
  <body>
