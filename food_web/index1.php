<?php
include("connection.php");
include("login.php")
?>

<html>

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="form">
        <h1 id="heading">Login Form</h1><br>
        <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
            <i class="fa fa-user fa-lg"></i>
            <input type="text" id="user" name="user" placeholder="Enter Username" required></br></br>
            <i class="fa-solid fa-lock fa-lg"></i>
            <input type="password" id="pass" name="pass" placeholder="Create Password" required></br></br>
            <input type="submit" id="btn" value="Login" name="submit" />
        </form>
        <div class="bottom-link">You create an other account? <a href="index.php" id="login-link">Signu p</a>
        </div>

        <!-- <div id="form">
            <h1>Login Form</h1>
            <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
                <label>Username: </label>
                <input type="text" id="user" name="user"></br></br>
                <label>Password: </label>
                <input type="password" id="pass" name="pass"></br></br>
                <input type="submit" id="btn" value="Login" name = "submit"/>
            </form>
        </div> -->
        <script>
            function isvalid() {
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if (user.length == "" && pass.length == "") {
                    alert(" Username and password field is empty!!!");
                    return false;
                } else if (user.length == "") {
                    alert(" Username field is empty!!!");
                    return false;
                } else if (pass.length == "") {
                    alert(" Password field is empty!!!");
                    return false;
                }

            }
        </script>
</body>

</html>