<?php
// include database connection file
require_once'connection_index.php';
if(isset($_POST['insert']))
{
// Posted Values  
$l_qid=$_POST['qid'];
$l_bid=$_POST['bid'];
$l_sid=$_POST['sid'];
$l_pr=$_POST['pr'];
$l_d=$_POST['d'];


// Call the store procedure for insertion
$sql=mysqli_query($con,"call insert_sales('$l_qid','$l_bid','$l_sid','$l_pr','$l_d')");
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='sales_history.php'</script>"; 
}
else 
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='sales_history.php'</script>"; 
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
<a href="sales_history.php"><button >Back</button></a>
<hr />
</div>
</div>

<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>QR_id</b>
<input type="text" name="qid" class="form-control" required>
</div>
<div class="col-md-4"><b>buyer_id</b>
<input type="text" name="bid" class="form-control" required>
</div>
<div class="col-md-4"><b>Seller_id</b>
<input type="text" name="sid" class="form-control" required>
</div>
<div class="col-md-4"><b>price</b>
<input type="text" name="pr" class="form-control" required>
</div>
<div class="col-md-4"><b>date</b>
<input type="text" name="d" class="form-control" required>
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