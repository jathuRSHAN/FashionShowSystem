<?php
// include database connection file
require_once'connection_index.php';
if(isset($_POST['login']))
{
// Posted Values  
$s_l_id=$_POST['id'];
$pass=$_POST['p'];
// Call the store procedure for insertion
$sql=mysqli_query($con,"call login('$s_l_id','$pass')");
$row=mysqli_num_rows($sql);
if($row==1)
{
// Message for successfull insertion
echo "<script>alert('login successfull');</script>";
echo "<script>window.location.href='admin.php'</script>"; 
}
else 
{
// Message for unsuccessfull insertion
echo "<script>alert('log in unsuccesfull');</script>";
echo "<script>window.location.href='login.php'</script>"; 
}
}
?>

<!DOCTYPE html>
<html lang="en">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h3 style="color:red;"><b><FONT size='90px'>Sales and Report Management System for Commercial Store LOGIN </font></h3>
<hr />
</div>
</div>

<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>Staff Login ID</b>
<input type="text" name="id" class="form-control" required>
</div>
</div> 
<div class="row">
<div class="col-md-4"><b>Password</b>
<input type="text" name="p" class="form-control" required>
</div> 
</div> 

<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="login" value="Submit">
</div>
</div> 
</form>
     
</div>
</div>
</body>
</html>