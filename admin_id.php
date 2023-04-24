<!-- This page will appear when admin logged in in its profile -->
<?php
include("./logics/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<!-- Head starts here -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin's Page</title>
    <link rel="stylesheet" href="CSS/user.css">
    <link rel="icon" href="images/ipl_icon.jpg">
</head>
<!-- Head ends here -->
<!-- Body starts here -->
<body>
    <!-- Main section starts here -->
    <section class="main">
        <div class="heading"><h1>Add Players</h1></div>
        <form action="../Model/logic.php" method="post">
            <!-- Adding player -->
            <div class="add-checklist">
                <input type="text" class="player" name="player" placeholder="player name">
                <input type="submit" value="Add" class="add_btn" name="add_btn">
            </div>
            <!-- List of all players -->
            <h1>Players List:-</h1>
            <ul class="checklist-items">
                <?php
                // Fetching players name
                    $playes_names = players();
                    while($row=$playes_names->fetch_assoc()){
                ?>
                <!-- Deleting players -->
                <li class="task">
                    <p><?php echo $row["players"]; ?></p>
                    <div class="changes">
                        <button type="submit" name="delete_btn" class="delete_btn" value="<?php echo $row["id"]; ?>"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </li>
                <?php 
                    }
                ?>
            </ul>
        </form>
    </section>
    <!-- Main section ends here -->
</body>
<!-- Body ends here -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</html>