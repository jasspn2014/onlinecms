<!--for delete Record -->
<?php
	$msg="";
	$opr="";
	if(isset($_GET['opr']))
	$opr=$_GET['opr'];

if(isset($_GET['rs_id']))
	$id=$_GET['rs_id'];

	if($opr=="del")
{
	$sql = "DELETE FROM stu_tbl WHERE stu_id=$id";
	$result = mysqli_query($conn,$sql);
	if($result)
		$msg="<div style='background-color: white;padding: 20px;border: 1px solid black;margin-bottom: 25px;''>"
                . "<span class='p_font'>"
                . "1 Record Deleted... !"
                . "</span>"
                . "</div>";

	else
		$msg="Could not Delete :".mysql_error();

}
	echo $msg;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Online College Management System</title>
</head>

<body>
<div class="btn_pos">
        <form method="post">
            <input type="text" name="searchtxt" class="input_box_pos form-control" placeholder="Search name.." />
            <div class="btn_pos_search">
            <input type="submit" class="btn btn-primary btn-large" name="btnsearch" value="Search"/>&nbsp;&nbsp;
            <a href="?tag=student_entry"><input type="button" class="btn btn-large btn-primary" value="Register new" name="butAdd"/></a>
            </div>
        </form>
    </div><br><br>


<div class="table_margin">
<table class="table table-bordered">
        <thead>
            <tr>
            <th style="text-align: center;">No.</th>
            <th style="text-align: center;">Student Name</th>
            <th style="text-align: center;">Gender</th>
            <th style="text-align: center;">Date of Birth</th>
            <th style="text-align: center;">Place of Birth</th>
            <th style="text-align: center;">Address</th>
            <th style="text-align: center;">Phone</th>
            <th style="text-align: center;">E-mail</th>
            <th style="text-align: center;">Note</th>
            <th style="text-align: center;" colspan="2">Operation</th>
        </tr>

        <?php
	$key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];

	if($key !=""){
		$sql= "SELECT * FROM stu_tbl WHERE f_name  like '%$key%' or l_name like '%$key%'";
		$result=mysqli_query($conn,$sql);
	}else{
		 	$result=mysqli_query($conn,"SELECT * FROM stu_tbl");
		}



    $i=0;
    while($row = $result -> fetch_array(MYSQLI_ASSOC)){
    $i++;
    ?>
      <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $row['f_name']."    ".$row['l_name'];?></td>
            <td><?php echo $row['gender'];?></td>
            <td><?php echo $row['dob'];?></td>
            <td><?php echo $row['pob'];?></td>
            <td><?php echo $row['address'];?></td>
            <td><?php echo $row['phone'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['note'];?></td>
            <td><a href="?tag=student_entry&opr=upd&rs_id=<?php echo $row['stu_id'];?>" title="Update"><img style="-webkit-box-shadow: 0px 0px 0px 0px rgba(50, 50, 50, 0.75);-moz-box-shadow:    0px 0px 0px 0px rgba(50, 50, 50, 0.75);box-shadow:         0px 0px 0px 0px rgba(50, 50, 50, 0.75);" src="picture/update.png" height="20" alt="Update" /></a></td>
            <td><a href="?tag=view_students&opr=del&rs_id=<?php echo $row['stu_id'];?>" title="Delete"><img style="-webkit-box-shadow: 0px 0px 0px 0px rgba(50, 50, 50, 0.75);-moz-box-shadow:    0px 0px 0px 0px rgba(50, 50, 50, 0.75);box-shadow:         0px 0px 0px 0px rgba(50, 50, 50, 0.75);" src="picture/delete.jpg" height="20" alt="Delete" /></a></td>

        </tr>
    <?php
    }
	// ----- for search studnens------


    ?>
    </table>
</form>
</div>
</body>
</html>
