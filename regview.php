<?php include("db.php"); ?>

<?php include("includes/header.php"); ?>

    
    <div class="card-register">
        <h1>Registro</h1>
        <form action="register.php" method="POST">
            <label>Nombre:</label>
            <br>
            <input type="text" name="name" required>
            <br>
            <label>Apellido Paterno:</label>
            <input type="text" name="lastname1" required>
            <label>Apellido Materno:</label>
            <input type="text" name="lastname2" required>
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Password:</label>
            <input type="password" name="password" required>
            <button type="submit" name="save_user">
                Registrarse
            </button>
        </form>
    </div>


<?php include("includes/footer.php"); ?>