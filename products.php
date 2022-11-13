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
<a href="admin.php"><button >Back</button></a>
<a href="insert_products.php"><button >Add </button></a><hr />
<div class="table-responsive">
<table id="mytable" class="table table-bordred table-striped">
<thead>
<th>NO.</th>
<th>QR_id </th>
<th>DressName</th>
<th>Tailor_id</th>
<th>Tailor_Name</th>
<th>Price</th>
<th>Edit</th>

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
<td><a href="edit_products.php?id=<?php echo htmlentities($result['QR_id']);?>"><button class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>

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