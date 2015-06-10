<?php
$config['facebook']['api_id'] = '1458009167830285';
$config['facebook']['app_secret'] = '91151d813757b270b6400d9e80d3a772';
$config['facebook']['redirect_url'] = "http://".$_SERVER['SERVER_NAME']."/gardenii-eticket/index.php/fb/login_handler";
$config['facebook']['permissions'] = array(
  'email',
  'user_location',
  'user_birthday'
);