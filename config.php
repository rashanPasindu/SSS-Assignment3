<?php
 session_start();
 require_once "Facebook/autoload.php";

 $FB = new \Facebook\Facebook([
  'app_id' => '236951346867531',
  'app_secret' => 'f4da483fbe07e05902532c8af9ea311a',
  'default_graph_version' => 'v3.0'
 ]);

 $helper = $FB->getRedirectLoginHelper();
?>