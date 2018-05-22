
<?php
include("db_connection.php");
session_start();
session_destroy();

echo "<h4 style='color:forestgreen'>You are successfully logout.</h4>";
//header('location:index.php');

?>
