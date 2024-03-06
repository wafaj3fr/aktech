<?php

include("../../conn.php");
$di = $_GET['id_OppStutas'];
 $sql_opp2 = "UPDATE opportunities SET statusopportunities='Close' WHERE idOpportunities=".$di;
 if ($conn->query($sql_opp2) === TRUE){
   echo "Done1";
   echo '<script>window.location.href = "http://localhost/bAC/admin/pages/tables/AllOpportunities.php";</script>';

 } else {
   echo "Error updating record: " . $conn->error;
 }
?>