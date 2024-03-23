<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Log In</title>
        <link rel="stylesheet" href="Style.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;700&display=swap" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    </head>

    <body class="login">
        <script src="script.js"></script>

        <div class="center">
            <form action="" method="post" class="login-panel">
                <h1>Log In</h1>
                <div class="row login">
                    <img src="user.png" alt="User Icon">
                    <input type="text" name="username" id="username" placeholder="Username" class="text-field login" />
                </div>
                <div class="row login">
                    <img src="lock.png" alt="Lock Icon">
                    <input type="password" name="passwd" id="passwd" placeholder="Password" class="text-field login" />
                </div>

                <input type="submit" class="btn-login" name="LogIn" value="LOG IN" style="background-color: #4CA82C;">
                
                <a href="SignUp.php">Register Now!</a>
            </form>
        </div>
    </body>
</html>