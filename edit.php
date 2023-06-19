<?php
include('dbcon.php');
$id=$_GET['id'];
if(isset($_POST['submit']))
{
    $f_name=$_POST['f_name'];
    $l_name=$_POST['l_name'];
    $age=$_POST['age'];
    mysqli_query($con, "update students set f_name='$f_name',l_name='$l_name',age='$age' where sid='$id'");
    header('location:index.php');
    die();
}

    $res=mysqli_query($con, "select * from students where sid='$id'");
    $row=mysqli_fetch_assoc($res);
    $f_name=$row['f_name'];
    $l_name=$row['l_name'];
    $age=$row['age'];
?>
<form method="post">
<TABLE>
    <tr>
        <td>FIRST NAME</td>
        <td><input type="textbox" name="f_name" value="<?php echo $f_name?>"></td>
    </tr>
    <tr>
        <td>LAST NAME</td>
        <td><input type="text" name="l_name" value="<?php echo $l_name?>"></td>
    </tr>
    <tr>
        <td>AGE</td>
        <td><input type="textbox" name="age" value="<?php echo $age?>"></td>
        
    </tr>
    <tr>
        <td>submit</td>
        <td><input type="submit" name="submit"></td>
    </tr>
</TABLE>
</form>