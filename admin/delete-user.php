<?php
include('../includes/configpdo.php');
$sql = "DELETE FROM tblusers WHERE id='" . $_GET["tid"] . "'";
if (mysqli_query($mysqli, $sql)) {
    echo "Record deleted successfully";
    header('Location: manage-users.php');
} else {
    echo "Error deleting record: " . mysqli_error($mysqli);
    header('Location: manage-users.php');
}
mysqli_close($mysqli);
?>