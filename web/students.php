<html>
</body>
<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "University";

$conn = mysqli_connect("$host", "$username", "$password", "$db");

if(!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}

$sql = "SELECT id,name,email, from students";

$result = $conn->query($sql);

?>

<table border = "1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
    </tr>

    <?php

if($result->num_rows > 0)
{
    while ($row = $result->fetch_assoc())
    {
        ?>
        <tr>
            <td><?php echo $row ["id"]?></td>
            <td><?php echo $row ["name"]?></td>
            <td><?php echo $row ["email"]?></td>
        </tr>

        <?php
    }
    
}
else 
{
    echo "no data";
}

?>
</table>

</body>
</html>