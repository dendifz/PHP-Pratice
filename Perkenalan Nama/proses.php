<?php
$nama = $_POST["nama"];
$salam = $_POST["salam"];
$lahir = $_POST["thn_lahir"];
$sekarang = $_POST["thn_sekarang"];
$hasil;

if ($lahir != null){
    $hasil = $sekarang - $lahir;
}

echo "  <h3>Output Biasa :</h3><p>Nama : $nama <br>Salam : $salam <br>Tahun Lahir = $lahir <br>Tahun Sekarang = $sekarang <br>Umur : $hasil</p>
        <hr />
        <h3>Output Fungsi :</h3><p>$salam Perkenalkan Nama Saya $nama , Saya Berumur $hasil Tahun Sekarang<br>Senang Berkenalan Dengan Anda.</p> ";

?>