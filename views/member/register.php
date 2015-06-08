<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="E-ticket prototype">
    <meta name="author" content="NTU IM 105">
    <link rel="icon" href="../../favicon.ico">

    <title>E-ticket</title>

    <!-- Bootstrap core CSS -->
    <link href="/gardenii-eticket/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="/gardenii-eticket/assets/css/material-fullpalette.min.css" rel="stylesheet"> -->
    <link href="/gardenii-eticket/assets/css/material.min.css" rel="stylesheet">
    <link href="/gardenii-eticket/assets/css/ripples.min.css" rel="stylesheet">
    <link href="/gardenii-eticket/assets/css/roboto.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/gardenii-eticket/assets/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="/gardenii-eticket/assets/css/font-awesome.min.css" />

    <!-- Custom styles for this template -->
    <link href="/gardenii-eticket/assets/css/app.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/gardenii-eticket/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->      
  </head>
  <body>
    <div class="container">
      <?php $this->load->view("/header.php"); ?>
      
      <div>
        <form id='resgisterform' class="form-horizontal" action="/gardenii-eticket/index.php/member/register_handler" method="POST">
          <div class="form-group">
            <label for="inputAccountReg" class="col-sm-2 control-label">帳號</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputAccountReg" name="account"></input>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPasswordReg" class="col-sm-2 control-label" >密碼</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPasswordReg" name="password"></input>
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
              <input type="text" class="form-control" id="inputNameReg" name="name"></input>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmailReg" class="col-sm-2 control-label">信箱</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmailReg" name="email"></input>
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
                  <button class="btn btn-default" data-dismiss="modal"><a>確定</a></button>
                </div>
              </div>
            </div>
          </div>
        </form>

      <?php $this->load->view("/footer.php"); ?>
    </div>
    <script src="/gardenii-eticket/assets/js/register.js"></script>

  </body>
</html>
