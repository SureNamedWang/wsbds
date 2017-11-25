<script>
    var counter = 0;
</script>

<?php
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    ?>
    <?php
    while ($row = $result->fetch_assoc()) {
        ?>

        <tr>
            <td><?php echo $row['No'];?></td>
            <td id="<?php echo 'kategori'.$row['No'];?>"><?php echo $row['Kategori_Produk'];?></td>
            <td id="<?php echo 'produsen'.$row['No'];?>"><?php echo $row['Produsen'];?></td>
            <td id="<?php echo 'merk'.$row['No'];?>"><?php echo $row['Merk'];?></td>
            <td><input type="checkbox" id="<?php echo 'produk'.$row['No']; ?>"/></td>
            <td><div id="<?php echo 'urutan'.$row['No']; ?>"></td>
            </tr>
            <script>
                $('#produk<?php echo $row["No"]; ?>').on('click', function(){
                    if(this.checked){
                        counter+=1;
                        if( $('#urutan<?php echo $row["No"]; ?>').is(':empty') ){
                            $('#urutan<?php echo $row["No"]; ?>').append(counter);
                            //$('#produk<?php echo $row["No"]; ?>').prop('disabled',true);
                            var kategori = $("#<?php echo 'kategori'.$row['No'];?>").text();
                            var produsen = $("#<?php echo 'produsen'.$row['No'];?>").text();
                            var merk = $("#<?php echo 'merk'.$row['No'];?>").text();
                            var template = '<tr class="clickable-row">'+
                            '<td>'+kategori+'</td>'+
                            '<td>'+produsen+'</td>'+
                            '<td>'+merk+'</td>'+
                            '</tr>';
                            $("#tblData tbody").append(template);
                        } else {
                            $('#urutan<?php echo $row["No"]; ?>').empty();
                        }
                    } else {
                        counter--;
                        $('#urutan<?php echo $row["No"]; ?>').empty();
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