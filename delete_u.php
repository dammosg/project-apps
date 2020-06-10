<?php

    include("db.php");

    if(isset($_GET['email'])){
        $email = $_GET['email'];

        $query = "DELETE FROM users WHERE email = '$email'";

        $result = mysqli_query($conn, $query);

        if(!$result) {
            $_SESSION['message'] = 'Error! No se pudo borrar el usuario';
            $_SESSION['message_type'] = 'danger';

            header("Location: users.php");
            die();
        }
        
        $_SESSION['message'] = 'Usuario borrado!';
        $_SESSION['message_type'] = 'info';

        header("Location: users.php");
    }
?>