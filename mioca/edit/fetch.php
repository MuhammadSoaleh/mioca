<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2px">
        <tr>
            <th>Product name</th>
            <th>Product Price</th>
            <th colspan="2">Action</th>
        </tr>
<?php
include('conn.php');
$sql="SELECT * FROM `products`";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){

?>

        <tr>
            <td><?php echo $row['p_name']; ?></td>
            <td><?php echo $row['p_price']; ?></td>
            <td><a href="delete.php?id=<?php echo $row['p_id']; ?>">Delete</a></td>
            <td><a href="edit.php?id=<?php echo $row['p_id']; ?>">Edit</a></td>
        </tr>
<?php
}
?>

    </table>
</body>
</html>