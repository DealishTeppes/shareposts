<?php
// Load Config
require_once 'config/config.php';

//Load Helers
require_once 'helpers/url_helper.php';
require_once 'helpers/session_helper.php';

//Autload Core libraries !class name = file name
spl_autoload_register(function($className){
  require_once 'libraries/'.$className.'.php';
});