<!DOCTYPE html>
<html>
<head>
    <title>FB-API test</title>
</head>
<body>
<script id="scimad00">
    window.fbAsyncInit = function() {
    FB.init({
        appId      : '384590035054335',
        xfbml      : true,
        version    : 'v2.7'
    });

    function onLogin(response) {
        console.log("I am logging a variable");
        console.log(response);
        if (response.status == 'connected') {
            FB.api('/me?fields=first_name', function(data) {
                var welcomeBlock = document.getElementById('fb-welcome');
                welcomeBlock.innerHTML = 'Hello, ' + data.first_name + '!';
            });
        }
    }

    FB.getLoginStatus(function(response) {
        // Check login status on load, and if the user is
        // already logged in, go directly to the welcome message.
        if (response.status == 'connected') {
            onLogin(response);
        } else {
            // Otherwise, show Login dialog first.
            FB.login(function(response) {
            onLogin(response);
            }, {scope: 'user_friends, email'});
        }
    });

    };
    (function(d, s, id){
        console.log("I am working 00");
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<h1 id="fb-welcome">Welcome</h1>


</body>
</html>
