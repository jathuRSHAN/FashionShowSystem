

<?php
// include database connection file
require_once'connection_index.php';
if(isset($_POST['insert']))
{
// Posted Values  
$l_ssn=$_POST['id'];
$l_na=$_POST['p'];


// Call the store procedure for insertion
$sql=mysqli_query($con,"call insert_admin('$l_ssn','$l_na')");
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='employee_admin.php'</script>"; 
}
else 
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='employee_admin.php'</script>"; 
}
}
?>



<!DOCTYPE html>
<html lang="en">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">

<body>
    
<div class="container">
<div class="row">
<div class="col-md-12">
<h3> Details</h3><hr />
<a href="employee_admin.php"><button class="btn btn-warning">Back</button></a>
<hr />
</div>
</div>

<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>admin_id</b>
<input type="text" name="id" class="form-control" required>
</div>
<div class="col-md-4"><b>password</b>
<input type="text" name="p" class="form-control" required>
</div>

</div>  

<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="insert" value="Submit">
</div>
</div> 
</form>
     
</div>
</div>
</body>
</html>