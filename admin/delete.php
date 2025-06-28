<?php

$con=mysqli_connect("localhost","root","","movies-registration");
if($_GET["users"]){
    $to_dlt=$_GET["users"];
    $delete="Delete from movies WHERE id= $to_dlt";
    $runquery=mysqli_query($con,$delete);

    if($runquery){
        header("Location:admin_dashboard.php?msg=deleted success");
    }
}
?>