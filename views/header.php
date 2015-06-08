<div id="fb-root"></div>
<div class="header clearfix">
  <nav>
    <ul class="nav nav-pills pull-right">
      <?php if($user['logged_in']==true){ ?>
      <li id='memberinfoli' role="presentation" sytle='display:none'>
        <a id='memberinfo' href="/gardenii-eticket/index.php/member/index">
          <?php echo $user['account'];?>
        </a>
      </li>
      <li role="presentation"><a href='/gardenii-eticket/index.php/member/logout' >登出</a></li>
      <?php }else{ ?>
      <li role="presentation" data-toggle="modal" data-target="#login-dialog"><a href='javascript:;' >登入</a></li>
     <?php }?>
      <li role="presentation"><a href='/gardenii-eticket/index.php/member/register' >註冊</a></li>
    </ul>
  </nav>
  <h3 class="text-muted"><a href='../main/index'>Gardenii</a></h3>
</div>
<div id="login-dialog" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" style='color: transparent;'>2</h4>
      </div>
      <div class="modal-body">
        <form id="loginform" class="form-horizontal" method="POST" action="/gardenii-eticket/index.php/member/login" >
          <div class="form-group">
            <label for="inputAccount" class="col-sm-2 control-label">帳號</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputAccount" name="account"></input>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword" class="col-sm-2 control-label">密碼</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" name="password"></input>
            </div>
          </div>
          <div class="modal-footer" style='text-align:center'>
            <input class="btn btn-default" type="submit" value="登入"></input>
            <button class="btn btn-default" data-dismiss="modal"><a href="">Facebook 登入</a></button>
          </div>
        </form>
      </div> 
    </div>
  </div>
</div>
