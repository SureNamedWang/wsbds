<?php

include ("connection.php");
$id = $_POST['id'];
$urutan = $_POST['urutan'];
$merk = $_POST['merk'];
$sql = "INSERT INTO `survey_laris` (`id_survey`, `merk`, `urutan`) VALUES ('" . $id . "', '" . $merk . "', '" . $urutan . "')";
if ($result = $conn->query($sql)) {
    
} else {
    echo 'error input lakupermerk';
}
?>