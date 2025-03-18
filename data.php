<?php
$regexnama = "/^([A-Z][a-z]*)+(\s[A-Z][a-z]*)*$/";
$regexnrp = "/^21101810([3-5][1-9]|[4-6]0)$/";
$regextanggal = "/^([0-2][0-9]|3[01])-(Jan|Feb|Mar|Apr|Mei|Jun|Jul|Agu|Sep|Okt|Nov|Des)-\d{4}$/";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['nama'])) {
        $name = ($_POST['nama']);
    }
    if (isset($_POST['nrp'])) {
        $nrp = trim($_POST['nrp']);
    }
    if (isset($_POST['tanggal'])) {
        $date = trim($_POST['tanggal']);
    }
    
    if(preg_match($regexnama, $name)){
        if(preg_match($regexnrp, $nrp)){
            if(preg_match($regextanggal, $date)){
                if (isset($_POST['kelas'])) {
                    $class = trim($_POST['kelas']);
                }
                if (isset($_POST['jk'])) {
                    $sex = trim($_POST['jk']);
                }
                if (isset($_POST['agama'])) {
                    if($_POST['agama'] == 'Pilih')
                        $religion = "";
                    else
                        $religion = ($_POST['agama']);
                }
                if (isset($_POST['tempat'])) {
                    $place = trim($_POST['tempat']);
                }
                if (isset($_POST['alamat'])) {
                    $address = trim($_POST['alamat']);
                }
                if (isset($_POST['sd'])) {
                    $ES = trim($_POST['sd']);
                }
                if (isset($_POST['smp'])) {
                    $JHS = trim($_POST['smp']);
                }
                if (isset($_POST['sma'])) {
                    $SHS = trim($_POST['sma']);
                }
                if (isset($_POST['email'])) {
                    $email = trim($_POST['email']);
                }
                if (isset($_POST['hp'])) {
                    $homepage = trim($_POST['hp']);
                }
                if (isset($_POST['hobi'])) {
                    $hoby = trim($_POST['hobi']);
                }
                if (isset($_POST['interest'])) {
                    $interest = implode(", ", $_POST['interest']);
                } else {
                    $interest = "";
                }

                $birth = $place . ", " . $date;

                $handel = fopen('database.txt', 'a+');
                fwrite($handel, "Nama : " . $name . "\n");
                fwrite($handel, "NRP : " . $nrp . "\n");
                fwrite($handel, "Kelas : " . $class . "\n");
                fwrite($handel, "Jenis Kelamin : " . $sex . "\n");
                fwrite($handel, "Agama : " . $religion . "\n");
                fwrite($handel, "Tempat/Tanggal Lahir : " . $birth . "\n");
                fwrite($handel, "Alamat : " . $address . "\n");
                fwrite($handel, "Riwayat Pendidikan\n");
                fwrite($handel, "SD : " . $ES . "\n");
                fwrite($handel, "SMP : " . $JHS . "\n");
                fwrite($handel, "SMA : " . $SHS . "\n");
                fwrite($handel, "Email : " . $email . "\n");
                fwrite($handel, "Homepage : " . $homepage . "\n");
                fwrite($handel, "Hobi : " . $hoby . "\n");
                fwrite($handel, "Interest : " . $interest . "\n");
                fwrite($handel, "=====================\n");
                fclose($handel);
                
                header("Location: form.php?".
                "nama=" . urlencode($name) . 
                "&nrp=" . urlencode($nrp) . 
                "&class=" . urlencode($class) . 
                "&jk=" . urldecode($sex) .
                "&religion=" . urldecode($religion) .
                "&birth=" . urldecode($birth) .
                "&address=" . urldecode($address) .
                "&ES=" . urldecode($ES) .
                "&JHS=" . urldecode($JHS) .
                "&SHS=" . urldecode($SHS) .
                "&email=" . urldecode($email) .
                "&homepage=" . urldecode($homepage) .
                "&hoby=" . urldecode($hoby) .
                "&interest=" . urldecode($interest)
            );
            exit();
        }else{
            $error = "Tanggal tidak valid";
        }   
    }else{
        $error = "NRP tidak valid";
    }
}else{
    $error = "Nama tidak valid";
}
}
header("Location: form.php?" . "&error=" . urldecode($error));
exit();
?>
