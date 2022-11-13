<?php
// include database connection file
require_once'connection_index.php';
if(isset($_POST['insert']))
{
// Posted Values  
$l_id=$_POST['qid'];
$l_dna=$_POST['dna'];
$l_tid=$_POST['tid'];
$l_tna=$_POST['tna'];
$l_pr=$_POST['pr'];


// Call the store procedure for insertion
$sql=mysqli_query($con,"call insert_product('$l_id','$l_dna','$l_tid','$l_tna','$l_pr')");
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='products.php'</script>"; 
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
<a href="products.php"><button class="btn btn-warning">Back</button></a>
<hr />
</div>
</div>

<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>QR_id</b>
<input type="text" name="qid" class="form-control" required>
</div>
<div class="col-md-4"><b>DressName</b>
<input type="text" name="dna" class="form-control" required>
</div>
<div class="col-md-4"><b>Tailor_id</b>
<input type="text" name="tid" class="form-control" required>
</div>
<div class="col-md-4"><b>Tailor_Name</b>
<input type="text" name="tna" class="form-control" required>
</div>
<div class="col-md-4"><b>price</b>
<input type="text" name="pr" class="form-control" required>
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