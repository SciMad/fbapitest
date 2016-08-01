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
    // ADD ADDITIONAL FACEBOOK CODE HERE
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

<script type="text/javascript">
    
function onLogin(response) {
    console.log("I am working 11");
    if (response.status == 'connected') {
        console.log("I am connected 22");
        FB.api('/me?fields=first_name', function(data) {
            var welcomeBlock = document.getElementById('fb-welcome');
            welcomeBlock.innerHTML = 'Hello, ' + data.first_name + '!';
        });
    }
}



FB.getLoginStatus(function(response) {

    console.log("I am working 33");
    // Check login status on load, and if the user is
    // already logged in, go directly to the welcome message.
    if (response.status == 'connected') {
        
    console.log("I am working 44");
        onLogin(response);
    } else {
    // Otherwise, show Login dialog first.
    FB.login(function(response) {
        onLogin(response);
    }, {scope: 'user_friends, email'});
}
});

</script>



</body>
</html>
