
<?php $this->load->view("/header.php"); ?>

  <body>



      <form id='launchform' class="form-horizontal">

        <div class="form-group">
          <label for="inputTitle" class="col-sm-2 control-label">活動標題</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputTitle" placeholder="活動標題"></input>
          </div>
        </div>

        <div class="form-group">
          <label for="inputDescript" class="col-sm-2 control-label">活動描述</label>
          <div class="col-sm-10">
            <textarea class="form-control" id="inputDescript" placeholder="活動描述"></textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="inputTime" class="col-sm-2 control-label">時間</label>
          <div class="col-sm-4 input-group date" id='inputTime'>
            <input type='text' class="form-control"/>
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPlace" class="col-sm-2 control-label">地點</label>
          <div class="col-sm-10">
            <input type="tel" class="form-control" id="inputPlace">
          </div>
        </div>       

        <div class="form-group">
          <label for="inputHost" class="col-sm-2 control-label">主辦單位</label>
          <div class="col-sm-10">
            <input type="tel" class="form-control" id="inputHost">
          </div>
        </div>

        <div class="form-group">
          <label for="inputPic" class="col-sm-2 control-label">活動圖片</label>
          <div class="col-sm-10">
            <input style='outline:none' type="file" class="file" id="inputPic">
          </div>
        </div>
        
        <div class="form-group">
          <label for="inputCom" class="col-sm-2 control-label">相關網站</label>
          <div class="col-sm-10">
            <input type="tel" class="form-control" id="inputCom">
          </div>
        </div>  

       <div class="form-group">
        <div style='text-align:center'>
          <button type='submit' class="btn btn-primary" data-toggle="modal" data-target="#launch-dialog">確定</button>
        </div>
      </div>

      </form>
      <div id="launch-dialog" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
              <h3 style='text-align:center'>舉辦成功！</h3>
            </div>
            <div class="modal-footer" style='text-align:center'>
              <button class="btn btn-primay"><a href='../main/index'>確定</a></button>
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
    <script type="text/javascript" src="/gardenii-eticket/assets/js/moment.min.js"></script>
    <script type="text/javascript" src="/gardenii-eticket/assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="/gardenii-eticket/assets/js/launch.js"></script>
    
    <script>
      $.material.init();
    </script>
  </body>
</html>
