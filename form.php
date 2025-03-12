<?php
$name = isset($_GET['nama']) ? $_GET['nama'] : '';
$nrp = isset($_GET['nrp']) ? $_GET['nrp'] : '';
$class = isset($_GET['class']) ? $_GET['class'] : '';
$sex = isset($_GET['jk']) ? $_GET['jk'] : '';
$religion = isset($_GET['religion']) ? $_GET['religion'] : '';
$birth = isset($_GET['birth']) ? $_GET['birth'] : '';
$address = isset($_GET['address']) ? $_GET['address'] : '';
$ES = isset($_GET['ES']) ? $_GET['ES'] : '';
$JHS = isset($_GET['JHS']) ? $_GET['JHS'] : '';
$SHS = isset($_GET['SHS']) ? $_GET['SHS'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';
$homepage = isset($_GET['homepage']) ? $_GET['homepage'] : '';
$hoby = isset($_GET['hoby']) ? $_GET['hoby'] : '';
$interest = isset($_GET['interest']) ? $_GET['interest'] : '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Emblema+One&display=swap"
        rel="stylesheet">
</head>

<body>
    <h3 class="text-center mt-5">Form Data Mahasiswa</h3>
    <section class="container">
        <div class="column1">
            <form action="data.php" method="POST" name="form1">
                <div class="mb-2">
                    <label for="nama" class="form-label">Nama : </label>
                    <input class="form-control" type="text" name="nama" id="nm" />
                </div>
                <div class="mb-2">
                    <label for="nrp" class="form-label">NRP : </label>
                    <input class="form-control" type="text" name="nrp" id="nrp" />
                </div>
                <div class="mb-2">
                    <label for="kelas" kelas="form-label">Kelas : </label>
                    <input class="form-control" type="text" name="kelas" id="kelas" />
                </div>
                <div class="mb-2">
                    <label for="jk" class="form-label">Jenis Kelamin : </label>
                    <div>
                        <input class="form-check-input" type="radio" name="jk" id="jk" value="Pria">
                        <label class="form-check-label" for="jk">
                            Pria
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input" type="radio" name="jk" id="jk" value="Wanita">
                        <label class="form-check-label" for="jk">
                            Wanita
                        </label>
                    </div>
                </div>
                <div class="mb-2">
                    <label for="agama" class="form-label">Agama : </label>
                    <select class="form-select" name="agama" id="agama">
                        <option>Pilih</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                        <option value="Kepercayaan">Lainnya</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="ttl" class="form-label">Tempat / Tanggal Lahir : </label>
                    <input class="form-control" type="text" name="ttl" id="ttl" title="Enter your date of birth" />
                </div>
                <div class="mb-2">
                    <label for="alamat" class="form-label">Alamat : </label>
                    <textarea class="form-control" name="alamat" id="alamat"></textarea>
                </div>
                <div class="mb-2">
                    <label for="riwayat_pendidikan">Riwayat Pendidikan</label>
                    <div class="ms-5">
                        <label for="sd">SD : </label>
                        <input class="form-control" type="text" name="sd" id="riwayat_pendidikan" />
                        <label for="smp">SMP : </label>
                        <input class="form-control" type="text" name="smp" id="riwayat_pendidikan" />
                        <label for="sma">SMA : </label>
                        <input class="form-control" type="text" name="sma" id="riwayat_pendidikan" />
                    </div>
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label">Email : </label>
                    <input class="form-control" type="email" name="email" id="email" />
                </div>
                <div class="mb-2">
                    <label for="hp" class="form-label">Homepage : </label>
                    <input class="form-control" type="text" name="hp" id="hp" />
                </div>
                <div class="mb-2">
                    <label for="hobi" class="form-label">Hobi : </label>
                    <textarea class="form-control" name="hobi" id="hobi"></textarea>
                </div>
                <div class="mb-2">
                    <label for="interest" class="form-label">Interest : </label>
                    <div class="form-check">
                        <input class="form-check-input" name="interest[]" type="checkbox" value="Komputer"
                            id="interest">
                        <label class="form-check-label" for="komputer">
                            Komputer
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="interest[]" type="checkbox" value="Sport" id="interest">
                        <label class="form-check-label" for="sport">
                            Sport
                        </label>
                    </div>
                    <div class="form-check" name="travelling">
                        <input class="form-check-input" name="interest[]" type="checkbox" value="Travelling"
                            id="travelling">
                        <label class="form-check-label" for="travelling">
                            Travelling
                        </label>
                    </div>
                    <div class="form-check" name="writing">
                        <input class="form-check-input" name="interest[]" type="checkbox" value="Writing" id="writing">
                        <label class="form-check-label" for="writing">
                            Writing
                        </label>
                    </div>
                    <div class="form-check" name="reading">
                        <input class="form-check-input" name="interest[]" type="checkbox" value="Reading" id="reading">
                        <label class="form-check-label" for="reading">
                            Reading
                        </label>
                    </div>
                </div>
                <div class="m-3">
                    <button type="submit">Submit</button>
                    <button type="reset">Reset</button>
                    <a href="readData.php"><button type="button">Lihat Data</button></a>
                </div>
            </form>
        </div>
        <div class="column2">
            <div class="alert mt-3">
                <strong>Data Terakhir Disimpan:</strong><br>
                Nama : <?php echo htmlspecialchars($name); ?><br>
                NRP : <?php echo htmlspecialchars($nrp); ?><br>
                Kelas : <?php echo htmlspecialchars($class); ?><br>
                Jenis Kelamin : <?php echo htmlspecialchars($sex); ?><br>
                Agama : <?php echo htmlspecialchars($religion); ?><br>
                Tempat/Tanggal Lahir : <?php echo htmlspecialchars($birth); ?><br>
                Alamat : <?php echo htmlspecialchars($address); ?><br>
                SD : <?php echo htmlspecialchars($ES); ?><br>
                SMP : <?php echo htmlspecialchars($JHS); ?><br>
                SMA : <?php echo htmlspecialchars($SHS); ?><br>
                Email : <?php echo htmlspecialchars($email); ?><br>
                Homepage : <?php echo htmlspecialchars($homepage); ?><br>
                Hobi : <?php echo htmlspecialchars($hoby); ?><br>
                Interest : <?php echo htmlspecialchars($interest); ?>
            </div>
        </div>
    </section>
</body>

</html>