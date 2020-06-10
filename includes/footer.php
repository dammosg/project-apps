<?php include("db.php"); ?>
    
    <?php if(isset($_SESSION['message'])) { ?>
        <div class="alert <?= $_SESSION['message_type'] ?>">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <?= $_SESSION['message'] ?>
        </div> 
    <?php session_unset(); } ?>
    
    
    </main>

    <footer>
        Damian
    </footer>
</body>
</html>