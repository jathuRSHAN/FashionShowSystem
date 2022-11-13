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
<a href="insert_dealing.php"><button class="btn btn-warning">Add </button></a><hr />
<div class="table-responsive">
<table id="mytable" class="table table-bordred table-striped">
<thead>
<th>NO.</th>
<th>Shop_id</th>
<th>QR_id</th>
<th>dealer_id</th>
<th>p_number</th>
<th>shop_name</th>


</thead>
<tbody>
<?php
$sql =mysqli_query($con, "call dealing_shop_details()");
$cnt=1;
$row=mysqli_num_rows($sql);
if($row>0){
while ($result=mysqli_fetch_array($sql)) {
?>

<tr>
<td><?php echo htmlentities($cnt);?></td>
<td><?php echo htmlentities($result['Shop_id']);?></td>
<td><?php echo htmlentities($result['QR_id']);?></td>
<td><?php echo htmlentities($result['dealer_id']);?></td>
<td><?php echo htmlentities($result['p_number']);?></td>
<td><?php echo htmlentities($result['shop_name']);?></td>


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