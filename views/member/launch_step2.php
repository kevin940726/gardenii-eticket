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
    <!--<script src="/gardenii-eticket/js/ie-emulation-modes-warning.js"></script>-->

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
        <div>
          <?php $this->load->view("/seat.php"); ?>
        </div>
        <hr/>
        <form method="post" accept-charset="utf-8" action="" id='seatform' class="form-horizontal">
          <div>
          <?php foreach($character as $index=>$value) : ?>
            <input type="hidden" value="<?php echo $value; ?>" name="info['<?php echo $index; ?>']['block_name']">
            <div>
              <h3><?php echo $value ?> 區</h3>
            </div>
            <div class="form-group">
              <label for="inputTitle" class="col-sm-2 control-label">可容納人數</label>
              <div class="col-sm-10">
                <div class='inputs'>
                <input type="text" class="form-control" name="info['<?php echo $index; ?>']['block_max_seat']"></input>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="inputTitle" class="col-sm-2 control-label">建議捐獻金額</label>
              <div class="col-sm-10">
                <div class='inputs'>
                <input type="text" class="form-control" name="info['<?php echo $index; ?>']['suggest_donate_amount']"></input>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          </div>
          <div class="form-group">
          <div style='text-align:center'>
            確定
            <!-- <input type='submit' class="btn btn-primary" data-toggle="modal" data-target="#launch-dialog" value="確定"> -->
          </div>
        </div>
        </from>
      </div>
      <?php $this->load->view("/footer.php"); ?>
    </div>
  </body>
</html>

<script type="text/javascript">
  $(document).ready(function($) {
    $('.seatstyle').hide();

    var site_type = "#"+"<?php echo $event->site_type; ?>";
    $(site_type).show();

  });

</script>
