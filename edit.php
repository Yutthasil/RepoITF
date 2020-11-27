<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itflabdatabase.mysql.database.azure.com', 'Yutthasil@itflabdatabase', 'KDByeq34', 'Labfinal', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$id = $_GET['id'];
$sql = "SELECT * FROM pricecal WHERE id=$id";
$res = mysqli_query($conn, $sql);
$Result = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Comment Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <form action = "update.php?id=<?php echo $Result['ID']; ?>" method = "post" id="CommentForm" >
        <div class="form-group">
            Product:<br>
            <input type="text" name="product" id="idProduct" value="<?php echo $Result['product'];?>"> <br>
        </div>
        <div class="form-group">
            Price:<br>
            <input type="text" name ="price" id="idPrice" value="<?php echo $Result['price'];?>"><br>
        </div>
        <div class="form-group">
            Amount:<br>
            <input type="text" name="amount" id="idAmount" value="<?php echo $Result['amount'];?>"> <br><br>
        </div>
        <input type="submit" id="commentBtn">
    </form>
</div>
    
</body>
</html>
