<?php session_start(); include '../config/db.php';
if(isset($_POST['login'])){
$u=$_POST['u']; $p=md5($_POST['p']);
$q=mysqli_query($conn,"SELECT * FROM admin WHERE username='$u' AND password='$p'");
if(mysqli_num_rows($q)==1){ $_SESSION['admin']=$u; header('Location: dashboard.php'); }
}
?>
<form method="post">
<input name="u" placeholder="username">
<input name="p" type="password" placeholder="password">
<button name="login">Login</button>
</form>