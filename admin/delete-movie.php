<?php

$con=mysqli_connect("localhost","root","","movies");
if($_GET["movie"]){
    $to_dlt=$_GET["movie"];
    $delete="Delete from movies WHERE id= $to_dlt";
    $runquery=mysqli_query($con,$delete);

    if($runquery){
        header("Location:admin_dashboard.php?msg=deleted success");
    }
}
?>