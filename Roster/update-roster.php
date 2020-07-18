<?php
include "permission.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--Bootstrap styles-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!--Custom stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/dashboard-style.css">
	<script src="js/jquery-3.5.1.min.js"></script>
	
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/xlsx.full.min.js"></script>
	
	<title>Update Roster</title>
</head>
<body>
	<!--======Making Card Forms==============-->
	<div class="container row mx-auto mt-5">
		<div class="col shadow-sm p-4 bg-white rounded mr-2">
			<h3 class="font-weight-bold"><?php echo $_SESSION["fullname"]?><span class="badge badge-primary ml-2"><?php echo $_SESSION["teamname"]?></span></h3>
			<p class="mt-3"><strong><?php echo "Logged In : SID - ".session_id()?></strong></p>
			<a href="/logout.php" class="btn btn-danger" role="button">Logout</a>
		</div>
		<div class="col shadow-sm p-4 bg-white rounded ml-2">
			<div class="alert alert-info">
				<strong>OnCall Roster</strong> is upto date till July - 2020</a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="container bg-white rounded p-4 shadow-sm mt-3">
			<div class="w-50 mx-auto">
				<div class="mb-5 mt-2">
					<h3 class="text-center">Update Roster</h3>
					<div class="underline"></div>
				</div>
				
				<form>
					<div class="form-group input-group-lg mb-3">
						<label for="sel1">Select Year</label>
						<select class="form-control" id="sel1">
							<option>Choose Year</option>
							<option>2020</option>
							<option>2020</option>
							<option>2023</option>
							<option>2024</option>
							<option>2025</option>
							<option>2026</option>
							<option>2027</option>
							<option>2028</option>
							<option>2029</option>
							<option>2030</option>
							<option>2031</option>
						</select>
					</div>
					<div class="form-group input-group-lg mb-3">
						<label for="sel1">Select Month</label>
						<select class="form-control" id="sel1">
							<option>Choose Month</option>
							<option>January</option>
							<option>February</option>
							<option>March</option>
							<option>April</option>
							<option>May</option>
							<option>June</option>
							<option>July</option>
							<option>August</option>
							<option>September</option>
							<option>October</option>
							<option>November</option>
							<option>December</option>
						</select>
					</div>
					<div class="alert alert-warning">
						<strong>Supported File Format : .xls, .xlsx, .csv</strong>
					</div>
					<input type="file" class="form-control-file border" id="inputexcel" accept=".xls,.xlsx">
					
					<div class="container">
						<table id="previewexcel" class="table table-hover table-bordered">
							<thead class="thead-light">
								<tr>
									<th>Day</th>
									<th>Primary</th>
									<th>Secondary</th>

								</tr>
							</thead>
						</table>
					</div>
					<input type="submit" name="submit" class="btn btn-primary mt-3">
				</form>

<button class="btn btn-primary" id="button">Convert</button>
				<!--Excel read-->
				
			</div>
			
		</div>
	</div>

	<div class="container mt-3">
		<div class="container bg-white rounded p-5 shadow-sm">
			<div class="w-100 mb-5 mt-2">
				<h3 class="text-center">OnCall Persons</h3>
				<div class="underline"></div>
			</div>

			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Email</th>
						<th>Phone No</th>
						<th>Location</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>John</td>
						<td>Doe</td>
						<td>john@example.com</td>
						<td>+91 9562358478</td>
						<td>Kolkata</td>
						<td><a href="/update-roster.php" class="btn btn-danger" role="button">Remove</a></td>
					</tr>
					<tr>
						<td>Mary</td>
						<td>Moe</td>
						<td>mary@example.com</td>
						<td>+91 9562358478</td>
						<td>Kolkata</td>
						<td><a href="/update-roster.php" class="btn btn-danger" role="button">Remove</a></td>
					</tr>
					<tr>
						<td>July</td>
						<td>Dooley</td>
						<td>july@example.com</td>
						<td>+91 9562358478</td>
						<td>Kolkata</td>
						<td><a href="/update-roster.php" class="btn btn-danger" role="button">Remove</a></td>
					</tr>
				</tbody>
			</table>
			<div class="alert alert-info">
				To update <strong>Oncall person's</strong> information, Please remove the person and add again with updated info.
			</div>
		</div>
	</div>

	<!--======Add Persons ====-->
	<div class="container mt-3">
		<div class="container bg-white rounded p-5 shadow-sm">
			<div class="w-100 mb-5 mt-2">
				<h3 class="text-center">Add On Call Person</h3>
				<div class="underline"></div>
			</div>
			<form id="add-oncall-person-form" onsubmit="return false;">
				<div class="form-group row">
					<label for="email_address" class="col-md-4 col-form-label text-md-right"><strong>First Name</strong></label>
					<div class="col-md-6">
						<input type="text" id="firstname" class="form-control" name="firstname" required placeholder="Type First Name">
					</div>
				</div>

				<div class="form-group row">
					<label for="lastname" class="col-md-4 col-form-label text-md-right"><strong>Last Name</strong></label>
					<div class="col-md-6">
						<input type="text" id="lastname" class="form-control" name="lastname" required placeholder="Type Last Name">
					</div>
				</div>
				<div class="form-group row">
					<label for="email_address" class="col-md-4 col-form-label text-md-right"><strong>Email</strong></label>
					<div class="col-md-6">
						<input type="text" id="email" class="form-control" name="email" required placeholder="Type Email Address">
					</div>
				</div>
				<div class="form-group row">
					<label for="email_address" class="col-md-4 col-form-label text-md-right"><strong>Phone No</strong></label>
					<div class="col-md-6">
						<input type="text" id="phoneno" class="form-control" name="phoneno" required placeholder="Type Phone No">
					</div>
				</div>
				<div class="form-group row">
					<label for="sel1" class="col-md-4 col-form-label text-md-right"><strong>Select Location</strong></label>
					<div class="col-md-6">
						<select class="form-control" id="location">
							<option>Offshore</option>
							<option>Onshore</option>
						</select>
					</div>

				</div>

				<div class="col-md-6 offset-md-4">
					<button type="submit" class="btn btn-primary">
						Add User
					</button>
				</div>
			</div>
		</form>
	</div>
</div>


</body>
<script src="js/excel.js"></script>
</html>