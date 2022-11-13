

<?php
// include database connection file
require_once'connection_index.php';
if(isset($_POST['update']))
{
// Get the row id
$id=$_GET['id'];
// Posted Values  
$P=$_POST['am'];

// Store  Procedure for Updation
$sql=mysqli_query($con,"call edit_customer('$id','$P')");
// Mesage after updation
echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='customer.php'</script>"; 
}
?>



<!DOCTYPE html>
<html lang="en">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">


<body>

<div class="container">

<div class="row">
<div class="col-md-12">
<h3>Edit Details</h3>
<hr />

</div>
</div>

<?php 
// Get the id
$id=$_GET['id'];
$sql =mysqli_query($con, "call edit_customer_row('$id')");
while ($result=mysqli_fetch_array($sql)) {                 
?>


<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>buy_total_amunt</b>
<input type="text" name="am" value="<?php echo htmlentities($result['buy_total_amunt']);?>" class="form-control" required>
</div>
</div> 
  
<?php } ?>



<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="update" value="Update">
</div>
</div> 

</form>

</div>
</div>
</div>
</body>
</html>