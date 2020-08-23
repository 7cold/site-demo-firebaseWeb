<html>
<head>
    <title>Retrieve data</title>
</head>
<body>
<center>
    <h2>Enter name of user to get information</h2>
    <input type="text" id="user" required="required"><br>
    <button type="button" onclick="getdata();">Get</button>
</center>
<center>
    <p>Name: <strong id="name"></strong></p>
    <p>Gender: <strong id="gender"></strong></p>
    <p>Country: <strong id="country"></strong></p>
</center>






<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyBK-juZ6krPJCHHELQgOW9sFUXsS9h3wHI",
        authDomain: "fir-web-b823f.firebaseapp.com",
        databaseURL: "https://fir-web-b823f.firebaseio.com",
        projectId: "fir-web-b823f",
        storageBucket: "fir-web-b823f.appspot.com",
        messagingSenderId: "463332404757",
        appId: "1:463332404757:web:68d04d3fdeeb333f"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
</script>
<script type="text/javascript" src="js/Read.js"></script>
</body>
</html>