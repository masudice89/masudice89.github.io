<link href="../admin/admin-assets/css/sb-admin.css" rel="stylesheet">

<?php 
//session_start();
	$server = "localhost";
	$user = "root";
	$password = "";
	$dbname = "adminpanel";

	$connection = mysqli_connect($server,$user,$password);

	$dbconfig = mysqli_select_db($connection,$dbname);
	mysql_query('SET CHARACTER SET utf8');
	mysql_query("SET SESSION collation_connection ='utf8_general_ci'");

	if ($dbconfig) {
		// echo "Connected";
	}
	else
	{
		echo '
			<div class="container">
				<div class="row">
					<div class="col-md-8 mr-auto ml-auto text-center py-5 mt-5">
						<div class="card">
							<div class="card-body">
								<h1 class="card-title bg-danger text-white"> Database Connection Failed </h1>
								<h2 class="card-title"> Database Failure </h2>
								<p class="card-text"> Please Check Your Database Connection. </p>
								<a href="#" class="btn btn-primary"> :( </a>
							</div>
						</div>
					</div>
				</div>
			</div>

		';
	}
 ?>