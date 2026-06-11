<?php

    $koneksi = mysqli_connect("localhost", "root", "", "codeweekly");  
    $query = "SELECT * FROM mahasiswa";

    mysqli_query($koneksi,$query); /// tabel mahasiswa

    ///ambil data (fetch) dari lemari
    while($mhs = mysqli_fetch_assoc($result)) 
    {
    var_dump($mhs);
    }

    ///mysql_fetch_row array numeric index
    ///$msh = mysqli_fetch_row($result);
    ///var_dump($mhs[1]);

    //mysql_fetch_assoc array associative index
    ///$mhs = mysqli_fetch_assoc($result);
    ///var_dump($mhs["nama"]);

    ///mysql_fetch_array
    ///bisa semua index 
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa | INFORMATIKA 2026</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <h1 class="title">DATA MAHASISWA</h1>

    <!-- Menu Navigasi -->
    <table class="menu" border="1">
        <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="profile.php">Profile</a></td>
            <td><a href="contact.php">Contact</a></td>
            <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
        </tr>
    </table>

    <!-- Tombol Tambah -->
    <div class="btn">
        <a href="tambahdata.php">
            <button>Tambah Data</button>
        </a>
    </div>

    <!-- Tabel Mahasiswa -->
    <table class="data-table" border="1">

        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Program Studi</th>
            <th>Email</th>
            <th>No. HP</th>
            <th>Foto</th>
        </tr>
</tr>
<?php
    whiele($mhs = mysqli_fetch_assoc($result))




        <tr>
            <td>1</td>
            <td>Suherman Maulana Jakson</td>
            <td>13123433454398</td>
            <td>Informatika</td>
            <td>Suher@unimus.com</td>
            <td>085878715009</td>
            <td><img src="assets/image/IMG-20260419-WA0123.jpeg" width="80"></td>
            <td>            
                <a href="editdata.php"><button>Edit</button></a>

                <a href="hapusdata.php"><button>Hapus</button></a>
            </td>
        </tr>
        

        <tr>
              <td>2</td>
            <td>Ahdhana Bariuzzahma</td>
            <td>1312343345437</td>
            <td>Informatika</td>
            <td>dhana@unimus.com</td>
            <td>08586945342</td>
            <td><img src="assets/image/gambar comel.jpg" width="80"></td>
            <td>
                <a href="editdata.php"><button>Edit</button></a>

                <a href="hapusdata.php"><button>Hapus</button></a>
            </td>

    </table>

    <br><br>

    <h3>LATIHAN</h3>

    <!-- Tabel Latihan -->
    <table class="latihan" border="1">

        <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
        </tr>

        <tr>
            <td>2,1</td>
            <td colspan="2" rowspan="2" style="font-size: 40px;">?</td>
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
