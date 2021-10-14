<?php
$nilai = $_POST["angka"];
$jurusan = $_POST["jurusan"];

$hasilNilai = "";

$tabHead = "<table border='1'>
    <tr>
      <th> Jurusan </th>
      <th> Nilai </th>
      </tr>";

if ($nilai > 100) {
    echo "Nilai Kelebihan";
} else if ($nilai > 75) {
    $hasilNilai = "Nilai A";
} else if ($nilai >= 70) {
    $hasilNilai = "Nilai B";
} else if ($nilai >= 60) {
    $hasilNilai = "Nilai C";
} else if ($nilai >= 40) {
    $hasilNilai = "Nilai D";
} else {
    $hasilNilai = "Maaf Anda Gagal";
}

switch ($jurusan) {
    case "TI":
        echo "$tabHead <tr>
            <td>Jurusan Teknik Informatika  </td> 
            <td>  $hasilNilai  </td>
            </tr>
            </table>";
        break;
    case "SI":
        echo "$tabHead <tr>
            <td>  Jurusan Sistem Informasi  </td> 
            <td>  $hasilNilai  </td>
            </tr>
            </table>";
        break;
    case "MI":
        echo "$tabHead <tr>
            <td>  Jurusan Manajemen Informatika  </td> 
            <td>  $hasilNilai  </td>
            </tr>
            </table>";
        break;
    case "TK":
        echo "$tabHead <tr>
            <td>  Jurusan Teknik Komputer  </td> 
            <td>  $hasilNilai  </td>
            </tr>
            </table>";
        break;
    case "KA":
        echo "$tabHead <tr>
            <td>  Jurusan Komputerisasi Akutansi  </td> 
            <td>  $hasilNilai  </td>
            </tr>
            </table>";
        break;
    default:
        echo "Silahkan Pilih Jurusan Anda";
        break;
}

echo "<p>Anda Meng Input Nilai " . $nilai . "</p><br/>";
?>