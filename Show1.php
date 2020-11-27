<html>
<head>
<title>ITF Lab</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itflabdatabase.mysql.database.azure.com', 'Yutthasil@itflabdatabase', 'KDByeq34', 'Labfinal', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM pricecal');
?>
<div class="container">
    <table class="table" border='1'>
        <thead class="thead-dark">
            <tr>
                <th width="150"> <div align="center">Product</div></th>
                <th width="150"> <div align="center">Price </div></th>
                <th width="150"> <div align="center">Amount </div></th>
                <th width="150"> <div align="center">Total</div></th>
                <th width="100"><div align="center">Action</div></th>
            </tr>
        </thead>
    <?php
    while($Result = mysqli_fetch_array($res))
    {
    ?>
        <tr>
            <td><?php echo $Result['product'];?></div></td>
            <td><?php echo $Result['price'];?></td>
            <td><?php echo $Result['amount']; ?></td>
            <td><?php echo $Result['total']; ?></td>
            <td><?php echo '<a href="delete.php?id='.$Result['ID'].'" class="btn btn-danger">Delete</a>'?></td>
        </tr>
    <?php
    }
    ?>
    </table>
    <a href="form.html" class="btn btn-info">Add</a>
</div>
<?php
mysqli_close($conn);
?>
</body>
</html>
