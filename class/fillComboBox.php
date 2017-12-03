<?php

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    ?>
        <?php
        while ($row = $result->fetch_assoc()) {
            ?>
            <option value="<?php echo $row['b'];?>"><?php echo $row['a'];?></option>
            <?php
        }
        ?>
    <?php
} else {
    echo "0 results";
}
?>