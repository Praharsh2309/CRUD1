<?PHP
include('dbcon.php');
$id=$_GET['id'];
echo $id;
mysqli_query($con, "delete from students where sid='$id'");
header('location:index.php');
die();
?>  