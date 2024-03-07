<?php 

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenisKelamin = $_POST['jenis_kelamin'];
$prodi = $_POST['prodi'];
$keahlian = $_POST['keahlian'];
$domisili  = $_POST['domisili'];
$email = $_POST['email'];
?>

<h1>Terima Kasiih Sudah Mendaftar di IT CLUB DATA SCIENCE</h1>
<h5>Nama Lengkap : <?= $nama; ?></h5>
<h5>NIM : <?= $nim; ?></h5>
<h5>Jenis Kelamin : <?= $jenisKelamin; ?></h5>
<h5>Prodi : <?= $prodi; ?></h5>
<h5>Keahlian : <?= $keahlian; ?></h5>
<h5>Domisili : <?= $domisili; ?></h5>
<h5>Email : <?= $email; ?></h5>
