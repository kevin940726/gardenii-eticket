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

      <div class="jumbotron">
        <h1>活動標題</h1>
        <p class="lead">活動描述</p>
      </div>

      <div class="col-md-12">
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
          <div class="col-md-12"></div>
        </div>
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
                      <div id="9" class='ticketseatstyle'>    
                        <table>
                          <tr>
                            <td class='stage' colspan="3"><div>舞台</div></td>
                          </tr>
                          <tr>
                            <td><a href='javascript:;'><div>1</div></a></td>
                            <td><a href='javascript:;'><div>2</div></a></td>
                            <td><a href='javascript:;'><div>3</div></a></td>
                          </tr>
                          <tr>
                            <td><a href='javascript:;'><div>4</div></a></td>
                            <td><a href='javascript:;'><div>5</div></a></td>
                            <td><a href='javascript:;'><div>6</div></a></td>
                          </tr>
                          <tr>
                            <td><a href='javascript:;'><div>7</div></a></td>
                            <td><a href='javascript:;'><div>8</div></a></td>
                            <td><a href='javascript:;'><div>9</div></a></td>
                          </tr>
                        </table>     
                      </div> 
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
            <div style='text-align:center'>
              <button type="submit" class="btn btn-primary">確定</button>
            </div>
          </div>
        </fieldset>
      </form>
  
      <?php $this->load->view("/footer.php"); ?>
  </div>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <script src="/gardenii-eticket/assets/js/bookticket.js"></script>

  </body>
</html>
