<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a00aa227fb.js" crossorigin="anonymous"></script>
    <title>eHelp</title>
</head>
<body>

    <nav>
        <div class="container">
            <a href="./index.php"><i class="fas fa-home"></i>Inicio</a>
            <a href=""><i class="fas fa-inbox"></i>Contacto</a>
            
            <?php if(isset($_SESSION['email'])) { 
                    if($_SESSION['admin'] == 1) {
                ?>
                    <a href="users.php" class="right"><i class="fas fa-users-cog"></i>Users</a>
                    <a href="logout.php"><i class="fas fa-door-closed"></i>Cerrar sesión</a>
                <?php } else { ?>
                    <a href="logout.php" class="right"><i class="fas fa-door-closed"></i>Cerrar sesión</a>
                <?php } ?>
            <?php } else { ?>
                <a href="logview.php" class="right"><i class="fas fa-user"></i>Login</a>
                <a href="regview.php"><i class="fas fa-door-open"></i>Registrarse</a>
            <?php } ?>
            
        </div>
        
    </nav>

    <main>