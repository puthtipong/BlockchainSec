<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Log In</title>
</head>

<body>
    <div class="center">
        <form action="LogIn.php" method="post" class="formInput" id="loginForm">
            <h1>Log In</h1>
            <div>
                <img src="user.png" alt="User Icon">
                <input type="text" name="username" id="username" placeholder="Username" required>
            </div>
            <div>
                <img src="lock.png" alt="Lock Icon">
                <input type="password" name="pwd" id="pwd" placeholder="Password" required>
            </div>
            <input type="submit" name="LogIn" value="LOG IN">
            <p class="switchPage">
                <a href="SignUp.php">Register Now!</a>
            </p>
        </form>
    </div>
    <p style="display: flex; justify-content: center; align-items: center; margin: -20vh 0 0 0; padding: 0;" id="loginMessage"></p>

    <script>
        document.getElementById("loginForm").addEventListener("submit", function(event) {
            event.preventDefault();

            var username = document.getElementById("username").value;
            var password = document.getElementById("pwd").value;

            //dummy credentials
            var validUser = "admin";
            var validPass = "admin1234";

            if (username === validUser && password === validPass) {
                window.location.href = "https://www.siit.tu.ac.th";
            }
            else {
                document.getElementById("loginMessage").innerText = "Invalid Username or Password. Please try again.";
            }
        });
    </script>
</body>