<?php
include('conn.php');
$id=$_GET['id'];
$sql="SELECT * FROM `products` WHERE p_id = $id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if(isset($_POST['up'])){
    $pname=$_POST['pname'];
    $pprice=$_POST['pprice'];
    $sql1="UPDATE `products` SET `p_name`='$pname',`p_price`='$pprice' WHERE p_id = $id";
    $result=mysqli_query($conn,$sql1);
    header("Location:fetch.php");
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
        <input type="text" name="pname" value="<?php echo $row['p_name']; ?>">
        <input type="number" name="pprice" value="<?php echo $row['p_price']; ?>">
        <input type="submit" name="up" value="UPDATE">
    </form>
</body>
</html>