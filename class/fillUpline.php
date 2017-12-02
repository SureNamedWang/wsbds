<?php
//$id = $_GET['id'];
//$urutan = $_GET['no'];
//$sql = "INSERT INTO `survey_upline` (`id_survey`, `urutan`, `outlet`) VALUES ('', '', '')";
//$sql = "select nama as a, propinsi as b, kabupaten as c from outlet where id=" . $id;
//$result = $conn->query($sqlUpline);
//
//if ($result->num_rows > 0) {
//    //while ($row = $result->fetch_assoc()) {
//        echo "<tr>"
//        . "<td>" . $urutan . "</td>"
//        . "<td>" . $row['a'] . "</td>"
//        . "<td>" . $row['b'] . "</td>"
//        . "<td>" . $row['c'] . "</td>"
//        . "<td>"
//        . "</tr>";
//    }
//}
$sql="SELECT o.id,o.nama,r.name as 'kabupaten',p.name as 'propinsi' "
        . "FROM outlet o INNER JOIN regencies r ON o.kabupaten=r.id "
        . "INNER JOIN provinces p ON o.propinsi=p.id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    ?>
    <?php
    while ($row = $result->fetch_assoc()) {
        ?>
        <option value="<?php echo $row['id']."/".$row['nama']."/".$row['propinsi']."/".$row['kabupaten']."/".$row['propinsi']; ?>"><?php echo $row['id'] . '. ' . $row['nama']; ?></option>
        <?php
    }
    ?>
    <?php
} else {
    echo "0 results";
}
?>
