<?php include 'config/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Ecommerce</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
<h2>Products</h2>
<div class="row">
<?php
$q=mysqli_query($conn,"SELECT * FROM products");
while($p=mysqli_fetch_assoc($q)){
?>
<div class="col-md-3">
<div class="card mb-3">
<img src="assets/images/<?php echo $p['image']; ?>" class="card-img-top">
<div class="card-body">
<h5><?php echo $p['name']; ?></h5>
<p>₹<?php echo $p['price']; ?></p>
<a href="cart.php?id=<?php echo $p['id']; ?>" class="btn btn-primary">Buy</a>
</div>
</div>
</div>
<?php } ?>
</div>
</div>
</body>
</html>