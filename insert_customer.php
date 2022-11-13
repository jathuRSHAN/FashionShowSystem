

<?php
// include database connection file
require_once'connection_index.php';
if(isset($_POST['insert']))
{
// Posted Values  
$l_cid=$_POST['cid'];
$l_na=$_POST['na'];
$l_pn=$_POST['pn'];
$l_am=$_POST['am'];
$l_eid=$_POST['eid'];
$l_qid=$_POST['qid'];

// Call the store procedure for insertion
$sql=mysqli_query($con,"call insert_customer('$l_cid','$l_na','$l_pn','$l_am','$l_eid','$l_qid')");
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='customer.php'</script>"; 
}
else 
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='customer.php'</script>"; 
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
<a href="customer.php"><button class="btn btn-warning">Back</button></a>
<hr />
</div>
</div>

<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>customer_id</b>
<input type="text" name="cid" class="form-control" required>
</div>
<div class="col-md-4"><b>Name</b>
<input type="text" name="na" class="form-control" required>
</div>
<div class="col-md-4"><b>P_number</b>
<input type="text" name="pn" class="form-control" required>
</div>
<div class="col-md-4"><b>buy_total_amunt</b>
<input type="text" name="am" class="form-control" required>
</div>
<div class="col-md-4"><b>employee_id</b>
<input type="text" name="eid" class="form-control" required>
</div>
<div class="col-md-4"><b>QR_id</b>
<input type="text" name="qid" class="form-control" required>
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