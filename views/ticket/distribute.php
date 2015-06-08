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

      <h4 class="text-muted" >分票</h4>

      <form id='distributeform' class="form-horizontal col-md-12">

        <div class="form-group distributelist">
          <select class="form-control" id='select' title='選擇區域'>
            <option>A1</option>
            <option>A2</option>
          </select>
          <div id='email'>
            <input type='text' class='form-control floating-label' id='inputEmail' placeholder='請輸收票人Email'>
          </div>    
        </div>

        <a href='javascript:;' id='addemail'><i class="fa fa-user-plus"></i></a>

        <div style='text-align:center'>
          <button type='submit' class="btn btn-primary" data-toggle="modal" data-target="#distribute-dialog">送出</button>
        </div>
      </form>
      <div id="distribute-dialog" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
              <h3 style='text-align:center'>分票成功！</h3>
            </div>
            <div class="modal-footer" style='text-align:center'>
              <button class="btn btn-default" ><a href='../main/index'>確定</a></button>
            </div>
          </div>
        </div>
      </div>
      

     <?php $this->load->view("/footer.php"); ?>
  </div>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/gardenii-eticket/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="/gardenii-eticket/assets/js/bootstrap.min.js"></script>
    <script src="/gardenii-eticket/assets/js/material.min.js"></script>
    <script src="/gardenii-eticket/assets/js/ripples.min.js"></script>
    <script src="/gardenii-eticket/assets/js/distribute.js"></script>
    <script>
      $.material.init();
    </script>

  </body>
</html>
