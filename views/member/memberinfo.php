<?php $this->load->view("/header.php"); ?>

  <body>

    
      <div>
       <div class="list-group" id='activitycontainer'>
        <h2>己舉辦的活動</h2>
        <div class="list-group-item">
          <a href='./manage_ticket'>
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
          <a href='../main/event'>
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




     <?php $this->load->view("/footer.php"); ?>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/gardenii-eticket/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="/gardenii-eticket/assets/js/bootstrap.min.js"></script>
    <script src="/gardenii-eticket/assets/js/material.min.js"></script>
    <script src="/gardenii-eticket/assets/js/ripples.min.js"></script>
    <script src="/gardenii-eticket/assets/js/bookticket.js"></script>
    <script>
      $.material.init();
    </script>
  </body>
</html>
