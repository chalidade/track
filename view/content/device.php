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
            <button class="btn pink-bg text-light" data-toggle="modal" data-target="#addNew" style="font-size:12px">Add New</button>
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
          <h5 class="modal-title" class="sub-title" style="font-size:14px;font-weight:600">Honda Brio</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn pink-bg text-light" style="font-size:12px">Save</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" class="sub-title" style="font-size:14px;font-weight:600">Add New Device</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn pink-bg text-light" style="font-size:12px">Save</button>
        </div>
      </div>
    </div>
  </div>
