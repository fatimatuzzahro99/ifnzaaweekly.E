<?php

    require 'fungsi.php';
    
    if(!isset($_SESSION["login"]))
        {
            header("Location: login.php");
            exit;
        }

    $id = $_GET["id"];

    $query = "SELECT * FROM mahasiswa WHERE id = $id";
    $mhs = tampildata($query)[0]; //wadah untuk data spesifik sesuai dengn id

    if(isset($_POST["submit"])) {

        if(ubahdata($_POST, $id) > 0) {
            echo "<script>

            alert('Data berhasil di ubah!');
            window.loaction.hrefs='mahasiswa.php';
            
            </script>";
        }

        else {
            echo "<script>

            alert('Data gagal di ubah!');
            window.loaction.hrefs='mahasiswa.php';

            </script>";
        }
    }

    function ubahdata($data, $id) 
{
    global $koneksi;

        $nama = htmlspecialchars($data["nama"]);
        $nim = htmlspecialchars($data["nim"]);
        $prodi = htmlspecialchars($data["prodi"]);
        $email = htmlspecialchars($data["email"]);
        $nohp = htmlspecialchars($data["nohp"]);
        $foto = $data["foto"];

        $query = "INSERT INTO mahasiswa (nama,nim,prodi,email,no_hp,foto) VALUES ('$nama','$nim','$prodi','$email','$nohp','$foto')";

        mysqli_query($koneksi,$query);

        return mysqli_affected_rows ($koneksi);

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data | Informatika</title>
    <link rel="stylesheet" href="css/tambahdata.css">
</head>
<br>
    
    <div align="center">
    <h2>Ubah Data Mahasiswa</h2>
    <form action="" method="post">
        <table cellpadding="Spx">
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" value="<?= $mhs["nama"]?>" required /></td>
            </tr>
            <tr>
                <td><label for="nim">NIM</label></td>
                <td>:</td>
                <td><input type="number" name="nim" id="nim" value="<?= $mhs["nim"]?>" required /></td>
            </tr>
            <tr>
                <td><label for="prodi">Program Studi</label></td>
                <td>:</td>
                <td><input type="text" name="prodi" id="prodi" value="<?= $mhs["prodi"]?>" required /></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td>:</td>
                <td><input type="email" name="email" id="email" value="<?= $mhs["email"]?>" required /></td>
            </tr>
            <tr>
                <td><label for="nohp">Nomor HP</label></td>
                <td>:</td>
                <td><input type="nohp" name="nohp" id="nohp" value="<?=$mhs["no_hp"]?> required /></td>
            </tr>
            <tr>
                <td><label for="foto">Foto</label></td>
                <td>:</td>
                <td><input type="text" name="foto" id="foto" value="<?= $mhs["foto"]?>" required /></td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit" name="submit"> Tambah </button>
                </td>
            </tr>
        </table>
    </form>

    <br></br>

    <a href ="mahasiswa.php"> Back </a>
    
     </div>
</body>
</html>