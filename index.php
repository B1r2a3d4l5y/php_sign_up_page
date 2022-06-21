<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>sign up form</title>

</head>
<body>
    <h2>Signup</h2>
    <form action="includes/sign_up.php" method="POST">
        <input type="text" class="name" name="first" placeholder="Firstname">
        <br>
        <input type="text"  class="last"name="last" placeholder="Lastname">
        <br>
        <input type="text" class="email" name="email" placeholder="E-mail">
        <br>
        <input type="text" class="username" name="uid" placeholder="Username">
        <br>
        <input type="password" class="password" name="pwd" placeholder="Password">
        <br>
        <button type="submit" name="submit">Sign up</button>
    </form>
    
</body>
</html>