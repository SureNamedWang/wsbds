<?php
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    ?>
    <?php
    while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td id="barangpromo<?php echo $row['No'] ?>"><?php echo $row['Material_Promo']; ?></td>
            <td><input type="checkbox" id="<?php echo 'promo' . $row['No']; ?>"/></td>
        </tr>
<script>
    $('#promo<?php echo $row["No"]; ?>').on('click', function () {
        if (this.checked) {
            arrPromo[idBarang][<?php echo $row['No'] ?>] = true;
            alert(idBarang+' '+<?php echo $row['No'] ?>+' '+arrPromo[''+idBarang]['<?php echo $row['No']?>']);
        }
        else{
            arrPromo[idBarang][<?php echo $row['No'] ?>] = false;
            alert(idBarang+' '+<?php echo $row['No'] ?>+' '+arrPromo[idBarang][<?php echo $row['No']?>]);
        }
        
    });
</script>
        <?php
    }
    ?>
    <?php
} else {
    echo "0 results";
}
?>
