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
     <td> <select name="jenis" required>
     <option value="">Pilih</option>
     <option value="manusia">Manusia</option>
     <option value="malaikat">Malaikat</option>
     <option value="jin">Jin</option>
     <option value="setan">Setan</option>
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
    $jm = $_POST['jenis'];

    class jenisMahluk
    {
        public $jenis;
        public function __construct($a)
        {
            $this->jenis = $a;
        }
    }
    class mahluk extends jenisMahluk
    {
        public function tugasMahluk()
        {
            if ($this->jenis == "manusia") {
                $tugas = "beribadah kepada tuhan";
            } elseif ($this->jenis == "malaikat") {
                $tugas = "beribadah kepada tuhan";
            } elseif ($this->jenis == "jin") {
                $tugas = "ada yang beribadah & ada juga yang tidak";
            } else {
                $tugas = "menggangu manusia";
            }
            return $tugas;
        }
    }
    $mahluk = new mahluk($jm);
    echo "jenis mahluk : " . $mahluk->jenis . "<br>";
    echo "sifat mahluk : " . $mahluk->tugasMahluk();
}
?>