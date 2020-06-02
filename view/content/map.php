<div id="content-map" style="display:none">
<div id='map' class='map-full' style="width:100%;min-height:550px"></div>
<script src="//d3js.org/d3.v3.min.js" charset="utf-8"></script>
<?php
if (isset($_REQUEST["track"]) AND isset($_REQUEST["id"])) {
  $id    = $_REQUEST["id"];
  echo '<script type="text/javascript"> var track = "true"; var id = '.$id.'; </script>';
  echo '<script type="text/javascript" src="assets/js/map.js"></script>';
} else if (!isset($_REQUEST["track"]) AND isset($_REQUEST["id"])) {
  $id    = $_REQUEST["id"];
  echo '<script type="text/javascript"> var track = "false"; var id = '.$id.'; </script>';
  echo '<script type="text/javascript" src="assets/js/map-all.js"></script>';
} else {
  echo '<script type="text/javascript"> var track = "false"; var id = ""; </script>';
  echo '<script type="text/javascript" src="assets/js/map-all.js"></script>';
}
?>
</div>
