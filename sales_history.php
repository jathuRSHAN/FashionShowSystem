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
<h3><b><FONT size='50px'>sales_history Details</font></b></h3> <hr />
<a href="index.php"><button >Back</button></a>
<a href="insert_sales.php"><button >Add </button></a><hr />
<div class="table-responsive">
<table id="mytable" class="table table-bordred table-striped">
<thead>
<th>No.</th>
<th>QR_id</th>
<th>buyer id</th>
<th>Seller_id</th>
<th>price</th>
<th>date</th>
</thead>
<tbody>
<?php
$sql =mysqli_query($con, "call s_history()");
$cnt=1;
$row=mysqli_num_rows($sql);
if($row>0){
while ($result=mysqli_fetch_array($sql)) {
?>

<tr>
<td><?php echo htmlentities($cnt);?></td>
<td><?php echo htmlentities($result['QR_id']);?></td>
<td><?php echo htmlentities($result['buyer_id']);?></td>
<td><?php echo htmlentities($result['Seller_id']);?></td>
<td><?php echo htmlentities($result['price']);?></td>
<td><?php echo htmlentities($result['date']);?></td>
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