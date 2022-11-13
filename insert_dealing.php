

<?php
// include database connection file
require_once'connection_index.php';
if(isset($_POST['insert']))
{
// Posted Values  
$l_ssn=$_POST['sid'];
$l_na=$_POST['qid'];
$l_pln=$_POST['did'];
$l_am=$_POST['pn'];
$l_pn=$_POST['sn'];

// Call the store procedure for insertion
$sql=mysqli_query($con,"call insert_dealing('$l_ssn','$l_na','$l_pln','$l_am','$l_pn')");
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='dealings_shop.php'</script>"; 
}
else 
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='dealings_shop.php'</script>"; 
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
<a href="dealing_shop.php"><button class="btn btn-warning">Back</button></a>
<hr />
</div>
</div>

<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>shop_id</b>
<input type="text" name="sid" class="form-control" required>
</div>
<div class="col-md-4"><b>QR_id</b>
<input type="text" name="qid" class="form-control" required>
</div>
<div class="col-md-4"><b>dealer_id</b>
<input type="text" name="did" class="form-control" required>
</div>
<div class="col-md-4"><b>p_number</b>
<input type="text" name="pn" class="form-control" required>
</div>
<div class="col-md-4"><b>Shop_name</b>
<input type="text" name="sn" class="form-control" required>
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