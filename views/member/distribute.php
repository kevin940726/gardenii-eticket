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
    <link rel="stylesheet" href="/gardenii-eticket/assets/css/font-awesome.min.css"/>

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
            <li id='memberinfoli' role="presentation" sytle='display:none'><a id='memberinfo' href="../member/manage_event">會員資訊</a></li>
            <li role="presentation"><a id='login' href="../main/index"></a></li>
          </ul>
        </nav>
        <h3 class="text-muted"><a href='../main/index'>Gardenii</a></h3>
      </div>

      <h4 class="text-muted" style='text-align:center'>分票</h4>
      <a href='javascript:;' id='addemail'><i class="fa fa-user-plus"></i></a>
      <form id='distributeform' class="form-horizontal col-md-12">
        <div class="form-group distribute">
          <select class="form-control" id='select' title='選擇區域'>
            <option>A1</option>
            <option>A2</option>
          </select>
          <div id='email'>
            <input type='text' class='form-control floating-label' id='inputEmail' placeholder='請輸收票人Email'>
          </div>
        
        </div>

        
      </form>
      <div style='text-align:center'>
        <a href="booksuccess.html" class="btn btn-primary btn-raised">送出</a>
      </div>

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
    <script src="/gardenii-eticket/assets/js/distribute.js"></script>
    <script src="/gardenii-eticket/assets/js/fblogin.js"></script>
    <script>
      $.material.init();
    </script>

  </body>
</html>
