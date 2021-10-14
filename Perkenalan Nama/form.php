<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Perkenalan Nama Dan Umur</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <form name="form" action="proses.php" method="post">
        <table>
            <tr>
                <th>
                    Perkenalan Nama Dan Umur
                </th>
            </tr>
            <tr>
                <td>Nama : &#8195;&#8195;&#8201;&#8201;&#8201;<input type="text" name="nama" placeholder="Nama" autofocus/> <br /></td>
            </tr>
                <td>Salam : &#8195;&#8195;&#8201;&#8201;<input type="text" name="salam" placeholder="Assalamualaikum"/> <br /></td>
            <tr>
            </tr>
                <td>Tahun Lahir : <input type="number" name="thn_lahir" placeholder="2000"/> <br /></td>
            <tr>
            </tr>
                <td>Sekarang : &#8195;&#8201;<input type="number" name="thn_sekarang" value="<?php echo date("Y"); ?>"/> <br /></td>
            <tr>
                <td><input type="submit" value="SUBMIT" style="width: 100%;" /></td>
            </tr>
        </table>
    </form>

    <script src="" async defer></script>
</body>

</html>