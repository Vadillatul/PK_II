<!DOCTYPE HTML>
<html>
    <body>
        <?php
        $id = $_GET["id"];
        $firstname = $_GET["firstname"];
        $lastname = $_GET["lastname"];
        $email = $_GET["email"];
        ?>
        <form action="update.php" method="post">
            id: <input type="text" name="id" value=<?php echo $id ?>><br>
            First Name: <input type="text" name="firstname" value=<?php echo $id ?>><br>
            Last Name: <input type="text" name="lastname" value=<?php echo $id ?>><br>
            E-mail: <input type="text" name="email" value=<?php echo $id ?>><br>
            <input type="submit">
        </form>
    </body>
</html>