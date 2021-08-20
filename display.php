<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php
//include('menu.php');
include("connection.php");
error_reporting(0);
$query="SELECT * FROM customer";
$data=mysqli_query($connect,$query);
$total=mysqli_num_rows($data);


if($total !=0)
{
	?>
	
	<table>
	  <tr>
		
     </tr>
	
	  <table class="table">
    <thead>
      <tr>
        <th>Customer ID</th>
		<th>Customer Name</th>
		<th>Cutomer Email</th>
		<th>Opening Balance</th>
		<th>Action</th>
      </tr>
    </thead>	
	
	
	
	<?php
	
	while($result=mysqli_fetch_assoc($data))
	{
       echo "<tr class='success'>
		      <td>".$result["customer_id"]."</td>
		      <td>".$result["customer_name"]."</td>
		      <td>".$result["customer_email"]."</td>
			  <td>".$result["opening_balance"]."</td>
			  <td><a href='process.php?id=" . $result["customer_id"] . "'>Transfer Amount</a></td>
     </tr>";
	}
	
}




?>



    