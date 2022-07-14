<?php
$server="localhost";
$username="root";
$password="";
$database="web2";

$conn=mysqli_connect($server,$username,$password,$database);
$sqliQuery= mysqli_query($conn,"SELECT * FROM enrollment");



?>

<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php') ?>

<body>
	<!-- All our code. write here   -->	
	<?php require_once('includes/navbar.php') ?>

	
	<div class="sidebar">
	<?php require_once('includes/sidebar.php') ?>
		
	</div>
	<div class="main-content">
		<div class="container-fluid">
			<div class="row pt-3">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Students</span>
					</div>
					<div class="card-body">
						<table class="table table-striped table-hover table-responsive " style="font-style:12px;">
							<thead>
								<tr>
									<th>No.</th>
									<th>Full Name</th>
									<th>phone</th>
									<th>Email</th>
									<th>Gender</th>
									<th>Course</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php while($fetchRecords= mysqli_fetch_array($sqliQuery)) { ?>
									<tr>
										<td><?php echo $fetchRecords['no'] ?></td>
										<td><?php echo $fetchRecords['fullname'] ?></td>
										<td><?php echo $fetchRecords['phonenumber'] ?></td>
										<td><?php echo $fetchRecords['email'] ?></td>
										<td><?php echo $fetchRecords['gender'] ?></td>
										<td><?php echo $fetchRecords['course'] ?></td>
										<td><?php echo $fetchRecords['created_at'] ?></td>
										<td>
											<a href="edit-enrollment.php?id=<?php echo $fetchRecords['no']?> "class="btn btn-primary btn-sm">
												<i class="fa fa-edit"></i>
											</a>
											<a href="view-enrollment.php?id=<?php echo $fetchRecords['no']?>" class="btn btn-info btn-sm">
												<i class="fa fa-eye"></i>
											</a><a href="delete-enrollment.php?id=<?php echo $fetchRecords['no']?>" class="btn btn-danger btn-sm">
												<i class="fa fa-trash"></i>
											</a>

											
										</td>







									</tr>
									<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			
		</div>
	</div>

	
	
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>