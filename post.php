<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form action = "<?php $_PHP_SELF ?>" method = "POST">
        Name: <input type = "text" name = "name" />
        Surname: <input type = "text" name = "surname" /><br/>
        Comment: <textarea rows="10" cols="50" name="comment"></textarea><br/>
        <input type = "submit" />
    </form>
    <?php
        if( $_POST["name"] || $_POST["surname"] || $_POST["comment"] ) {
            echo "Comment from ". $_POST['name']. " " . $_POST['surname'] . "<br/>";
            echo "    " . $_POST['comment'] . "<br/>" . date("d.m.Y") . "<br/>";
            exit();
        }
    ?>
</body>
</html>