<!DOCTYPE html>
<html lang="TH">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Age</th>
				<th>Address</th>
				<th>gender</th>
				<th>size</th>
			</tr>
		</thead>
	<tbody>
<?php

include("conn/mysqlcon.php");

$sql = "SELECT * FROM userprofile";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	?>
    		<tr>
    			<td><?php echo $row["userid"];?></td>
    			<td><?php echo $row["name"];?></td>
    			<td><?php echo $row["email"];?></td>
    			<td><?php echo $row["age"];?></td>
    			<td><?php echo $row["address"];?></td>
    			<td><?php echo $row["gender"];?></td>
    			<td><?php echo $row["size"];?></td>
    			<td><?php echo $row["userid"];?></td>
    		</tr>>
    	<?  
    }
} else {
    echo "0 results";
}
?>
</tbody>
</body>
</html>