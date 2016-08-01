<?php
    require_once './vendor/autoload.php';
    
    $fb = new Facebook\Facebook([
        'app_id' => '384590035054335',
        'app_secret' => 'f1469729370c9cb96d8db41e9e540a1a',
        'default_graph_version' => 'v2.5',
    ]);

    $helper = $fb->getJavaScriptHelper();
    try {
      $accessToken = $helper->getAccessToken();
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
      // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (isset($accessToken)) {
  // Logged in
    echo "Authorised";
}else{
    echo "Not Authorised";
}