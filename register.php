<?php

    include("db.php");

    if(isset($_POST['save_user'])){
        $name = $_POST['name'];
        $lastname1 = $_POST['lastname1'];
        $lastname2 = $_POST['lastname2'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $admin = false;

        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $query);

        $row = mysqli_fetch_object($result);

        if($row) {
            $_SESSION['message'] = 'Error! Correo registrado';
            $_SESSION['message_type'] = 'danger';

            header("Location: regview.php");
            die();
        }
        
        $query = "INSERT INTO users(name, lastname1, lastname2, email, password, admin) VALUES('$name', '$lastname1', '$lastname2', '$email', '$pass', false)";

        $result = mysqli_query($conn, $query);

        if(!$result) {
            $_SESSION['message'] = 'Error! Fallo en el registro';
            $_SESSION['message_type'] = 'danger';

            header("Location: regview.php");
            die();
        }

        $_SESSION['message'] = 'Usuario registrado satisfactoriamente!';
        $_SESSION['message_type'] = 'success';

        header("Location: regview.php");
    }
?>