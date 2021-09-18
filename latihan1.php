<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal 2</title>
</head>
<body>
<form action="" method="post">
    <fieldset>
    <legend>
    <h2>Hamba</h2>
    </legend>

    <table>

     <tr>
     <td>Jenis Hamba</td>
     <td>:</td>
     <td> <select name="hamba" required>
     <option value="">Pilih</option>
     <option value="1">Manusia</option>
     <option value="2">Malaikat</option>
     <option value="3">Jin</option>
     <option value="4">Setan</option>
     </select>
     </td>
     </tr>

     </table>
     <br><input type="submit" name="simpan" value="simpan">
     <input type="submit" name="reset" value="reset">

     </fieldset>
     </form>
</body>
</html>
<?php
if (isset($_POST['simpan'])) {
    $hamba = $_POST['hamba'];

    class Manusia
    {
        public function __construct($hamba)
        {
            $this->hamba = "$hamba";

        }
        protected function tugas1()
        {
            return "Beribadah Kepada Tuhan";
        }
    }

// turunkan class Manusia ks Malaikat
    class Malaikat extends Manusia
    {
        protected function tugas2()
        {
            return "Beribadah Kepada Tuhan";
        }
    }
    class jin extends Malaikat
    {
        protected function tugas3()
        {
            return "Labil";
        }
    }
// turunkan class Malaikat ke chromebook
    class setan extends jin
    {
        protected function tugas4()
        {
            return "Menggagu Manusia";
        }

        public function info()
        {
            if (0 > $this->hamba) {
                $a = $this->tugas1();
            } elseif (3 < $this->hamba) {
                $a = $this->tugas4();

            } elseif (2 < $this->hamba) {
                $a = $this->tugas3();

            } elseif (1 >= $this->hamba) {
                $a = $this->tugas2();

            }

            // $b = $this->beli_laptop();
            // $c = $this->beli_chromebook();
            // $d = $this->etan();

            return "Tugasnya : $a ";
        }
    }

// buat objek dari class Malaikat (instansiasi)
    $hamba = new setan($hamba);
    echo "Jenis Mahluk : " . $hamba->hamba . "<br>";

//panggil method objek
    echo $hamba->info();

// $gadget_baru->beli_komputer();
    // Fatal error: Call to protected method Manusia::beli_komputer()
}
