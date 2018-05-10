<?php
require_once "config.php";

try{
$accessToken = $helper->getAccessToken();
}
catch(\Facebook\Exceptions\FacebookResponseException $e){
 echo "Response Exception: ". $e->getMessage();
 exit();
}
catch(\Facebook\Exceptions\FacebookSDKException $e){
 echo "Response Exception: ". $e->getMessage();
 exit();
}

if (!$accessToken)
{
 header(string: 'Location: letsGetConnectedLogin.php');
 exit();
}

 $oAuth2Client = $FB->getOAuth2Client();
 if (!$accessToken->isLongLived())
 {
  $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
  
  $response = $FB->get(endpoint:"/me?fields=id,name,email");
  $userData = $response->getGraphicNode()->asArray();
  $_SESSION['userData'] = $userData;
  $_SESSION['access_token'] = (string) $accessToken;
  header(string:'Location: index1.php');
?>