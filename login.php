<html>
<head>
    <title>login</title>
</head>
<body>
<form>
    <center>
        <label>Email:</label><br>
        <input type="email" id="u_email" required="required">
        <br><br>
    </center>
    <center>
        <label>Password:</label><br>
        <input type="password" id="u_password" required="required">
        <br><br>
    </center>
    <center>
        <button type="button" onclick="loginUser();">Login</button>
    </center>
</form>





<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.0.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyCkF7HIRapw24h4tvF4Taog6YOzeeWAcdU",
        authDomain: "fir-tutorials-9da97.firebaseapp.com",
        databaseURL: "https://fir-tutorials-9da97.firebaseio.com",
        projectId: "fir-tutorials-9da97",
        storageBucket: "fir-tutorials-9da97.appspot.com",
        messagingSenderId: "459411588585",
        appId: "1:459411588585:web:aaa3e726192e92a9"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
</script>
<script src="js/loginfile.js" type="text/javascript"></script>
</body>
</html>