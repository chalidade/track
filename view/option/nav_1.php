<?php if ($page != 'index' AND $page != 'register') { ?>
<nav class="text-light navigation-bottom" style="width:100%">
<div class="row text-center">
  <div class="col-4">
    <a onclick="menu(0)">
      <img src="assets/img/logo.png" alt="" style="width:100px">
    </a>
  </div>
  <div class="col-8">
    <div class="row container">
      <div class="col-3">
        <a onclick="menu(1)">
          <img src="assets/img/map-pointer.png" style="width:28px" alt="">
        </a>
      </div>
      <div class="col-3">
        <a onclick="menu(2)">
          <img src="assets/img/compass.png" style="width:28px" alt="">
        </a>
      </div>
      <div class="col-3">
        <a onclick="menu(3)">
          <img src="assets/img/explorer.png" style="width:28px" alt="">
        </a>
      </div>
      <div class="col-3">
        <a onclick="menu(0)">
          <img src="assets/img/orientation.png" style="width:28px" alt="">
        </a>
      </div>
    </div>
  </div>
</div>
</nav>
<br>
<?php } ?>
