<html>
 <head><title>Mahasiswa</title></head>
 <body>
 <form action="" method="post">
     <fieldset>
         <legend><h3><b>Data Mahasiswa</b></h3></legend>
         <table>
             <tr>
                 <td><b>Nama</b></td>
                 <td>:</td>
                 <td><input type="text" name="nama"></td>
             </tr>
             <tr>
                 <td><b>Nim</b></td>
                 <td>:</td>
                 <td><input type="number" name="nim"></td>
             </tr>
             <tr>
                 <td><b>Nilai</b></td>
                 <td>:</td>
                 <td><input type="number" name="nilai"></td>
             </tr>
             <tr>
                 <td><b>Dosen</b></td>
                 <td>:</td>
                 <td><input type="text" name="dosen"></td>
             </tr>
             <tr>
                 <td><b>Mata Kuliah</b></td>
                 <td>:</td>
                 <td><input type="text" name="matakuliah"></td>
             </tr>
              <tr>
   <td></td><td></td>
   <td><input type="submit" name="input" value="input"></td>
     </tr>
</table>
     </fieldset>
 </FORM>
 </body>
</html>

<?php
if (isset($_POST['input'])) {
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];
    $nim = $_POST['nim'];
    $matakuliah = $_POST['matakuliah'];
    $dosen = $_POST['dosen'];

    class Mahasiswa
    {
        public function __construct($nama, $nim, $nilai, $matakuliah, $dosen)
        {
            $this->nama = "$nama";
            $this->nilai = $nilai;
            $this->nim = $nim;
            $this->matakuliah = $matakuliah;
            $this->dosen = $dosen;

        }

    }
    class mataKuliah extends Mahasiswa
    {
        public function status()
        {
            if (65 >= $this->nilai) {
                $a = "Grade D (Tidak Lulus)";

            } elseif (75 >= $this->nilai) {
                $a = "Grade C (Perbaikan)";

            } elseif (85 >= $this->nilai) {
                $a = "Grade B (Lulus)";

            } else {
                $a = "Grade A (Lulus)";

            }
            return $a;
        }
    }

    $nilai = new mataKuliah($nama, $nim, $nilai, $matakuliah, $dosen);
    echo "Nama : $nilai->nama<br>";
    echo "Nim :  $nilai->nim<br>";
    echo "Nilai :  $nilai->nilai<br>";
    echo "Dosen :  $nilai->dosen<br>";
    echo "Mata Kuliah :  $nilai->matakuliah<br>";
    echo "Status :" . $nilai->status() . "<br>";

}
