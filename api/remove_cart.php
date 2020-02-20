<?php
session_start();
$data = json_decode(file_get_contents("php://input"), true);
$id = array($data['id'])[0];

if($_SESSION['cart'][$id] <= 1){
    unset($_SESSION['cart'][$id]);
}
else{
    $_SESSION['cart'][$id]--;
}