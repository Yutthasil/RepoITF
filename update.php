<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itflabdatabase.mysql.database.azure.com', 'Yutthasil@itflabdatabase', 'KDByeq34', 'Labfinal', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$id = $_GET['id'];
$product = $_POST['product'];
$price = $_POST['price'];
$amount = $_POST['amount'];


$sql = "UPDATE guestbook SET product='$product', price='$price', amount='$amount', total='$amount'*'$price' WHERE id=$id";


if (mysqli_query($conn, $sql)) {
    echo "Update record successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>