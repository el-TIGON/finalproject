<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
		<link rel="stylesheet" href="styles/bootstrap/metro-theme.css">
 <link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">
</head>
<body>
	<div style="height:100px"></div>
<div class="col-md-8 col-md-offset-2 panel" style="border: 1px solid green;border-radius: 13px;">
	<div class="text text-center text-success panel-heading">
		<h1><i class="fa fa-print"></i> Requist Report</h1>
	</div>
	<div class="panel-body">
		<form class="form-horizontal" method="POST" action="requests.php">
			<div class="form-group">
				<label class="control-label col-md-2">StartDate</label>
				 <div class="col-md-8">
				 	<input type="date" name="StartDate" class="form-control">
				 </div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">EndDate</label>
				 <div class="col-md-8">
				 	<input type="date" name="EndDate" class="form-control">
				 </div>
			</div>
			<div class="form-group">
				<button name="submit" class="btn btn-success btn-md col-md-offset-2 col-md-8">Print</button>
			</div>
		</form>
	</div>
	
</div>
</body>
</html>