<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Sign Up</title>
</head>

<body>
    <div class="center">
        <form action="" method="post" class="formInput" id="signupForm">
            <h1>Sign Up</h1>
            <div>
                <img src="user.png" alt="User Icon">
                <input type="text" name="username" id="username" placeholder="Username" required>
            </div>
            <div>
                <img src="mail.png" alt="Mail Icon">
                <input type="text" name="email" id="email" placeholder="Email" required>
            </div>
            <div>
                <img src="lock.png" alt="Lock Icon">
                <input type="password" name="pwd" id="pwd" placeholder="Password" required>
            </div>
            <div>
                <img src="lock.png" alt="Lock Icon">
                <input type="password" name="cfpwd" id="cfpwd" placeholder="Confirm Password" required>
            </div>
            <input type="submit" name="SignUp" value="REGISTER NOW">
            <p class="switchPage">Already have an account?
                <a href="LogIn.php">Log In</a>
            </p>
        </form>
    </div>
</body>