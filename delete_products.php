<?php

require_once'connection_index.php';
$id=$_GET['id'];

//$sq= "DELETE from 'products' where QR_id=$id";
$sql = mysqli_query($con,"call delete_products('$id')");
//$sql =mysqli_query($con ,$sq);

if($sql){
    header("location: index.php?msg=Record deleted succesfully");
}
else
{
   echo "failed:" .mysqi_error($conn);
}
?>