<?php
// include database connection file
require_once'connection_index.php';
?>
<!DOCTYPE html>
<html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<body>





<hr />



<a href="sales_history.php"><button >Add_sales_history </button></a><hr />
<hr />



<h3 style="color:blue;"><b><FONT size='12px'>   Sales and Report Management System for Commercial Store</font></b></h3>

<hr />





<h4> <b>Login as Admin :</b></h4>
<a href="login.php"><button > Login</button></a> 

<hr />

<h3> <b><u>product_details</u></b></h3> 
<div class="table-responsive">
<table id="mytable" class="table table-bordred table-striped">

<thead>
<th>NO.</th>
<th>QR_id </th>
<th>DressName</th>
<th>Tailor_id</th>
<th>Tailor_name</th>
<th>Price</th>
<th>delete</th>
</thead>


<tbody>

<?php
$sql =mysqli_query($con, "call product_details()");
$cnt=1;
$row=mysqli_num_rows($sql);
if($row>0){
while ($result=mysqli_fetch_array($sql)) {
?>

<tr>
<td><?php echo htmlentities($cnt);?></td>
<td><?php echo htmlentities($result['QR_id']);?></td>
<td><?php echo htmlentities($result['DressName']);?></td>
<td><?php echo htmlentities($result['Tailor_id']);?></td>
<td><?php echo htmlentities($result['Tailor_Name']);?></td>
<td><?php echo htmlentities($result['Price']);?></td>
<td><a href="delete_products.php?id=<?php echo htmlentities($result['QR_id']);?>"><button class="btn btn-warning btn-xs"><span class="material-icons"></span></button></a></td>
</tr>

<?php 
// for serial number increment
$cnt++;
} } else { ?> 
<tr> 
<td colspan="9" style="color:red; font-weight:bold;text-align:center;"> No Record found</td>
</tr>
<?php } ?>

</tbody> 

</body>
</html>