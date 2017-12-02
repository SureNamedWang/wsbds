<?php

include ("connection.php");
$id = $_POST['id'];
$surveyor = $_POST['surveyor'];
$tanggal = $_POST['tanggal'];
$outlet = $_POST['outlet'];
$catatan=$_POST['catatan'];
$sql = "INSERT INTO `survey_detail` (`id`, `surveyor`, `outlet`, `tanggal`, `catatan`) "
        . "VALUES ('" . $id . "',"
        . " '" . $surveyor . "',"
        . " '" . $outlet . "',"
        . " '" . $tanggal . "',"
        . " '" . $catatan . "')";
if ($result = $conn->query($sql)) {
    
} else {
    echo 'error input lakupermerk';
}
?>