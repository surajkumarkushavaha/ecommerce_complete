<?php include 'config/db.php';
$id=$_GET['id'];
$p=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM products WHERE id=$id"));
?>
<h2><?php echo $p['name']; ?></h2>
<p>₹<?php echo $p['price']; ?></p>
<form method="post" action="checkout.php">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<input type="number" name="qty" value="1">
<button>Checkout</button>
</form>