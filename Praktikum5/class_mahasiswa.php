<?php 

class Mahasiswa
{
    public $namaMahasiswa, $nim, $domisili, $prodi, $ipk;

    function __construct($namaMahasiswa, $nim, $domisili, $prodi, $ipk)
    {
        $this->namaMahasiswa = $namaMahasiswa;
        $this->nim = $nim;
        $this->domisili = $domisili;
        $this->prodi = $prodi;
        $this->ipk = $ipk;
    }

    function setPredikatIPK($ipk)
    {
        if ($ipk > 3.5) {
            echo "cumlaude";
        } else {
            echo "You did great a job";
        }
    }

}

$mahasiswa = new Mahasiswa("Luthfi ", "0110223105 ", "Nambo ", "Teknik Informatika ", "3.80" );
echo "Nama Lengkap : ". $mahasiswa->namaMahasiswa;
echo "<br>";
echo " Nim : ". $mahasiswa->nim;
echo "<br>";
echo " Domisili : ". $mahasiswa->domisili;
echo "<br>";
echo " Prodi : ". $mahasiswa->prodi;
echo "<br>";
echo " IPK : ". $mahasiswa->ipk;
echo "<br>";
$mahasiswa->setPredikatIPK($mahasiswa->ipk);
