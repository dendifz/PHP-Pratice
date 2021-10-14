<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Nilai</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <form name="form" action="proses.php" method="post">
        <table>
            <tr>
                <th>
                    Nilai
                </th>
                <th>
                    Jurusan
                </th>
            </tr>
            <tr>
                <td><input type="text" name="angka" /> <br /></td>

                <td>
                    <select name="jurusan">
                        <option value=" "> Pilih </option>
                        <option value="TI"> Teknik Informatika </option>
                        <option value="SI"> Sistem Informasi</option>
                        <option value="MI"> Manajemen Informatika</option>
                        <option value="TK"> Teknik Komputer</option>
                        <option value="KA"> Komputer Akutansi </option>
                    </select><br /></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="SUBMIT" style="width: 100%;" /></td>
            </tr>
        </table>
    </form>

    <script src="" async defer></script>
</body>

</html>