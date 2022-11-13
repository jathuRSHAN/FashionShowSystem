

<?php
// include database connection file
require_once'connection_index.php';
if(isset($_POST['insert']))
{
// Posted Values  
$l_ssn=$_POST['ssn'];
$l_na=$_POST['fn'];
$l_pn=$_POST['ln'];
$l_am=$_POST['sa'];
$l_pn=$_POST['pn'];
$l_eid=$_POST['ad'];

// Call the store procedure for insertion
$sql=mysqli_query($con,"call insert_employee('$l_ssn','$l_na','$l_pn','$l_am','$l_pn','$l_eid')");
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='employee.php'</script>"; 
}
else 
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='employee.php'</script>"; 
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
<a href="employee.php"><button class="btn btn-warning">Back</button></a>
<hr />
</div>
</div>

<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>Ssn</b>
<input type="text" name="ssn" class="form-control" required>
</div>
<div class="col-md-4"><b>FirstName</b>
<input type="text" name="fn" class="form-control" required>
</div>
<div class="col-md-4"><b>LastName</b>
<input type="text" name="ln" class="form-control" required>
</div>
<div class="col-md-4"><b>salary</b>
<input type="text" name="sa" class="form-control" required>
</div>
<div class="col-md-4"><b>P_number</b>
<input type="text" name="pn" class="form-control" required>
</div>
<div class="col-md-4"><b>address</b>
<input type="text" name="ad" class="form-control" required>
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