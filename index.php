<?php
session_start();

$host="localhost";
$user="root";
$pass="";
$db="snack_store";

$conn=new mysqli($host,$user,$pass,$db);

if(!isset($_SESSION['cart'])){
$_SESSION['cart']=[];
}

/* ADD TO CART */

if(isset($_POST['add'])){
$name=$_POST['name'];
$price=$_POST['price'];

$_SESSION['cart'][]=['name'=>$name,'price'=>$price];
}

/* REMOVE */

if(isset($_GET['remove'])){
$i=$_GET['remove'];
unset($_SESSION['cart'][$i]);
$_SESSION['cart']=array_values($_SESSION['cart']);
}

/* CHECKOUT */

if(isset($_POST['checkout'])){

foreach($_SESSION['cart'] as $item){

$conn->query("INSERT INTO orders(product,price)
VALUES('".$item['name']."','".$item['price']."')");

}

$_SESSION['cart']=[];
echo "<script>alert('Order Placed!');</script>";

}
?>
