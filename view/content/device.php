<div id="content-device" style="display:none">
<div class="container">
  <h1 class="sub-title">All Device</h1>
  <hr>
</div>
  <div class="main-background">
    <div class="row p-side-20">
      <table width="100%">
        <form class="" action="?page=device" method="post">
        <tr>
          <td width="60%">
            <input type="text" class="form-control" placeholder="B123XYZ" value="" style="font-size:12px">
          </td>
          <td>
            <input type="submit" class="btn blue-light-bg text-light" value="Search" style="font-size:12px">
          </td>
        </form>
          <td>
            <button class="btn pink-bg text-light" data-toggle="modal" data-target="#addNew" style="font-size:12px">+ New</button>
          </td>
        </tr>
      </table>
    </div>
    <hr>
    <div class="row blue-light-bg text-light device-list">
      <div class="col-2 text-center">
        <img src="assets/img/automobile.png" style="width:35px;padding-top:12px" alt="">
      </div>
      <div class="col-8">
        <h2 style="font-size:14px;font-weight:700;padding-top:10px">Honda Brio</h2>
        <p style="font-size:10px;">B 4432 XYZ <span class="bg-success bubble">online</span> </p>
      </div>
      <div class="col-2 text-center">
        <img src="assets/img/adjust.png" data-toggle="modal" data-target="#exampleModal" style="width:20px;padding-top:20px" alt="">
      </div>
    </div>
    <hr>
    <div class="row blue-light-bg text-light device-list">
      <div class="col-2 text-center">
        <img src="assets/img/motorcycle.png" style="width:35px;padding-top:12px" alt="">
      </div>
      <div class="col-8">
        <h2 style="font-size:14px;font-weight:700;padding-top:10px">Honda Vario 125</h2>
        <p style="font-size:10px;">B 1234 XYZ <span class="bg-danger bubble">offline</span> </p>
      </div>
      <div class="col-2 text-center">
        <img src="assets/img/adjust.png" style="width:20px;padding-top:20px" alt="">
      </div>
    </div>
    <hr>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" class="sub-title" style="font-size:14px;font-weight:600">Detail Vehicle</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div style="margin-bottom:20px">
            <form class="" action="index.html" method="post" style="width:100%">
              <div class="row">
                  <div class="col-12">
                    <table width="100%" cellpadding="5" cellspacing="10">
                      <tr>
                        <th>Mobil / Motor</th>
                        <td>:</td>
                        <td><input type="text" placeholder="Honda Brio" value="Honda Brio" style="border:none"></td>
                      </tr>
                      <tr>
                        <th>Plat Nomor</th>
                        <td>:</td>
                        <td><input type="text" value="B 4432 XYZ"  placeholder="B 1245 MM" style="border:none"></td>
                      </tr>
                      <tr>
                        <th>Nomor Alat</th>
                        <td>:</td>
                        <td><input type="text" value="AB001"  placeholder="Device Number" style="border:none"></td>
                      </tr>
                      <tr>
                        <th>Nomor Telpon</th>
                        <td>:</td>
                        <td><input type="text" value="085156580308"  placeholder="Phone Number" style="border:none"></td>
                      </tr>
                      <tr>
                        <th> Ciri Kendaraan</th>
                        <td>:</td>
                        <td>
                          <textarea placeholder="Ciri Kendaraan ..." style="width:100%;height:auto;border:none">Warna merah, ada sedikit tergores dibagian lampu
                          </textarea>
                        </td>
                      </tr>
                      <tr>
                        <th>Foto</th>
                        <td>:</td>
                        <td>
                          <img src="assets/img/brio.jpg" style="width:150px" class="img-camera" alt="">
                        </td>
                      </tr>
                      <tr>
                        <th>Lokasi Terakhir </th>
                        <td colspan="2">:</td>
                      </tr>
                      <tr>
                        <td colspan="3">
                          <iframe src="view/option/detail-map.php" style="border:none;height:300px;width:100%"></iframe>
                        </td>
                      </tr>
                    </table>
                  </div>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <a href="?page=map&track=true&id=<?php echo $id; ?>" class="btn blue-light-bg text-light" style="font-size:12px">Lacak Kendaraan</a>
          <button type="button" class="btn btn-danger text-light" style="font-size:12px">Berhentikan</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" class="sub-title text-center" style="font-size:14px;font-weight:600">Add New Device</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container" style="margin-bottom:20px">
            <form class="" action="index.html" method="post" style="width:100%">
              <div class="row">
                  <div class="col-12 text-center">
                    <center>
                      <div class="img-upload">
                        <img src="assets/img/camera.png" style="float:right;margin-right:5px;margin-top:5px;" class="img-camera" alt="">
                      </div>
                    </center>
                    <br>
                    <input type="text" class="sub-title text-form" placeholder="Honda Brio">
                    <input type="text" placeholder="B 1245 MM" class="text-form"><br>
                    <input type="text" placeholder="Device Number" class="text-form">
                    <input type="text" placeholder="Phone Number" class="text-form"><br><br>
                    <textarea class="text-ciri" placeholder="Ciri Kendaraan ..."></textarea>
                    <br>
                  </div>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn pink-bg text-light" style="font-size:12px">Save</button>
        </div>
      </div>
    </div>
  </div>
  </div>
