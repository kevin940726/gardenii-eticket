<?php $this->load->view("/header.php"); ?>

  <body>


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
        <a href="../main/index" class="btn btn-primary btn-raised">送出</a>
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
