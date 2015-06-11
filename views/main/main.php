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
        <div class="list-group" id='activitycontainer'>
          <!-- <div class="list-group-item">
            <a href='/gardenii-eticket/index.php/main/event'>
              <div class="row-picture">
                <img class="circle" src="http://lorempixel.com/56/56/people/6" alt="icon">
              </div>
              <div class="row-content">
                <h4 class="list-group-item-heading">活動名稱</h4>
                <p class="list-group-item-text">活動描述</p>
              </div>
            </a>  
          </div>
          <div class="list-group-separator"></div> -->
        </div>
      </div>
    
      <?php if ($user['logged_in']): ?>
      <div class="btn-group btn-group-justified" id='launchauth'>
        <a href="" class="btn btn-primary">我要辦活動</a>
      </div>
      <?php endif; ?>

      <?php $this->load->view("/footer.php"); ?>
    </div>

    <!-- /container -->
    <script src="/gardenii-eticket/assets/js/jquery.tmpl.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){

        var isLoggedIn = <?php echo ($user['logged_in']?'true':'false'); ?>;
        
        $('#launchauth').on( "click", function(){

          if (isLoggedIn) {
            var authority = <?php echo ($user['auth']?"true":"false"); ?>;
            if(authority){
              $(this).find('a').attr('href','/gardenii-eticket/index.php/member/launch');
            }
            else{
              $(this).find('a').attr('href','/gardenii-eticket/index.php/member/apply');
            }
          } else {
            alert("請先登入會員");
          }
        });

        var markup = '<div class="list-group-item"> \
            <a href="/gardenii-eticket/index.php/main/event/${event_id}"> \
              <div class="row-picture"> \
                <img class="circle" src="/gardenii-eticket/assets/images/events/${decodeURIComponent(event_photo)}" alt="icon"> \
              </div> \
              <div class="row-content"> \
                <h4 class="list-group-item-heading">${decodeURIComponent(event_title)}</h4> \
                <p class="list-group-item-text">${decodeURIComponent(event_description)}</p> \
              </div> \
            </a> \
          </div> \
          <div class="list-group-separator"></div>'

        $.template( "eventTemplate", markup );

        $.get('/gardenii-eticket/index.php/api/event', function(data) {
          var events = jQuery.parseJSON(data).events;
          
          for (var e in events){
            $.tmpl("eventTemplate", events[e]).appendTo('#activitycontainer');
          }
          
        });

      });
    </script>    
    <!--<script src="/gardenii-eticket/assets/js/launchauth.js"></script>-->

  </body>
</html>
