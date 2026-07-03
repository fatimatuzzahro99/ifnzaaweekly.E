<?php
session_start();

$koneksi = mysqli_connect("localhost:3306","root","kamucantik","answeekly");

function tampildata($query) // proses data uang kita minta
{
    global $koneksi;
    $result = mysqli_query($koneksi,$query); // lemari sesuai perintah kita

    // siapkan wadahnya
    $rows =[];

    // ambil data
    while($row = mysqli_fetch_assoc($result))
        {
            $rows[] = $row; //taruh di wadah
        }

    return $rows;
}

/// ambil data (fetch) dari lemari
///while($mhs = mysqli_fetch_assoc($result))
///    {
///        var_dump($mhs);
///    }

/// mysqli_fetch_row array numeric index
///$mhs = mysqli_fetch_row($result);
///var_dump($mhs[1]);

/// mysqli_fetch_assoc array asosiatif index
///$mhs = mysqli_fetch_object($result);
///var_dump($mhs["nama"]);

/// mysqli_fetch_array
///bisa semua

/// mysqli_fetch_object
///$mhs = mysqli_fetch_object($result);
///var_dump($mhs->nama);

function tambahdata($data, $files) 
{
    global $koneksi;

        $nama = htmlspecialchars($data["nama"]);
        $nim = htmlspecialchars($data["nim"]);
        $prodi = htmlspecialchars($data["prodi"]);
        $email = htmlspecialchars($data["email"]);
        $nohp = htmlspecialchars($data["nohp"]);
        
        // files foto
        $namafoto = $files["name"];
        $newnamafoto = date('dmYhis_').$namafoto;
        $tmpfoto = $files["tmp_name"];

        $path = "asset/image/$newnamafoto";

        if(move_uploaded_file($tmpfoto,$path)) 
            {
                $query = "INSERT INTO mahasiswa (nama,nim,prodi,email,no_hp,foto) 
                VALUES ('$nama','$nim','$prodi','$email','$nohp','$newnamafoto')";
                mysqli_query($koneksi,$query);
            }

        return mysqli_affected_rows ($koneksi);

}

function hapusdata($id)
{
    global $koneksi;

    $query = "DELETE FROM mahasiswa WHERE id=$id";
    mysqli_query($koneksi,$query);

    return mysqli_affected_rows($koneksi);
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

        $query = "UPDATE mahasiswa SET 
                nama='$nama',
                nim='$nim',
                prodi='$prodi',
                email='$email',
                no_hp='$nohp',
                foto='$foto'
                WHERE id=$id";

        mysqli_query($koneksi,$query);

        return mysqli_affected_rows ($koneksi);

}

    function register($data) 
    {
        global $koneksi;

        $username = strtolower(stripslashes($data["username"]));

        $password1 = mysqli_real_escape_string($koneksi,$data["password1"]);
        $password2 = mysqli_real_escape_string($koneksi,$data["password2"]);

        // cek username sudah ada atau belum
        $result = mysqli_query($koneksi,"SELECT username FROM user WHERE username='$username'");

        //verify
        if($pasword1 !== $password2) 
            {
                echo "<script>
                        alert('konfirmasi password salah!');
                    </script>";
                return false;
            }

        $result = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username'");            

        if(mysqli_fetch_assoc($result)) 
            {
                echo "<script>
                        alert('Username sudah terdaftar!');
                    </script>";
                return false;
            }
        
        $password_hash = password_hash($password1, PASSWORD_DEFAULT); //enkripsi password
        
        $query = "INSERT INTO user (username,password) VALUES ('$username','$password_hash')";

        mysqli_query($koneksi,$query);

        return mysqli_affected_rows($koneksi);
    }

    function login($data) 
    {
        global $koneksi;

        $username = strtolower(stripslashes($data["username"]));
        $password = $data["password"];
        
        $query = "SELECT * FROM user WHERE username = '$username'";
        $result = mysqli_query($koneksi,$query);

        // cek username
        if(mysqli_num_rows($result) == 1)
        {
                // username ada
            $row = mysqli_fetch_assoc($result);

                if(password_verify($password, $row["password"]))

                {   
                    ///password benar
                    $_SESSION["login"] = true;
                    header("Location: mahasiswa.php");
                    exit;
                }
        }

        return $error = true;
    }
?>