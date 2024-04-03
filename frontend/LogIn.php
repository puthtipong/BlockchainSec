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
        <form action="" method="post" class="formInput">
            <h1>Log In</h1>
            <div>
                <img src="user.png" alt="User Icon">
                <input type="text" name="username" id="username" placeholder="Username">
            </div>
            <div>
                <img src="lock.png" alt="Lock Icon">
                <input type="password" name="passwd" id="passwd" placeholder="Password">
            </div>
            <input type="submit" name="LogIn" value="LOG IN">
            <p class="switchPage">
                <a href="SignUp.php">Register Now!</a>
            </p>
        </form>
    </div>
</body>