<?php include 'config/db.php';
$id=$_POST['id'];
$qty=$_POST['qty'];
$p=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM products WHERE id=$id"));
$total=$p['price']*$qty;
mysqli_query($conn,"INSERT INTO orders(product_id,quantity,total_price) VALUES($id,$qty,$total)");
echo "Order Placed";
?>