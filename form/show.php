<html>
    <body>
        <?php
            $firstName = $_REQUEST['firstName'];
            $firstName = $_REQUEST['lastName'];
            $firstName = $_REQUEST['username'];
            $firstName = $_REQUEST['password'];
            $firstName = $_REQUEST['gender'];
            $firstName = $_REQUEST['academicYear'];
            $firstName = $_REQUEST['email'];
            $firstName = $_REQUEST['phone'];
        ?>

        <table border="1">
            <tr>
                <td>First Name</td>
                <td><?php echo $fName ?></td>
            </tr>

        </table>
    </body>
</html>