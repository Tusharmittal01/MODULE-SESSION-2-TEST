<!DOCTYPE html>
<html lang="en">
<!-- Head Starts here -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innoraft Premier League (IPL)</title>
    <link rel="icon" href="./images/ipl_icon.jpg">
    <link rel="stylesheet" href="./CSS/index.css">
</head>
<!-- Head endss here -->
<!-- Body Starts here -->
<body>
    <!-- Heading Tags -->
    <div class="heading orange"><h1>Welcome here!!!!</h1></div>
    <div class="heading white"><h1>Innoraft <span class="navy">Premier</span> League</h1></div>
    <div class="heading green"><h2>From here you can continue as a Admin or User</h2></div>
    <!-- User type logging -->
    <form action="./logics/index.php" method="POST">
        <button type="submit" name="type" value="admin"><a href="./admin_login.php">Admin</a></button>
        <button type="submit" name="type" value="user"><a href="./user_login.php">User</a></button>
    </form>
</body>
<!-- Body ends here -->
</html>