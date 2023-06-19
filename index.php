    <?php  include('header.php') ?>
    <?php include('dbcon.php')?>
    <h3>Students Record</h3>
    <a href="create.php">Add</a>
    <br>
    <table>
    <thead>
    <tr>                                                                                                                                                                                                                                                                    
        <th>Sr.No.</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Edit</th>
        <th>Update</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $res=mysqli_query($con,"select * from students");
    $i=1;
    while($row=mysqli_fetch_assoc($res)){ ?>
        
    <tr>
        <td><?php echo $i?></td>
        <td><?php echo $row['f_name']?></td>
        <td><?php echo $row['l_name']?></td>
        <td><?php echo $row['age']?></td>
        <td><a href="edit.php? id=<?php echo $row['sid']?>">Edit</a></td>
        <td><a href="delete.php? id=<?php echo $row['sid']?>">Delete</a></td>
    </tr>
    <?php
    $i++;
    }

    ?>
    </tbody>
</table>
   <?php include('footer.php') ?>
