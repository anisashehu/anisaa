<?php
    require 'connection.php';
    //require 'header.php';
    session_start();
    $item_id=$_GET['item_id'];
    $user_id=$_SESSION['user_id'];
    $add_to_cart_query="insert into users_items(user_id,item_id,status) values ('$user_id','$item_id','U shtua ne shorte')";
    $add_to_cart_result=mysqli_query($con,$add_to_cart_query) or die(mysqli_error($con));
    header('location: cart.php');
	

	
	
?>