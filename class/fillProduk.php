<?php
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    ?>
    <?php
    while ($row = $result->fetch_assoc()) {
        ?>

        <tr>
            <td><?php echo $row['No']; ?></td>
            <td id="<?php echo 'kategori' . $row['No']; ?>"><?php echo $row['Kategori_Produk']; ?></td>
            <td id="<?php echo 'produsen' . $row['No']; ?>"><?php echo $row['Produsen']; ?></td>
            <td id="<?php echo 'merk' . $row['No']; ?>"><?php echo $row['Merk']; ?></td>
            <td><input type="checkbox" id="<?php echo 'produk' . $row['No']; ?>"/></td>
            <td><div id="<?php echo 'urutan' . $row['No']; ?>"></td>
        </tr>
        <script>
            $('#produk<?php echo $row["No"]; ?>').on('click', function () {
                if (this.checked) {
                    counter += 1;
                    if ($('#urutan<?php echo $row["No"]; ?>').is(':empty')) {
                        $('#urutan<?php echo $row["No"]; ?>').append(counter);
                        //$('#produk<?php echo $row["No"]; ?>').prop('disabled',true);
                        var kategori = $("#<?php echo 'kategori' . $row['No']; ?>").text();
                        var produsen = $("#<?php echo 'produsen' . $row['No']; ?>").text();
                        var merk = $("#<?php echo 'merk' . $row['No']; ?>").text();
                        var btnPilihPromo = '<button id="<?php echo 'btnPilihPromo' . $row['No']; ?>">Pilih</button>';
                        var template = '<tr>' +
                                '<td>' + kategori + '</td>' +
                                '<td>' + produsen + '</td>' +
                                '<td>' + merk + '</td>' +
                                '<td>' + btnPilihPromo + '</td>' +
                                '</tr>';
                        $("#tblData tbody").append(template);
                        var btnPilihMerk = '<button id="<?php echo 'btnPilihMerkUpline' . $row['No']; ?>">Pilih</button>';
                        var template2 = '<tr>' +
                                '<td>' + merk + '</td>' +
                                '<td>' + btnPilihMerk + '</td>' +
                                '</tr>';
                        $("#tblMerkUpline tbody").append(template2);
                        $('#btnPilihMerkUpline<?php echo $row["No"]; ?>').on('click', function () {
                            if ($('#titleUpline').is(':empty')) {
                                $("#titleUpline").append(' (' + merk + ')');
                            } else {
                                $('#titleUpline').empty();
                                $("#titleUpline").append('FORM UPLINE (' + merk + ')');
                            }
                            idBarang2 = '<?php echo $row["No"]; ?>';
                            namaBarang2 = '<?php echo $row["Merk"] ?>';
                            $("#tblUpline tbody").html("");
                            if (arrUpline[idBarang2].length > 1) {
                                var counter=arrUpline[idBarang2].length;
                                for (i = 1; i < counter; i++) {
                                    var arrIsi = arrUpline[idBarang2][i].split('/');
                                    var tempUpline = '<tr>' +
                                            '<td>' + arrIsi[0] + '</td>' +
                                            '<td>' + arrIsi[1] + '</td>' +
                                            '<td>' + arrIsi[2] + '</td>' +
                                            '<td>' + arrIsi[3] + '</td>' +
                                            '<td>' + arrIsi[4] + '</td>' +
                                            '</tr>';
                                    $("#tblUpline tbody").append(tempUpline);
                                }
                            }
                        });
                        $('#btnPilihPromo<?php echo $row["No"]; ?>').on('click', function () {
                            if ($('#titlepromo').is(':empty')) {
                                $("#titlepromo").append(' (' + merk + ')');
                            } else {
                                $('#titlepromo').empty();
                                $("#titlepromo").append('PROMO (' + merk + ')');
                                for (i = 1; i <= 12; i++) {
                                    if (arrPromo[<?php echo $row["No"]; ?>][i] == true) {
                                        $('#promo' + i).prop("checked", true);
                                    } else {
                                        $('#promo' + i).prop("checked", false);
                                    }
                                }
                            }
                            //show promolist
                            idBarang = '<?php echo $row["No"]; ?>';
                            alert(idBarang);
                        });
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