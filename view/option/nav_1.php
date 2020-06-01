<?php if ($page != 'index' AND $page != 'register') { ?>
<nav class="text-light navigation-bottom" style="width:100%">
<div class="row text-center">
  <div class="col-4">
    <a href="?">
      <img src="assets/img/logo.png" alt="" style="width:100px">
    </a>
  </div>
  <div class="col-8">
    <div class="row container">
      <div class="col-3">
        <a href="?page=map">
          <img src="assets/img/map-pointer.png" style="width:28px" alt="">
        </a>
      </div>
      <div class="col-3">
        <a href="?page=device">
          <img src="assets/img/compass.png" style="width:28px" alt="">
        </a>
      </div>
      <div class="col-3">
        <a href="?page=setting">
          <img src="assets/img/explorer.png" style="width:28px" alt="">
        </a>
      </div>
      <div class="col-3">
        <a href="?page=user">
          <img src="assets/img/orientation.png" style="width:28px" alt="">
        </a>
      </div>
    </div>
  </div>
</div>
</nav>
<br>
<?php } ?>
