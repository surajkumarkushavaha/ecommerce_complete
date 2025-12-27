<?php include '../config/db.php';
if(isset($_POST['add'])){
$n=$_POST['name']; $p=$_POST['price'];
$img=$_FILES['img']['name'];
move_uploaded_file($_FILES['img']['tmp_name'],"../assets/images/".$img);
mysqli_query($conn,"INSERT INTO products(name,price,image) VALUES('$n','$p','$img')");
}
?>
<form method="post" enctype="multipart/form-data">
<input name="name" placeholder="Name">
<input name="price" placeholder="Price">
<input type="file" name="img">
<button name="add">Add</button>
</form>