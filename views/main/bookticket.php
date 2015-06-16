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
    <script src="/gardenii-eticket/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->      
  </head>
  <style>
    .list-group-item-heading {
      font-family: "微軟正黑體";
    }
    .tooltip{
      background-color:black;
    }
    .tooltip .tooltip-inner {
      background-color: black;
      color:white;
    }
   /* .tooltip .tooltip-arrow {
       background-color: black;
       border-bottom-color: black;
        border: black; 
    }*/
  </style>
  <body>
    <div class="container">
      <?php $this->load->view("/header.php"); ?>
      <?= json_encode($user) ?>
      <div class="jumbotron">
        <div class="thumbnail">
          <img src="/gardenii-eticket/assets/images/events/<?php echo $event->event_photo; ?>">
        </div>
      </div>

      <div class="col-md-12">
        <div>
          <h2><?php echo $event->event_title; ?></h3>
        </div>
        <div>
          <h4><?php echo $event->event_description; ?></h2>
        </div>
        <hr>
        <div class="list-group col-md-6" id="activitylist">
          <div class="list-group-item">
            <div class="row-content">
              <h4 class="list-group-item-heading">活動時間</h4>
              <p class="list-group-item-text"><?php echo $event->event_time; ?></p>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row-content">
              <h4 class="list-group-item-heading">活動地點</h4>
              <p class="list-group-item-text"><?php echo $event->event_location; ?></p>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row-content">
              <h4 class="list-group-item-heading">座位形式</h4>
              <p class="list-group-item-text">
                <?php if($event->seat_type == '0'): ?>
                  依區域入座
                <?php elseif ($event->seat_type == '1'): ?>
                  對號入座
                <?php endif; ?> 
              </p>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row-content">
              <h4 class="list-group-item-heading">主辦單位</h4>
              <p class="list-group-item-text"><?php echo $event->event_host; ?></p>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row-content">
              <h4 class="list-group-item-heading">相關網站</h4>
              <p class="list-group-item-text"><a href="<?php echo $event->event_website;?>"><?php echo $event->event_website ?></a></p>
            </div>
          </div>      
        </div>
      </div>

      <form id='ticketform' class="form-horizontal col-md-12" action="/gardenii-eticket/index.php/main/bookticket_handler/<?php echo $event->event_id; ?>" method="post" accept-charset="utf-8">
        <fieldset>
          <legend>訂票人資訊</legend>
          <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">姓名</label>
            <div class="col-sm-10">
              <input name="buyer_name" type="text" class="form-control floating-label" id="inputName" value="<?= $user['name'] ?>"  placeholder="Name" required>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPhone" class="col-sm-2 control-label">手機</label>
            <div class="col-sm-10">
              <input name="buyer_phone" type="tel" class="form-control floating-label" id="inputPhone" placeholder="09xxxxxxxx">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">電子信箱</label>
            <div class="col-sm-10">
              <input name="buyer_email" type="email" class="form-control floating-label" id="inputEmail" value="<?= $user['email'] ?>" placeholder="Email" required>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPosition" class="col-sm-2 control-label">座位</label>
            <div class="col-sm-4">
              <input name="seat" type="text" class="form-control" id="inputPosition" placeholder="請選擇座位" readonly required>
            </div>
            <div class="col-sm-4">
              <button id='seatareabutton' type="button" class="btn btn-sm btn-primary btn-raised" data-toggle="modal" data-target="#seatModal">
                選擇座位
              </button>
            </div>

            <div class="modal fade" id="seatModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close btn btn-default" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 d="myModalLabel">選擇座位</h4>
                  </div>
                  <div class="modal-body" id="seatmodal-body">
                    <a href='javascript:;'> 
                      
                      <?php $this->load->view('/seat.php'); ?>
                    </a>  
                  </div>  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button id='savechange' data-dismiss="modal" type="button" class="btn btn btn-primary">確定</button>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="radio-inline radio radio-primary">
                <label>
                  <input type="radio" name="donate_way" id="optionsRadios1" value="1" checked>
                  線上捐款
                </label>
              </div>
              <div class="radio-inline radio radio-primary">
                <label>
                  <input type="radio" name="donate_way" id="optionsRadios2" value="2">
                  現場捐款
                </label>
              </div>
              <div class="radio-inline radio radio-primary">
                <label>
                  <input type="radio" name="donate_way" id="optionsRadiosˇ" value="3">
                  我不想捐款
                </label>
              </div>
            </div>        
          </div>

          <div class="form-group">
            <div style='text-align:center'>
              <?php if($user['logged_in']): ?>
                <input type='submit' class="btn btn-primary" data-toggle="modal" data-target="#launch-dialog" value="確定">
              <?php endif; ?>
            </div>
          </div>
        </fieldset>
      </form>
      <?php if($user['logged_in']==false): ?>
      <div class="form-group">
        <div style='text-align:center'>
            <a href='javascript:;'><button class="btn btn-primary">請先登入才能進行購票</button></a>
        </div>
      </div>
      <?php endif; ?>
      
  
      <?php $this->load->view("/footer.php"); ?>
  </div>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <script type="text/javascript">
      $(document).ready(function() {
        $('.seatstyle').hide();
        $('.seatstyle').addClass('ticketseatstyle');
        $('.seatstyle').removeClass('seatstyle');

        var site_type = "#"+"<?php echo $event->site_type; ?>";
        $(site_type).show();

        var ordered_area = <?php echo $ordered_area; ?>;
        
        ordered_area.forEach(function(a) {
          $('.'+a).css('background-color', 'grey')
          $('.'+a).parent().css('background-color', 'grey');
        });

        var seat_info_str = '<?php echo $seat_info; ?>';
        var seat_info = JSON.parse(seat_info_str);
        console.log(seat_info);
        $(seat_info.seat_info).each(function(i,seat){
          
          $("."+seat.block_name).attr("data-toggle","tooltip");
          $("."+seat.block_name).attr(
            "title",
              "區域容納人數 : "+seat.block_max_seat +"<br/> "+
              "建議捐款金額 : "+seat.suggest_donate_amount
            );
        });
         $('[data-toggle="tooltip"]').tooltip({
            html: true,
            delay: { "show": 0, "hide": 0 }

         }); 
      });
    </script>
    <script src="/gardenii-eticket/assets/js/bookticket.js"></script>

  </body>
</html>
