<?php $this->load->view("/header.php"); ?>

  <body>
      
      <div>
       <div class="list-group" id='activitycontainer'>
        <div class="list-group-item">
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
        <div class="list-group-separator"></div>

      </div>
    </div>
    
    <div class="btn-group btn-group-justified" id='launchauth'>
      <a href="" class="btn btn-primary">我要辦活動</a>
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
    <script src="/gardenii-eticket/assets/js/launchauth.js"></script>
    <script src="/gardenii-eticket/assets/js/fblogin.js"></script>
    <script>
      $.material.init();
    </script>
  </body>
</html>
