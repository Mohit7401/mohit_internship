<?php
//print_r($_GET);
include("connection.php");
error_reporting(0);

$cust_id = $_GET['cust_id'];
$new_tr = $_GET['transfer_amt'];
$new_bal = $_GET['tr_amt'];

$total = $new_tr + $new_bal;

$query = "UPDATE customer SET opening_balance='$total' WHERE customer_id=$cust_id";

if ($connect->query($query) === TRUE) {
  //echo "Record updated successfully";
  header('Refresh: 1; url=display.php');
} else {
  echo "Error updating record: " . $connect->error;
}

?>