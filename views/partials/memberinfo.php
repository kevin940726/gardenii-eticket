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
            <li id='memberinfo' role="presentation"><a href="javascript:;">會員資訊</a></li>
            <li role="presentation"><a id='login' href="../index.html">登出</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Gardenii</h3>
      </div>
      <div>
       <div class="list-group" id='activitycontainer'>
        <h2>己舉辦的活動</h2>
        <div class="list-group-item">
          <a href='ticketrecord.html'>
            <div class="row-picture">
              <img class="circle" src="http://lorempixel.com/56/56/people/6" alt="icon">
            </div>
            <div class="row-content">
              <h4 class="list-group-item-heading">活動名稱</h4>
              <p class="list-group-item-text">活動描述</p>
            </div>
          </a>  
        </div>
        <div class="list-group-separator"></div>
      </div>
      <div>
       <div class="list-group" id='activitycontainer'>
        <h2>己參加的活動</h2>
        <div class="list-group-item">
          <a href='bookticket.html'>
            <div class="row-picture">
              <img class="circle" src="http://lorempixel.com/56/56/people/6" alt="icon">
            </div>
            <div class="row-content">
              <h4 class="list-group-item-heading">活動名稱</h4>
              <p class="list-group-item-text">活動描述</p>
            </div>
          </a>  
        </div>
        <div class="list-group-separator"></div>

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
