<?php
// include database connection file
require_once'connection_index.php';
?>
<!DOCTYPE html>
<html lang="en">


<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h3><b><FONT size='50px'> Details</font></b></h3> <hr />
<a href="admin.php"><button class="btn btn-warning">Back</button></a>
<a href="insert_customer.php"><button class="btn btn-warning">Add </button></a><hr />
<div class="table-responsive">
<table id="mytable" class="table table-bordred table-striped">
<thead>
<th>NO.</th>
<th>customer_id</th>
<th>Name</th>
<th>P_number</th>
<th>buy_total_amunt</th>
<th>employee_id</th>
<th>QR_id</th>

</thead>
<tbody>
<?php
$sql =mysqli_query($con, "call customer_details()");
$cnt=1;
$row=mysqli_num_rows($sql);
if($row>0){
while ($result=mysqli_fetch_array($sql)) {
?>

<tr>
<td><?php echo htmlentities($cnt);?></td>
<td><?php echo htmlentities($result['customer_id']);?></td>
<td><?php echo htmlentities($result['Name']);?></td>
<td><?php echo htmlentities($result['P_number']);?></td>
<td><?php echo htmlentities($result['buy_total_amunt']);?></td>
<td><?php echo htmlentities($result['employee_id']);?></td>
<td><?php echo htmlentities($result['QR_id']);?></td>

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
</table>
</div>
</div>
</div>
</div>
</body>
</html>