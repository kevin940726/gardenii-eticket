
<?php $this->load->view("/header.php"); ?>

  <body>

      <div class="jumbotron">
        <h1>活動標題</h1>
        <p class="lead">活動描述</p>
      </div>


      <div class="list-group col-md-6" id="activitylist">
        <div class="list-group-item">
          <div class="row-content">
            <h4 class="list-group-item-heading">時間</h4>
            <p class="list-group-item-text">2015/05/29</p>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row-content">
            <h4 class="list-group-item-heading">地點</h4>
            <p class="list-group-item-text">台大總圖</p>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row-content">
            <h4 class="list-group-item-heading">主辦單位</h4>
            <p class="list-group-item-text">台大</p>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row-content">
            <h4 class="list-group-item-heading">相關網站</h4>
            <p class="list-group-item-text"><a href='www.google.com'>www.google.com</a></p>
          </div>
        </div>        
      </div>

      <div class="col-md-6 col-sm-6 map">
        <div id="map">地理位置</div>
      </div>

      <form id='ticketform' class="form-horizontal col-md-12">
        <fieldset>
          <legend>訂票人資訊</legend>
          <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">電子信箱</label>
            <div class="col-sm-10">
              <input type="email" class="form-control floating-label" id="inputEmail" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">姓名</label>
            <div class="col-sm-10">
              <input type="text" class="form-control floating-label" id="inputName" placeholder="Name">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPhone" class="col-sm-2 control-label">手機</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control floating-label" id="inputPhone" placeholder="09xxxxxxxx">
            </div>
          </div>

          <div class="form-group">
            <label for="inputPosition" class="col-sm-2 control-label">座位</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="inputPosition" placeholder="請選擇座位" disabled value="">
            </div>
            <div class="col-sm-4">
              <button id='seatareabutton' type="button" class="btn btn-sm btn-material-light-blue btn-raised" data-toggle="modal" data-target="#seatModal">
                選擇座位
              </button>
            </div>

            <div class="modal fade" id="seatModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 d="myModalLabel">選擇座位</h4>
                  </div>
                  <div class="modal-body" id="seatmodal-body">
                    <div id='A' class='seatborder'> 
                      <div class='seat'>
                        <a href="javascript:;">A1</a>
                      </div>
                      <div class='seat'>
                        <a href="javascript:;">A2</a>
                      </div>
                      <div class='seat'>
                        <a href="javascript:;">A3</a>
                      </div>
                      <div class='seat'>
                        <a href="javascript:;">A4</a>
                      </div>
                    </div>  
                    <div id='B' class='seatborder'> 
                      <div class='seat'>
                        <a href="javascript:;">B1</a>
                      </div>
                      <div class='seat'>
                        <a href="javascript:;">B2</a>
                      </div>
                      <div class='seat'>
                        <a href="javascript:;">B3</a>
                      </div>
                      <div class='seat'>
                        <a href="javascript:;">B4</a>
                      </div>
                    </div>  
                    <div id='C' class='seatborder'> 
                      <div class='seat'>
                        <a href="javascript:;">C1</a>
                      </div>
                      <div class='seat'>
                        <a href="javascript:;">C2</a>
                      </div>
                      <div class='seat'>
                        <a href="javascript:;">C3</a>
                      </div>
                      <div class='seat'>
                        <a href="javascript:;">C4</a>
                      </div>
                    </div>             
                    <div id='D' class='seatborder'> 
                      <div class='seat'>
                        <a href="javascript:;">D1</a>
                      </div>
                      <div class='seat'>
                        <a href="javascript:;">D2</a>
                      </div>
                      <div class='seat'>
                        <a href="javascript:;">D3</a>
                      </div>
                      <div class='seat'>
                        <a href="javascript:;">D4</a>
                      </div>
                    </div> 
                    
                    <div id='E' class='seatborder'> 
                      <div class='seat'>
                        <a href="javascript:;">E1</a>
                      </div>
                      <div class='seat'>
                        <a href="javascript:;">E2</a>
                      </div>
                      <div class='seat'>
                        <a href="javascript:;">E3</a>
                      </div>
                      <div class='seat'>
                        <a href="javascript:;">E4</a>
                      </div>
                    </div>                                  
                  </div>  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button id='savechange' data-dismiss="modal" type="button" class="btn btn-material-blue">Save changes</button>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="radio-inline radio radio-primary">
                <label>
                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                  線上捐款
                </label>
              </div>
              <div class="radio-inline radio radio-primary">
                <label>
                  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                  當場捐款
                </label>
              </div>
              <div class="radio-inline radio radio-primary">
                <label>
                  <input type="radio" name="optionsRadios" id="optionsRadiosˇ" value="optionˇ">
                  我不想捐款
                </label>
              </div>
            </div>        
          </div>

          <div class="form-group">
            <div class="col-sm-offset-1 col-sm-10">
              <button type="submit" class="btn btn-"><a href='../member/distribute'>確定</a></button>
            </div>
          </div>
        </fieldset>
      </form>
  
      <footer class="footer col-md-12">
        <p>&copy; Company 2014</p>
      </footer>
   

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/gardenii-eticket/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="/gardenii-eticket/assets/js/bootstrap.min.js"></script>
    <script src="/gardenii-eticket/assets/js/material.min.js"></script>
    <script src="/gardenii-eticket/assets/js/ripples.min.js"></script>
    <script src="/gardenii-eticket/assets/js/bookticket.js"></script>
    <script src="/gardenii-eticket/assets/js/fblogin.js"></script>

    <script>
      $.material.init();
    </script>
  </body>
</html>
