<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin</title>
</head>
<body>

    <?php
        echo '<h1>Admin : ' . $_POST['admin_user'] . '</h1>';
    ?>
    <a href="logout.php">Logout</a>
    
</body>
</html>