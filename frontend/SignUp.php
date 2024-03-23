<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Sign Up</title>
        <link rel="stylesheet" href="Style.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;700&display=swap" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    </head>

    <body class="login">
        <script src="script.js"></script>

        <div class="center">
            <form action="" method="post" class="signup-panel">
                <h1>Sign Up</h1>
                <div class="row login">
                    <img src="user.png" alt="User Icon">
                    <input type="text" name="username" id="username" placeholder="Username" class="text-field login" />
                </div>
                <div class="row login">
                    <img src="mail.png" alt="Mail Icon">
                    <input type="text" name="email" id="email" placeholder="Email" class="text-field login" />     
                </div>
                <div class="row login">
                    <img src="lock.png" alt="Lock Icon">
                    <input type="password" name="passwd" id="passwd" placeholder="Password" class="text-field login" />
                </div>
                <div class="row login">
                    <img src="lock.png" alt="Lock Icon">
                    <input type="password" name="cfpwd" id="cfpwd" placeholder="Re-type Password" class="text-field login" />
                </div>

                <input type="submit" class="btn-login" name="Register" value="REGISTER" style="background-color: #4CA82C;">
                <p>Already have an account?</p>
                <a href="LogIn.php">Log In</a>
            </form>
        </div>
    </body>
</html>