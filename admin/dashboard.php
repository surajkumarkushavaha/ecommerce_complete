<?php session_start(); if(!isset($_SESSION['admin'])) header('Location: login.php'); ?>
<h2>Admin</h2>
<a href="add-product.php">Add Product</a>