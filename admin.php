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

<h3 style="color:green;"><b><FONT size='50px'>Sales and Report Management System for Commercial Store</font></h3> <hr />


<?php
echo "<img src='image2.jpg' >"
?> 

<a href="index.php"><button > Log out</button></a><hr />


<a href="customer.php"><button >customer </button></a>
<hr/>
<a href="products.php"><button >products </button></a>
<hr />
<a href="employee.php"><button >employee</button></a><hr />
<a href="employee_admin.php"><button >employee_admin</button></a>
<hr/>
<a href="dealings_shop.php"><button >dealing_shop</button></a>
<hr/>


</div>
</div>
</div>
</div>
</body>
</html>