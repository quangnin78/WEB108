<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    //print_r($_GET);
    var_dump($_POST);
    echo $_POST["name"];


    
    ?>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <input type="submit" value="Submit">
    </form>

    <form action="procss_get.php" methood="POST">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
         <input type="submit" value="Submit">
    </form>
</body>
</html>