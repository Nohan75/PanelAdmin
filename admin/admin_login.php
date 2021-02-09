<?php
    session_start();

    if(isset($_SESSION['amdin_user'])){
        header('Location: admin_panel.php');
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="css/admin_login.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato" rel="stylesheet">
</head>
<body>

    <form action="admin_handle_login.php" method="post">
        <h1>Panel Admin</h1>
        Login : <input type="text" name="admin_user" id="admin_user">
        Password : <input type="password" name="admin_pass" id="admin_pass">
        <button type="submit">Login</button>
    </form>
    
</body>
</html>