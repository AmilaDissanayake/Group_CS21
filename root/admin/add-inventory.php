<?php

session_start();

if ($_SESSION['notification']) {
    unset($_SESSION['notification']);
}

require "includes/db.php";
$inventory_id = $_GET['inventory_id'];

$select_query = "SELECT quantity from inventory WHERE inventory_id = $inventory_id";
$select_result = mysqli_query($conn, $select_query);
$select_row = mysqli_fetch_assoc($select_result);

$quantity = $select_row['quantity'];
$quantity = $quantity + 1;

$insert_query = "UPDATE inventory SET quantity = $quantity WHERE inventory_id = $inventory_id";
$select_result = mysqli_query($conn, $insert_query);


if ($select_result) {
    $_SESSION['notification'] = "Added 1 Equipment";
    // $_SESSION['username'] = $username_bb;
    header('Location: inventory.php');
    // echo "done";
} else {
    // header("Location: index.php");
    echo die(mysqli_error($conn));
}
