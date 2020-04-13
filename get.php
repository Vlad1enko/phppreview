<?php
  if( $_GET["name"] || $_GET["surname"] ) {
     echo "Welcome ". $_GET['name']. " " . $_GET['surname'] . "!<br />";
     
     exit();
  }
?>
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
    <form action = "<?php $_PHP_SELF ?>" method = "GET">
        Name: <input type = "text" name = "name" />
        Surname: <input type = "text" name = "surname" />
        <input type = "submit" />
    </form>
</body>
</html>