<?php
    include("db.php");

    if(isset($_GET['email'])) {
        $email = $_GET['email'];
        $query = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_object($result);
            $name = $row->name;
            $lastname1 = $row->lastname1;
            $lastname2 = $row->lastname2;
            $email = $row->email;
            $admin = $row->admin;

        }
    }

    if(isset($_POST['update'])) {
        $email = $_GET['email'];
        $name = $_POST['name'];
        $lastname1 = $_POST['lastname1'];
        $lastname2 = $_POST['lastname2'];

        $query = "UPDATE users SET name='$name', lastname1='$lastname1', lastname2='$lastname2' WHERE email='$email'";

        $result = mysqli_query($conn, $query);
        if(!$result) {
            $_SESSION['message'] = 'Error! No se pudo actualizar usuario';
            $_SESSION['message_type'] = 'danger';

            header("Location: regview.php");
            die();
        }

        $_SESSION['message'] = 'Usuario actualizado!';
        $_SESSION['message_type'] = 'info';

        header('Location: users.php');
    }
?>

<?php include("db.php"); ?>

<?php include("includes/header.php"); ?>

    
    <div class="card-register">
        <h1>Registro</h1>
        <form action="edit_u.php?email=<?php echo $_GET['email']; ?>" method="POST">
            <label>Nombre:</label>
            <br>
            <input type="text" name="name" value="<?php echo $name ?>" required>
            <br>
            <label>Apellido Paterno:</label>
            <input type="text" name="lastname1" value="<?php echo $lastname1 ?>" required>
            <label>Apellido Materno:</label>
            <input type="text" name="lastname2" value="<?php echo $lastname2 ?>" required>
            <button type="submit" name="update">
                Actualizar
            </button>
        </form>
    </div>


<?php include("includes/footer.php"); ?>