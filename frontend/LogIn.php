<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Log In</title>
</head>
<body>
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <form action="" method="post" style="width: 300px; background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            <h1 style="text-align: center;">Log In</h1>
            <div style="display: flex; align-items: center; margin-bottom: 10px;">
                <img src="user.png" alt="User Icon" style="width: 20px; height: 20px; margin-right: 10px;">
                <input type="text" name="username" id="username" placeholder="Username" style="width: calc(100% - 40px); padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
            </div>
            <div style="display: flex; align-items: center; margin-bottom: 10px;">
                <img src="lock.png" alt="Lock Icon" style="width: 20px; height: 20px; margin-right: 10px;">
                <input type="password" name="passwd" id="passwd" placeholder="Password" style="width: calc(100% - 40px); padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
            </div>
            <input type="submit" name="LogIn" value="LOG IN" style="width: 100%; background-color: #4CA82C; color: white; padding: 15px 0; margin: 10px 0; border: none; border-radius: 5px; cursor: pointer; box-sizing: border-box;">
            <a href="SignUp.php" style="display: block; text-align: center; color: dodgerblue; text-decoration: none;">Register Now!</a>
        </form>
    </div>
</body>