<?php
include("../../conn.php");

// sql to delete a record
$sql = "DELETE FROM opportunities WHERE idOpportunities =".$_GET['id_OppDel'];

if (mysqli_query($conn, $sql)) {
//   echo "Record deleted successfully";
  echo '<script>window.location.href = "http://localhost/bAC/admin/pages/tables/AllOpportunities.php";</script>';
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
?>