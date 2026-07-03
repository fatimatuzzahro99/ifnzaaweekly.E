<?php

    require "fungsi.php";

    if(!isset($_SESSION["login"]))
        {
            header("Location: login.php");
            exit;
        }

    
    $qmahasiswa = "SELECT * FROM mahasiswa";
    $qmahasiswas = tampildata($qmahasiswa); // array associative

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa | INFORMATIKA 2026</title>
    <link rel="stylesheet" href="css/mahasiswa.css">
</head>


<body>
    < a href="logout.php" style="text-decoration: none; color: black; font-size: 20px; margin-left: 20px;">Logout</a>
    <h1 align="center">DATA MAHASISWA</h1>

    <!-- Menu Navigasi -->
    <table align="center" border="1" cellpadding="10">
        <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="profil.php">Profile</a></td>
            <td><a href="kontak.php">Kontak</a></td>
            <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
        </tr>
    </table>

    <h2 style="text-align: center;"> <a href="tambahdata.php">
        <button> Tambah Data </button>
    </a> 
    </h2>
    
    <br>

    <table border="1" align="center" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Program Studi</th>
            <th>Email</th>
            <th>No. HP</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>

        <?php

            $i = 1;
            foreach($qmahasiswas as $mhs)
                {

        ?>

        <tr>
            <td><?= $i ?></td>
            <td><?php echo $mhs["nama"] ?></td>
            <td><?php echo $mhs["nim"] ?></td>
            <td><?php echo $mhs["prodi"] ?></td>
            <td><?= $mhs["email"] ?></td>
            <td><?= $mhs["no_hp"] ?></td>
            <td><img src="Asset/Image/<?= $mhs["foto"] ?>" width="80"></td>
            <td>
                <a href="ubahdata.php?id=<?= $mhs['id'] ?>"><button>Edit</button></a>
                <a href="hapusdata.php?id=<?= $mhs['id'] ?>" onclick="return confirm('YAKEUNNN?')"><button>Hapus</button></a>
            </td>
        </tr>

        <!-- <tr>
            <td>2</td>
            <td><img src="Asset/Image/Chipi.jpg" width="80"></td>
            <td>Chipi Chapa</td>
            <td>2026002</td>
            <td>Informatika</td>
        </tr>

        <tr>
            <td>3</td>
            <td><img src="Asset/Image/Dubi.webp" width="80"></td>
            <td>Dubi Daba</td>
            <td>2026003</td>
            <td>Sistem Informasi</td>
        </tr> -->

        <?php

            $i++;
                    }
        ?>

    </table>

    <br>

    <h3 align="center">LATIHAN</h3>

        <table border="1" align="center">
            <tr>
                <td>1,1</td>
                <td>1,2</td>
                <td>1,3</td>
                <td>1,4</td>
            </tr>
            <tr>
                <td>2,1</td>
                <td colspan="2" rowspan="2" style="font-size: 40px;" align="center" padding="20px">?</td>
                <td>2,4</td>
            </tr>
            <tr>
                <td>3,1</td>
                <td>3,4</td>
            </tr>
            <tr>
                <td>4,1</td>
                <td>4,2</td>
                <td>4,3</td>
                <td>4,4</td>
            </tr>
        </table>

</body>

</html>