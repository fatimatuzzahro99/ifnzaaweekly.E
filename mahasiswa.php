<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa | INFORMATIKA 2026</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        h1, h3 {
            text-align: center;
        }

        /* Navigasi */
        .menu {
            margin: auto;
        }

        .menu td {
            padding: 10px 15px;
        }

        .menu a {
            text-decoration: none;
            font-weight: bold;
        }

        /* Tombol */
        .btn {
            text-align: center;
            margin: 20px;
        }

        button {
            padding: 10px 20px;
            border: none;
            background-color: blue;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: darkblue;
        }

        /* Tabel Mahasiswa */
        .data-table {
            margin: auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
        }

        .data-table th,
        .data-table td {
            padding: 12px;
            text-align: center;
        }

        .data-table img {
            border-radius: 10px;
        }

        /* Tabel latihan */
        .latihan {
            margin: auto;
            border-collapse: collapse;
            background: white;
        }

        .latihan td {
            padding: 15px;
            text-align: center;
        }
    </style>

</head>

<body>

    <h1>DATA MAHASISWA</h1>

    <!-- Menu Navigasi -->
    <table class="menu" border="1">
        <tr>
            <td><a href="index.html">Home</a></td>
            <td><a href="profil.html">Profile</a></td>
            <td><a href="kontak.html">Kontak</a></td>
            <td><a href="mahasiswa.html">Data Mahasiswa</a></td>
        </tr>
    </table>

    <!-- Tombol Tambah -->
    <div class="btn">
        <a href="tambahdata.html">
            <button>Tambah Data</button>
        </a>
    </div>

    <!-- Tabel Mahasiswa -->
    <table class="data-table" border="1">

        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
        </tr>

        <tr>
            <td>1</td>
            <td>
                <img src="D:\Tugas Kuliah\Semester IV\Pemrograman Berbasis Web\ifnmaweekly.E\Asset\Image\IMG-20260419-WA0123.jpg" width="80">
            </td>
            <td>Ahmad Musim</td>
            <td>2026001</td>
            <td>Informatika</td>
        </tr>

        <tr>
            <td>2</td>
            <td>
                <img src="Asset/Image/Chipi.jpg" width="80">
            </td>
            <td>Chipi Chapa</td>
            <td>2026002</td>
            <td>Informatika</td>
        </tr>

        <tr>
            <td>3</td>
            <td>
                <img src="Asset/Image/Dubi.webp" width="80">
            </td>
            <td>Dubi Daba</td>
            <td>2026003</td>
            <td>Sistem Informasi</td>
        </tr>

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