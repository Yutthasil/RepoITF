<html>
<head>
<title>ITF Lab</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itflabdatabase.mysql.database.azure.com', 'Yutthasil@itflabdatabase', 'KDByeq34', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<div class="container">
    <table class="table" border='1'>
        <thead class="thead-dark">
            <tr>
                <th width="100"> <div align="center">Name</div></th>
                <th width="350"> <div align="center">Comment </div></th>
                <th width="150"> <div align="center">Link </div></th>
                <th width="200"> <div align="center">Action</div></th>
            </tr>
        </thead>
    <?php
    while($Result = mysqli_fetch_array($res))
    {
    ?>
        <tr>
            <td><?php echo $Result['Name'];?></div></td>
            <td><?php echo $Result['Comment'];?></td>
            <td><a href="<?php echo $Result['Link']; ?>"><?php echo $Result['Link']; ?></a></td>
            <td><?php echo '<a href="delete.php?id='.$Result['ID'].'" class="btn btn-danger">Delete</a>'?> <br>
            <?php echo '<a href="edit.php?id='.$Result['ID'].'" class="btn btn-info">Update</a>'?>
            </td>
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
