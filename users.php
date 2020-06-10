<?php include("db.php"); ?>

<?php include("includes/header.php"); ?>
    <table>
        <tr>
            <th>
                Nombre
            </th>
            <th>
                Apellidos
            </th>
            <th>
                Email
            </th>
            <th>
                Operaciones
            </th>
        </tr>
        <?php 
        $query = "SELECT * FROM users";
        $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_array($result)) { ?>

            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['lastname1'] . " " . $row['lastname2']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><a class="iconsedt" href="edit_u.php?email=<?php echo $row['email']; ?>"><i class="fas fa-edit"></i></a>
                <a class="iconsdel" href="delete_u.php?email=<?php echo $row['email']; ?>"><i class="fas fa-trash"></i></a></td>
            </tr>

        <?php } ?>
    </table>

    

<?php include("includes/footer.php"); ?>