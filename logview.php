<?php include("db.php"); ?>

<?php include("includes/header.php"); ?>

    
    <div class="card-register">
        <h1>Login</h1>
        <form action="login.php" method="POST">
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Password:</label>
            <input type="password" name="password" required>
            <button type="submit" name="save_user">
                Iniciar sesión
            </button>
        </form>
    </div>


<?php include("includes/footer.php"); ?>