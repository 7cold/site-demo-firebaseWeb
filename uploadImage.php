<html>

<head>
    <title>upload image to firebase</title>
</head>

<body>
    <center>
        <form enctype="multipart/form-data">
            <label>select image : </label>
            <input type="file" id="image" accept="image/*"><br><br>
            <button type="button" onclick="upload()">Upload</button>
        </form>
    </center>






    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

    <script>
        // Your web app's Firebase configuration
        var firebaseConfig = {
            apiKey: "AIzaSyCDuqZA3JLbIgsef8Zb4fOygBGyQo1n8Tw",
            authDomain: "testenoticias-461b1.firebaseapp.com",
            databaseURL: "https://testenoticias-461b1.firebaseio.com",
            projectId: "testenoticias-461b1",
            storageBucket: "testenoticias-461b1.appspot.com",
            messagingSenderId: "339453670405",
            appId: "1:339453670405:web:615ee142d1dab26709586c"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
    </script>
    <script type="text/javascript" src="js/uploadimage.js"></script>
</body>

</html>