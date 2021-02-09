<?php
    session_start();

    $user = 'Nohan75';
    $pass = 'pass';
?>

<?php


    if(isset($_POST['admin_user']) && $_POST['admin_user'] == '$user'){
        $_SESSION['admin_user'] = $_POST['admin_user'];
    }

    if(isset($_POST['admin_user']) && isset($_POST['admin_pass']) &&
        $_POST['admin_user'] == $user && $_POST['admin_pass'] == $pass){
            header('Location: admin_panel.php');
        } else {
            header('Location: admin_login.php?error=WrongPassword');
        }
    
    

?>
