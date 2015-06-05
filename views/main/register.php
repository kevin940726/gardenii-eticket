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
              <input type="password" class="form-control" id="inputPasswordReg"></input>
            </div>
          </div>
          <div class="form-group">
            <label for="inputConfirmPasswordReg" class="col-sm-2 control-label">確認密碼</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputConfirmPasswordReg"></input>
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
              <input type="email" class="form-control" id="inputEmailReg"></input>
            </div>
          </div>
          <br>
          <div class="form-group">
            <ul>
              <li>會員資料請詳實填寫，如有錯誤、不實而導致損失，會員應自行負責。</li>
              <li>嚴禁以不同身分重複註冊，註冊資料經查證後如非屬實，本公司有權取消其會員資格。若您冒用他人名義造成損失，網站將保留法律追訴權。</li>
              <li>註冊會員後，請務必妥善保管帳號及密碼，且不得供他人使用，以維護您本身權益。若會員未能妥善保存帳號資料而致權益受損，本公司概不負責。</li>
              <li>您在網站所登錄或留存之個人資料將嚴密受到保護，未經您同意，本公司將不會挪做他途。</li>
            </ul>
          </div>
          <div class="form-group">
            <div style='text-align:center'>
              <button type='submit' class="btn btn-primary" data-toggle="modal" data-target="#register-dialog">同意</button>
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
                  <button class="btn btn-default" data-dismiss="modal"><a href='../main/index'>確定</a></button>
                </div>
              </div>
            </div>
          </div>
        </form>

      <?php $this->load->view("/footer.php"); ?>
    
    <script src="/gardenii-eticket/assets/js/register.js"></script>

  </body>
</html>
