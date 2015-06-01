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
    <div id="fb-root"></div>
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li id='memberinfoli' role="presentation" sytle='display:none'><a id='memberinfo' href="../member/manage_event">會員資訊</a></li>
            <li role="presentation" data-toggle="modal" data-target="#login-dialog"><a href='javascript:;' >登入</a></li>
            <li role="presentation"><a href='../main/register' >註冊</a></li>
          </ul>
        </nav>
        <h3 class="text-muted"><a href='../main/index'>Gardenii</a></h3>
      </div>
      <div id="login-dialog" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" style='color: transparent;'>2</h4>
            </div>
            <div class="modal-body">
              <form id='loginform' class="form-horizontal">
                <div class="form-group">
                  <label for="inputAccount" class="col-sm-2 control-label">帳號</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputAccount"></input>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword" class="col-sm-2 control-label">密碼</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword"></input>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer" style='text-align:center'>
              <button class="btn btn-default" data-dismiss="modal"><a href='../main/index'>登入</a></button>
            </div>
          </div>
        </div>
      </div>
      
  </head>
