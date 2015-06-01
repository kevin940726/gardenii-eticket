<?php $this->load->view("/header.php"); ?>

  <body>
      
      <div>
        <form id='resgisterform' class="form-horizontal">
          <div class="form-group">
            <label for="inputAccountReg" class="col-sm-2 control-label">帳號</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputAccountReg"></input>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPasswordReg" class="col-sm-2 control-label">密碼</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPasswordReg"></input>
            </div>
          </div>
          <div class="form-group">
            <label for="inputNameReg" class="col-sm-2 control-label">姓名</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputNameReg"></input>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmailReg" class="col-sm-2 control-label">信箱</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmailReg"></input>
            </div>
          </div>
          <div class="form-group">
            <div style='text-align:center'>
              <button type='submit' class="btn btn-primary" data-toggle="modal" data-target="#register-dialog">註冊</button>
            </div>
          </div>
          <div id="register-dialog" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                  <h3 style='text-align:center'>註冊成功！</h3>
                </div>
                <div class="modal-footer" style='text-align:center'>
                  <button class="btn btn-default" ><a href='../main/index'>確定</a></button>
                </div>
              </div>
            </div>
          </div>

        </form>



      <?php $this->load->view("/footer.php"); ?>

    
    <script src="/gardenii-eticket/assets/js/register.js"></script>

  </body>
</html>
