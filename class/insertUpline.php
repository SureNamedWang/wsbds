<?php

include ("connection.php");
$id = $_POST['id'];
$merk = $_POST['merk'];
$urutan = $_POST['urutan'];
$outlet = $_POST['outlet'];
$sql = "SELECT id FROM outlet WHERE nama='" . $outlet."'";
//$result = $conn->query($sql);
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $outlet = $row['id'];
    }
}
$sql = "INSERT INTO `survey_upline` (`id_survey`, `merk`, `urutan`, `outlet`) "
        . "VALUES ('" . $id . "',"
        . " '" . $merk . "',"
        . " '" . $urutan . "',"
        . " '" . $outlet . "')";
if ($result = $conn->query($sql)) {
    
}
?>