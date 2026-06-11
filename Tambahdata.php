<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data | Informatika</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Tambah Data Mahasiswa</h2>

    <form action="mahasiswa.php" method="post" enctype="multipart/form-data">

        <table>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" required></td>
            </tr>

            <tr>
                <td><label for="foto">Foto</label></td>
                <td>:</td>
                <td><input type="file" name="foto" id="foto"></td>
            </tr>

            <tr>
                <td><label for="uts">UTS</label></td>
                <td>:</td>
                <td><input type="number" name="uts" id="uts"></td>
            </tr>

            <tr>
                <td><label for="uas">UAS</label></td>
                <td>:</td>
                <td><input type="number" name="uas" id="uas"></td>
            </tr>

            <tr>
                <td><label for="tugas">Tugas</label></td>
                <td>:</td>
                <td><input type="number" name="tugas" id="tugas"></td>
            </tr>

            <tr>
                <td colspan="3">
                    <button type="submit" name="submit">
                        Tambah
                    </button>
                </td>
            </tr>
        </table>

    </form>

    <div class="back">
        <a href="mahasiswa.php">Back</a>
    </div>

</div>

</body>
</h