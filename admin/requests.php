 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 	<link rel="stylesheet" href="styles/bootstrap/metro-theme.css">
 <link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">
 </head>
 <body onload="window.print();">
 <div style="height:100px;"></div>
  <div class="container">
  	<table class="table table-bordered ">
  		<tr>
  			<td colspan="6" class="bg bg-info" style="color:#ffff;">
  				<h1 class="text text-center text-success-success">
  				<i class="fa fa-telegram"></i> Number of Requests</h1>
  			</td>
  		</tr>
  		<tr>
  			<td>NO#</td>
			<td>Name</td>
			<td>Email</td>
			<td>Phone</td>
			<td>address</td>
			<td>service</td>
			<td>date</td>

  		</tr>
  		<?php
		include('../../includes/config.php');
if (isset($_POST['submit'])) {
	
$startDate = $_POST['StartDate'];
$EndDate = $_POST['EndDate'];

$sql = mysqli_query($conn,"SELECT * FROM `book` WHERE date BETWEEN '$startDate ' AND '$EndDate'");
while ($row = mysqli_fetch_array($sql)) {
 ?>
	<tr>
		<td><?php echo$row['0']; ?></td>
		<td><?php echo$row['1']; ?></td>
		<td><?php echo$row['2']; ?></td>
		<td><?php echo$row['3']; ?></td>
		<td><?php echo$row['5']; ?></td>
		<td><?php echo$row['6']; ?></td>
		<td><?php echo$row['7']; ?></td>
  	</tr>
  	<?php }} ?>
  	</table>
  </div>
 </body>
 </html>