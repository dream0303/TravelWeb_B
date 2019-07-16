
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">assignment</i>
                    </div>
                    <h4 class="card-title">景點列表</h4>
                  </div>
                  <div class="card-body">
                    <div class="toolbar">
                      <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <div class="material-datatables">
                      <table class="table table-hover table-light my-2 rounded table-rwd mx-auto" id="side">
                        <thead class="thead-dark rounded tr-hide">
                          <tr>
                            <th>名稱</th>
                            <th>地址</th>
                            <th>開放時間</th>
                            <th style="display:none">隱藏的詳細介紹</th>
                            <th style="display:none">隱藏的電話</th>
                            <th>詳細介紹</th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php
                                include "./opendataLand.php";
                            ?>


                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- end content-->
                </div>
                <!--  end card  -->
              </div>
              <!-- end col-md-12 -->
            </div>
            <!-- end row -->
          </div>

  <!-- 彈跳視窗 -->
  <div class="modal fade" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- <img src="" alt="" srcset=""class="w-100 modal-img"><br><br> -->
          <h6>介紹:<br><br>
            <span class="modal-txt"></span></h6><br><br>
          <h6><i class="fas fa-map-marker-alt text-success"></i>&nbsp;&nbsp;地址:<span class="modal-addr"></span></h6>
          <h6><i class="fas fa-phone-alt text-success"></i>&nbsp;電話:<span class="modal-tel"></span></h6>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
      </div>
    </div>
  </div>