
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Form sử dụng phương thức GET -->
<form action="procss_get.php" methood="get">
    <label for="name">Name:</label>
     <input type="text" id="name" name="name">
        <input type="submit" value="Submit">
</form>
 
    <!--Form sử dụng phương thức POST -->
<form action="procss_get.php" methood="post">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
         <input type="submit" value="Submit">
</form>
</body>
</html>
