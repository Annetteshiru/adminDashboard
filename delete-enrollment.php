<?php
require_once('logics/dbconnection.php');

$sqlDeleteStudents = mysqli_query($conn, "DELETE FROM enrollment WHERE no='".$_GET['id']."' ");
if($sqlDeleteStudents)
{
    echo "user record deleted";
    header('location:students.php');
}
else{
    echo "error occurred";
}

?>