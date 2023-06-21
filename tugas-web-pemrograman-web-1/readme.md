<!--  jika button ubah foto di klik untuk upload file -->
    <?php if (isset($_POST['ubahfoto'])) { ?>
        <?php
        echo "<br>";
        // untuk melihat nama gambarnya
        $namaGambar = $_FILES['inputfoto']['name'];
        // bisa digunakan untuk cek error atau tidak
        $error = $_FILES['inputfoto']['error'];
        // tempat menyimpanan gambar
        $tempName = $_FILES['inputfoto']['tmp_name'];
        // size gambar
        $sizeGambar = $_FILES['inputfoto']['size'];
        var_dump($_FILES);
        ?>

        <!-- cek jika gambar belum di pilih -->
        <?php if ($error === 4) { ?>
            <script>
                alert('gambar belum di pilih');
            </script>
        <?php } ?>
        <!-- cek apakah yang diupload gambar atau bukan -->
        <?php
        $extensiGambarValid = [
            'jpg',
            'jpeg',
            'png'
        ];
        $extensiGambar = explode('.', $namaGambar);
        // memaksa inputan extensi menjadi huruf kecil
        $extensiGambar = strtolower(end($extensiGambar));
        ?>
        <!-- cek apakah sebuah string ada di array -->
        <?php if (empty($namaGambar)) { ?>
            <script>
                alert('harap masukkan file');
            </script>

            <!-- cek apakah file yang di upload bukan gambar -->
        <?php } else if (!in_array($extensiGambar, $extensiGambarValid)) { ?>
                <script>
                    alert('File yang upload bukan gambar');
                </script>
                <!-- cek apakah gambar yang di upload lebih dari 2mb -->
        <?php } else if ($sizeGambar > 2000_000) { ?>
                    <script>
                        alert('file gambar terlalu besar');
                    </script>
        <?php } else { ?>
            <!-- upload file di directory -->
            <?php 
             move_uploaded_file($tempName,'upload/fotoProfil/'. $namaGambar);
             

            ?>
        <?php } ?>
    <?php } ?>













    <!-- upload file -->

    <?php if (isset($_POST['ubahfoto'])) { ?>
        <?php
        $fileName = $_FILES['inputfoto']['name'];
        $fileType = $_FILES['inputfoto']['type'];
        $tempName = $_FILES['inputfoto']['temp_name'];
        $error = $_FILES['inputfoto']['error'];
        $fileSize = $_FILES['inputfoto']['size'];
        ?>
        <!-- cek jika file sudah di pilih -->
        <?php if (is_uploaded_file($tempName)) { ?>
            <!-- cek maxsimum size file -->
            <?php if ($fileSize < 2000000) { ?>
                <!-- cek format file -->
                <?php if (
                    !$fileType === "image/jpg" ||
                    !$fileType === "image/jpg" ||
                    !$fileType === "image/png"
                ) { ?>
                    <!-- lokasi upload file -->
                    <?php if (move_uploaded_file($tempName, 'upload/fotoProfil/$fileName')) { ?>
                        <script>
                            alert('sukses upload file');
                        </script>
                    <?php } else { ?>
                        <script>
                            alert('gagal upload file');
                        </script>
                    <?php } ?>

                <?php } else { ?>
                    <script>
                        alert('format file salah <br>format file (jpg, jpeg, atau png)')
                    </script>
                <?php } ?>

            <?php } else { ?>
                <script>
                    alert('file terlalu besar (max. 2mb)');
                </script>
            <?php } ?>

        <?php } else { ?>
            <!-- jika file belum dipilih -->
            <script>
                alert('file belum di pilih')
            </script>
        <?php } ?>
    <?php } else { ?>
        <script>
            alert('pilih file');
        </script>
    <?php } ?>