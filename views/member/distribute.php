<?php $this->load->view("/header.php"); ?>

  <body>

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
