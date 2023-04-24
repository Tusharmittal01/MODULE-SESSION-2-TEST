<!DOCTYPE html>
<html lang="en">
<!-- Head Starts here -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innoraft Premier League (IPL)</title>
    <link rel="icon" href="./images/ipl_icon.jpg">
    <link rel="stylesheet" href="./CSS/login.css">
</head>
<!-- Head ends here -->
<!-- Body Starts here -->
<body>
    <!-- Heading Tags -->
    <div class="heading"><h1>Credentials</h1></div>
    <!-- Admin information form starts here -->
    <form action="./logics/logic.php" method="POST">
        Employeer's Id:
        <input type="text" placeholder="employeer's id" name="id" value="id">
        Password:
        <input type="text" placeholder="name" name="pswd" value="pswd">
        <select name="option" value="option">
            <option>--select--</option>
            <option>batsman</option>
            <option>bowler</option>
            <option>all rounder</option>
        </select>
        <button type="submit" name="admin-login" value="admin-login">Login</button>
    </form>
    <!-- Admin information form ends here -->
</body>
<!-- Body ends here -->
</html>