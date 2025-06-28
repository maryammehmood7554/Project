<?php
session_start();
session_destroy();
header("location:about.php?msg=Can You Please Tell US About Your Experience");
?>