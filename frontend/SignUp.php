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
            <form action="" method="post" class="login-panel">
                <h1>Sign Up</h1>
                <div class="row login">
                    <div class="column">
                        <label for="username" class="login-label">Username</label>
                        <input type="text" name="username" id="username" class="text-field login" />
                    </div>
                </div>
                <div class="row login">
                    <div class="column">
                    <label for="passwd" class="login-label">Password</label>
                    <input type="password" name="passwd" id="passwd" class="text-field login" />
                    </div>      
                </div>

                <input type="submit" class="btn-login" name="Register" value="REGISTER" style="background-color: #4CA82C;">
                <p>Already have an account?</p>
                <a href="LogIn.php">Log In</a>
            </form>
        </div>
    </body>
</html>