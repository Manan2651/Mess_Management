<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="google-signin-client_id"
        content="551695305361-rbrjg49ldmv06trv7sfqd0457mac0533.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script>gapi.load('auth2', function () {gapi auth2.init();
        });</script>
</head>

<body>

    <div class="login">
        <div class="login1">
            <form action="admin_panel.php" method="post">
                <!-- <h1>Login</h1> -->
                <div class="loginlogo">
                    <label class="loginlogo1">Login</label>
                </div>
                <label class="Userlable">Username</label>
                <input type="text" class="UserName" placeholder="Enter Username"><br><br>
                <label class="passlable">Password</label>
                <input type="password" class="password" id="myInput" placeholder="Enter Password"><br>
                <input type="checkbox" onclick="myFunction()">Show Password<br><br>
                <input type="submit" class="btn1"><br><br>
                <div class="googlelogin">Or Sign Up Using</div>
                <!-- <div class="g-signin2" data-onsuccess="onSignIn">
                    <input type="submit">
                </div> -->
                <div class="googlelogo g-signin2" data-onsuccess="onSignIn">
                    <!-- <a href="admin_panel.php" class="google bg3">G</a> -->
                </div>
                <div class="signup">
                    <label class="googlelogin">Or SignUp Here</label>
                    <a href="user_registration.php" class="signuplink">SIGN UP</a>
                </div>
            </form>
        </div>
    </div>
    <script>function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            window.location.replace("http://localhost/hackvgec/admin_panel.php");
            console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
            console.log('Name: ' + profile.getName());
            console.log('Image URL: ' + profile.getImageUrl());
            console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
        }
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }</script>
</body>


</html>