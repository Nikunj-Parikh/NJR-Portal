
<html>
	<head>

	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<link rel="stylesheet" 
	href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
	<script type="text/javascript" 
	src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" 
	src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<title>portal</title>
	</head>
	
	
	<body>
		<div>
			<br/>
			<br/>
			<div class="col-lg-2">
			</div>
			<div class="col-lg-8">  
				<table  id="myTable" class="table table-striped">
				<thead>
					<tr>
						<th>Email</th>  
						<th>Name</th>	
						<th>Popularity</th>
						<th>Faculty Rating</th>
						<th>Download</th>
						<th>Flag</th>
					</tr>
				</thead>
				<tbody>
<?php
				require("filedata.php");

				$sql = "SELECT * from file";
				$result  = mysqli_query($conn,$sql);
				
				while($row=mysqli_fetch_array($result)){
		
					echo"
	
						<tr>
							<td>".$row['email']."</td>
							<td>".$row['name']."</td>
							
							<td>".$row['nodownloads']."</td>
							
							<td><input type='text' name='newrating' value='".$row['rating']."'></td>
							<td><button type='button' class='btn btn-success'><span class='glyphicon glyphicon-arrow-down'></span>"."Download"."</button></td>
							<td><input type='checkbox' name='flagvalue' value='1' ></td>
							
						</tr> 
						
						
						
						";	
					
						
				}	
				$conn->close();

?>
				</tbody>
				</table>
			</div>
		</div>
		
		<script>
			$(document).ready(function(){
			$('#myTable').dataTable();
			});
		</script>
	</body>
</html>
