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

      <form method="post" accept-charset="utf-8" action="/gardenii-eticket/index.php/member/publish_event" id='launchform' class="form-horizontal">
        <div class="form-group">
          <label for="inputTitle" class="col-sm-2 control-label">活動標題</label>
          <div class="col-sm-10">
            <div class='inputs'>
            <input type="text" class="form-control" name="event_title" id="inputTitle" placeholder="活動標題"></input>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="inputDescript" class="col-sm-2 control-label">活動描述</label>
          <div class="col-sm-10">
            <textarea class="form-control" id="inputDescript" name="event_description" placeholder="活動描述"></textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="inputTime" class="col-sm-2 control-label">時間</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="event_time" id="inputTime">
          </div>
        </div>

        <div class="form-group">
          <label for="inputPlace" class="col-sm-2 control-label">地點</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="event_location" id="inputPlace">
          </div>
        </div>       

        <div class="form-group">
          <label for="inputHost" class="col-sm-2 control-label">主辦單位</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="event_host" id="inputHost"/>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPic" class="col-sm-2 control-label">活動圖片</label>
          <div class="col-sm-10">
            <input style='outline:none' type="file" class="file" name="event_photo" id="inputPic">
          </div>
        </div>

        <div class="form-group">
          <label for="inputSeatType" class="col-sm-2 control-label">座位形式</label>
          <div class="col-sm-10">
            <input type="radio" class="form-control" name="seat_type" id="inputSeatType" value="0">依區域入座
            <input type="radio" class="form-control" name="seat_type" id="inputSeatType" value="1">對號入座
          </div>
        </div>

        <div class="form-group">
          <label for="inputSeat" class="col-sm-2 control-label">場地劃分方式</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputSeat" name="site_type" readonly value="">
          </div>
          <div class="col-sm-4">
            <button id='seatareabutton' type="button" class="btn btn-sm btn-primary btn-raised" data-toggle="modal" data-target="#seatstyle-dialog">
              選擇場地劃分方式
            </button>
          </div>
        </div>

        <div id="seatstyle-dialog" class="modal fade" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 d="myModalLabel" style='text-align:center'>請選擇一種劃分方式</h4>
              </div>
              <div class="modal-body">                       
                 <?php $this->load->view("/seat.php"); ?>
              </div>
              <div class="modal-footer" style='text-align:center'>
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button id='savechange' data-dismiss="modal" type="button" class="btn btn btn-primary">確定</button>
              </div>
            </div>
          </div>
        </div>
        
        <div class="form-group">
          <label for="inputCom" class="col-sm-2 control-label">相關網站</label>
          <div class="col-sm-10">
            <input type="tel" class="form-control" name="website" id="inputCom">
          </div>
        </div>  

        <div class="form-group">
          <div style='text-align:center'>
            <input type='submit' class="btn btn-primary" data-toggle="modal" data-target="#launch-dialog" value="確定">
          </div>
        </div>

      </form>
<!--       <div id="launch-dialog" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
              <h3 style='text-align:center'>舉辦成功！</h3>
            </div>
            <div class="modal-footer" style='text-align:center'>
              <button class="btn btn-primay"><a href='../main/index'>確定</a</button>
            </div>
          </div>
        </div>
      </div> -->



     <?php $this->load->view("/footer.php"); ?>
  </div>

    <script src="/gardenii-eticket/assets/js/launch.js"></script>

  </body>
</html>
