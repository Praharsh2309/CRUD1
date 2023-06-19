<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
    $f_name=$_POST['f_name'];
    $l_name=$_POST['l_name'];
    $age=$_POST['age'];
    mysqli_query($con, "insert into students (f_name,l_name,age) values('$f_name','$l_name','$age')");
    header('location:index.php');
    die();
}
?>
<form method="post">
<TABLE>
    <tr>
        <td>FIRST NAME</td>
        <td><input type="textbox" name="f_name"></td>
    </tr>
    <tr>
        <td>LAST NAME</td>
        <td><input type="text" name="l_name"></td>
    </tr>
    <tr>
        <td>AGE</td>
        <td><input type="textbox" name="age"></td>
        
    </tr>
    <tr>
        <td>submit</td>
        <td><input type="submit" name="submit"></td>
    </tr>
</TABLE>
</form>