<?php
    require_once './vendor/autoload.php';
    $fb = new Facebook\Facebook([
        'app_id' => '384590035054335',
        'app_secret' => 'f1469729370c9cb96d8db41e9e540a1a',
        'default_graph_version' => 'v2.5',
    ]);


    //$fb = new Facebook\Facebook([/* . . . */]);

    $helper = $fb->getRedirectLoginHelper();
    $permissions = ['email', 'user_likes']; // optional
    $loginUrl = $helper->getLoginUrl('https://scimad-fbapitest.herokuapp.com/login-callback.php', $permissions);

    echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>'; 






















?>