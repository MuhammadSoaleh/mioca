<?php
if(isset($_POST['sub'])){
    include('conn.php');
    $sql="INSERT INTO `category`(`category`) VALUES('".$_POST['cat']."')";
    mysqli_query($conn,$sql);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="cat">
        <input type="submit" name="sub">
    </form>
</body>
</html>