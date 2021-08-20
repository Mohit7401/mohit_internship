<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php
//include('menu.php');
include("connection.php");
error_reporting(0);



$customer_id = $_GET['id'];
$transfer_amt = $_POST['transfer_amt'];


$query="SELECT * FROM customer where customer_id=".$customer_id;
$data=mysqli_query($connect,$query);

$total=mysqli_num_rows($data);


if($total !=0)
{
	?>
	
	
	  <table class="table">
    <thead>
      <tr>
        <th>Customer ID</th>
		<th>Customer Name</th>
		<th>Opening Balance</th>
		<th>Transfer Amount</th>
      </tr>
    </thead>	
	
	
	<form action="upd_process.php?" method="get">
	<?php
	
	while($result=mysqli_fetch_assoc($data))
	{
       echo "<tr class='success'>
		      <td>".$result["customer_id"]."</td>
		      <td>".$result["customer_name"]."</td>
		      
			  <td>".$result["opening_balance"]."</td>
			  <td><input type='text' name='transfer_amt' placeholder='Enter Transfer Amount'></td>
			  <td><input type='hidden' value=".$result["opening_balance"]." name='tr_amt'></td>
			  <td><input type='hidden' value=".$result["customer_id"]." name='cust_id'></td>
			  <td><button type='submit' name='submit' class='btn btn-primary'>Sure to Transfer</button></td>
			  <td><a href='index.php' class='btn btn-warning'>Cancel</a></td>

     </tr>";
	 

	}
	?>
	
 
 </form>
	
<?php	
}


?>