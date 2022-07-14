<?php
$message ="";
require_once('logics/dbconnection.php');
$queryUser = mysqli_query($conn, "SELECT * FROM enrollment WHERE no='".$_GET['id']."' ");

while($fetchUser = mysqli_fetch_array($queryUser))
{
    $id = $fetchUser['no'];
    $fullname = $fetchUser['fullname'];
    $phone = $fetchUser['phonenumber'];
    $email = $fetchUser['email'];
    $gender = $fetchUser['gender'];
}
//update user records
if(isset($_POST['updaterecords']))
{
    //fetch form data
    $name = $_POST['fullname'];
    $phone = $_POST['phonenumber'];
    $email = $_POST['email'];
    $formgender = $_POST['gender'];
    $formcourse = $_POST['course'];

    //update records

    $updateQuery =mysqli_query($conn,"UPDATE enrollment SET fullname='$name', phonenumber='$phone',
     email='$email', gender='$formgender', course='$formcourse' WHERE no='".$_GET['id']."' ");
    if ($updateQuery)
    {
        $message = "Data updated";
    }
    else{
        $message = "error occured";
    }
}


?>
<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php') ?>
<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php') ?>
	
	</div>
	<div class="sidebar">
		<?php require_once('includes/sidebar.php') ?>
		
	</div>
	<div class="main-content">
		<div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-headers bg-dark text-white text-center">
                            <h4>Edit students: </h4>
                            <span><?php echo $message ?></span>
                            
                        </div>
                        <div class="card-body">
                        <form action="edit-enrollment.php?id=<?php echo $id ?>" method="POST">
        <div class="row">
            <div class="mb-4 col-lg-6">
                <label for="fullname" class="form-label"><b>full Name</b></label>
                <input type="text" name="fullname" value="<?php echo $fullname ?>" class="form-control" placeholder="please enter your full name">
            </div>
            <div class="mb-4 col-lg-6">
                <label for="phonenumber" class="form-label"><b>Phone </b></label>
                <input type="text" name="phonenumber" value="<?php echo $phone ?>" class="form-control" placeholder="+2457...........">
            </div>
        </div>
        <div class="row">
            <div class="mb-4 col-lg-6">
                <label for="email" class="form-label"><b>Email</b></label>
                <input type="text" name="email"  value="<?php echo $email ?>" class="form-control" placeholder="please enter your email">
            </div>
            <div class="mb-4 col-lg-6">
                <label for="gender" class="form-label"><b>Gender</b></label>
                <select class="form-control" name="gender" arial-label="Default select example">
                    <option ><?php echo $gender ?></option>
                    <option v value="male">Male</option>
                    <option value="female">Female</option>
                   
                </select>
            </div>
        </div>
    <div class="row">
        
            <div class="mb-4 col-lg-3">
                <label for="course" class="form-label"><b>Whats your preffered course</b></label>
                <select class="form-select" name="course" arial-label="Default select example">
                    <option selcted>--select your course--</option>
                    <option value="web design">web design</option>
                    <option value="web development">web development</option>
                    <option value="android development">android development</option>
                </select>


            </div>
    </div>
        
       
        <br>
        <button type="submit" name="updaterecords" class="btn btn-primary" >Update records</button>
    </form>
    </div>
</div>

                        </div>
                    </div>
                </div>
            </div>
			
		</div> 
	</div>

        <?php require_once('includes/scripts.php') ?>
</body>

</html>