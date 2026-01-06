<?php
$conn = new mysqli('localhost','root','','ecommarce');
if(!$conn){
    die(mysqli_error($conn));
}
?>