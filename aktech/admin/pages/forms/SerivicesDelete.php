<?php
  include("../../conn.php");

// sql to delete a record
$sql = "DELETE FROM services WHERE servicesid  =".$_GET['id_ServicesDel'];

if (mysqli_query($conn, $sql)) {
//   echo "Record deleted successfully";
  echo '<script>window.location.href = "../tables/content.php";</script>';

} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
?>