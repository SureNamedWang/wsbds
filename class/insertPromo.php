<?php

include ("connection.php");
$id = $_POST['id'];
$materialPromo = $_POST['materialPromo'];
$merk = $_POST['merk'];
$sql = "INSERT INTO `survey_promo` (`id_survey`, `merk`, `material_promo`) VALUES ('" . $id . "', '" . $merk . "', '" . $materialPromo . "')";
if ($result = $conn->query($sql)) {
    
} else {
    echo 'error input Promo';
}
?>