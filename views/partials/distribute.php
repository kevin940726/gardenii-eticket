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
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/material-fullpalette.min.css" rel="stylesheet">
    <link href="../css/material.min.css" rel="stylesheet">
    <link href="../css/ripples.min.css" rel="stylesheet">
    <link href="../css/roboto.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/app.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

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

      <h4 class="text-muted" style='text-align:center'>分票</h4>
      
      <div class='col-md-12'>
        <label for='inputEmail' class='col-sm-1 control-label'>A1</label>
        <div class='col-sm-11'>
          <input type='text' class='form-control floating-label' id='inputEmail' placeholder='請輸收票人Email，用逗號隔開'>
        </div>
      </div>
      <div style='text-align:center'>
        <a href="booksuccess.html" class="btn btn-primary btn-raised">送出</a>
      </div>


      <footer class="footer">
        <p>&copy; Company 2014</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/material.min.js"></script>
    <script src="../js/ripples.min.js"></script>
    <script>
      $.material.init();
    </script>

  </body>
</html>
