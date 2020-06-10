<?php

    include("db.php");

    if(isset($_POST['save_user'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $query = "SELECT * FROM users WHERE email = '$email'";

        $result = mysqli_query($conn, $query);

        $row = mysqli_fetch_object($result);

        if(!$row) {
            $_SESSION['message'] = 'Error! Usuario no registrado';
            $_SESSION['message_type'] = 'danger';

            header("Location: logview.php");
            die();
        }
        else if($row->password != $pass) {
            $_SESSION['message'] = 'Error! Contraseña incorrecta';
            $_SESSION['message_type'] = 'danger';

            header("Location: logview.php");
            die();
        }
        $_SESSION['name'] = $row->name;
        $_SESSION['email'] = $row->email;
        $_SESSION['admin'] = $row->admin;

        header("Location: index.php");
    }
?>