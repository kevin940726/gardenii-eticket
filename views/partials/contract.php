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
    <link href="/gardenii-eticket/assets/css/material-fullpalette.min.css" rel="stylesheet">
    <link href="/gardenii-eticket/assets/css/material.min.css" rel="stylesheet">
    <link href="/gardenii-eticket/assets/css/ripples.min.css" rel="stylesheet">
    <link href="/gardenii-eticket/assets/css/roboto.min.css" rel="stylesheet">

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

   <div id="fb-root"></div>
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li id='memberinfo' role="presentation"><a href="memberinfo.html">會員資訊</a></li>
            <li role="presentation"><a id='login' href="../index.html">登出</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Gardenii</h3>
      </div>
      <div>
      <ul>
      <li>會員資料請詳實填寫，如有錯誤、不實而導致損失，會員應自行負責。</li>
      <li>  
嚴禁以不同身分重複註冊，註冊資料經查證後如非屬實，本公司有權取消其會員資格。若您冒用他人名義造成損失，網站將保留法律追訴權。
  </li>
  <li>  
註冊會員後，請務必妥善保管帳號及密碼，且不得供他人使用，以維護您本身權益。若會員未能妥善保存帳號資料而致權益受損，本公司概不負責。

  </li>
  <li>  
您在網站所登錄或留存之個人資料將嚴密受到保護，未經您同意，本公司將不會挪做他途。
  </li>
      </ul>
      </div>
      <form class="form-horizontal col-md-12">
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9">
            <div class="radio-inline radio radio-primary">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                同意
              </label>
            </div>
            <div class="radio-inline radio radio-primary">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                不同意
              </label>
            </div>
          </div>        
        </div>
        <div class="form-group">
          <div>
            <button type="submit" class="btn btn-default center-block"><a href='launch.html'>確定</a></button>
          </div>
        </div>
       </form> 

      <footer class="footer">
        <p>&copy; Company 2014</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/gardenii-eticket/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="/gardenii-eticket/assets/js/bootstrap.min.js"></script>
    <script src="/gardenii-eticket/assets/js/material.min.js"></script>
    <script src="/gardenii-eticket/assets/js/ripples.min.js"></script>
    <script src="/gardenii-eticket/assets/js/bookticket.js"></script>
    <script src="/gardenii-eticket/assets/js/fblogin.js"></script>
    <script>
      $.material.init();
    </script>

  </body>
</html>
