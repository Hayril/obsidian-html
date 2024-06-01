# Koneksi Database

## Kode Program 

```php
//koneksi ke database
$koneksi = mysqli_connect('localhost', 'root', '', 'rental_hayril');
if ($koneksi) {
    echo "<br> koneksi aman <br>";
} else {
    echo "error, tidak bisa koneksi ke database";
}
```

## Hasil
![gambar](koneksidb.png)

## Analisis

- Menggunakan `mysqli_connect` untuk menghubungkan ke database MySQL.
- Menggunakan `localhost` sebagai server, `root` sebagai username, password kosong, dan `rental_hayril` sebagai nama database.
- jika koneksi berhasil,maka akan mencetak "koneksi aman",jika gagal maka akan mencetak "error,tidak bisa koneksi ke database".

## Kesimpulan

Program tersebut bertujuan untuk menghubungkan database MySQL dan memberi tahu apakah koneksi berhasil.

# Tampilkan Data 

## Kode Program

```php
<?php

//koneksi ke database
$koneksi = mysqli_connect('localhost', 'root', '', 'rental_rahmat');
  
if ($koneksi) {
    echo "<br> koneksi aman <br>";
} else {
    echo "error, tidak bisa koneksi ke database";
}
  
//jalankan query seleksi
$select = mysqli_query($koneksi, "SELECT * FROM daftar_mobil");

// //membuat array dan memecah data berdasarkan kolomnya
// $result = mysqli_fetch_assoc($select);
  
//menampilkan struktur array dari data tabel yang dijalankan di atas
// var_dump($result);
  
echo 'Berikut nama-nama pemilik mobil<br>';
$a = 1;
foreach($select as $key => $data){
    echo $a++ . ", " . $data ['no_plat'] . " : " . $data ['pemilik'] . '<br>';
}
  
// echo '<p>Halo ' . $result['pemilik'] . '!!</p><br>';
```

## Hasil
![GAMBAR](tampilkandb.png)

## Analisis

- Menghubungkan ke database MySQL dengan menggunakan `localhost` sebagai server, `root` sebagai username, password kosong, dan `rental_hayril` sebagai nama database.
- Memeriksa apakah koneksi berhasil dan menampilkan pesan yang sesuai.
- menampilkan semua data dari tabel `data_mobil` menggunanakan query.
- Menginisialisasi variabel `$a` untuk penomoran.
- Menggunakan loop `foreach` untuk iterasi melalui hasil query dan menampilkan nomor plat dan nama pemilik mobil.

## Kesimpulan
Program Tersebut bertujuan menghubungkan ke database,dan menjalankan query dari tabel `data_mobil` dan menampilkan nama-nama pemilik mobil.

# Tambahkan Data
## Kode Program
```PHP


//koneksi ke database

$koneksi = mysqli_connect('localhost', 'root', '', 'rental_hayril');


if ($koneksi) {
    echo "<br> koneksi aman <br>";
} else {
     echo "error, tidak bisa koneksi ke database";
}

//jalankan query seleksi
$select = mysqli_query($koneksi, "SELECT * FROM data_mobil");
//menampilkan struktur array dari data tabel yang dijalankan di atas
// var_dump($result);

echo 'Berikut nama-nama pemilik mobil<br>';
$a = 1;
foreach($select as $key => $data){
     echo $a++ . ", " . $data['no_plat'] . " : " . $data['pemilik'] . '<br>';

}
//Tambahkan data baru ke tabel daftar_mobil
$no_plat_baru = "DD 1312 UY";
$pemilik_baru = "Hayril";

$insert = mysqli_query($koneksi, "INSERT INTO data_mobil (no_plat, pemilik) VALUES ('$no_plat_baru', '$pemilik_baru')");
if ($insert) {
    echo "Data baru berhasil ditambahkan ke tabel data_mobil";
} else {
    echo "Gagal menambahkan data baru ke tabel data_mobil";
}
// echo '<p>Halo ' . $result['pemilik'] . '!!</p><br>';
```

## Hasil 
![GAMBAR](tambahkandb.png)

## Analisis

- Menggunakan fungsi `mysqli_connect()` untuk membuat koneksi ke database MySQL dengan parameter host ('localhost'), username ('root'), password (''), dan nama database ('rental_hayril').
- `$mysql_query`  menjalakan perintah query untuk menampilkan semua data dari tabel `data_mobil`
- Menjalankan query `INSERT` untuk menambahkan data baru ke tabel `data_mobil`.
- `if ($insert)` untuk menampilkan statement apakah berhasil atau tidak 

## Kesimpulan
Program di atas adalah perintah untuk menapikan data dari tabel `data_mobil` ,dan menambahakan data baru.

# Ubah Data

## Kode Program 
```php
<?php

//koneksi ke database

$koneksi = mysqli_connect('localhost', 'root', '', 'rental_hayril');

if ($koneksi) {
    echo "<br> koneksi aman <br>";
} else {
    echo "error, tidak bisa koneksi ke database";
} 

//jalankan query seleksi
$select = mysqli_query($koneksi, "SELECT * FROM data_mobil");
echo 'Berikut nama-nama pemilik mobil sebelum perubahan<br>';

$a = 1;
foreach($select as $key => $data){
    echo $a++ . ", " . $data['no_plat'] . " : " . $data['pemilik'] . '<br>';

}

//Ubah data dalam tabel data_mobil
$no_plat_lama = "DD 2812 UY";
$pemilik_baru = "Cia";

$update = mysqli_query($koneksi, "UPDATE data_mobil SET pemilik='$pemilik_baru' WHERE no_plat='$no_plat_lama'");
  
if ($update) {
    echo "Data berhasil diubah";
} else {
    echo "Gagal mengubah data";
}

//jalankan query seleksi setelah perubahan
$select_after_update = mysqli_query($koneksi, "SELECT * FROM data_mobil");
echo 'Berikut nama-nama pemilik mobil setelah perubahan<br>';

$a = 1;
foreach($select_after_update as $key => $data){
    echo $a++ . ", " . $data['no_plat'] . " : " . $data['pemilik'] . '<br>';
}
```

## Hasil 
![GAMBAR](ubahdb.png)

## Analsis

- Menggunakan fungsi `mysqli_connect()` untuk membuat koneksi ke database MySQL dengan parameter host ('localhost'), username ('root'), password (''), dan nama database ('rental_hayril').
- `$mysql_query`  menjalakan perintah query untuk menampilkan semua data dari tabel `data_mobil` sebelum melakukan perubahan
- `$no_plat_lama = "DD 2812 UY";` adalah mendefinisika letak data yang ingin diubah.
- `$pemilik_baru = "Cia";` adalah data yang akan di ubah.
- Menjalankan query `update` untuk mengubah salah satu  data  yang ada pada tabel `data_mobil`.
- `if ($update)` untuk menampilkan statement apakah berhasil atau tidak 
- `foreach($select_after_update as $key => $data` adalah perintah menampilkan tabel setelah di ubah

## Kesimpulan
Program di atas adalah perintah untuk menampilkan semua data pada tabel `data_mobil` lalu mengupdate salah satu datanya kemudian menampilkan lagi data tabel `data_mobil` setelah diubah.

# Hapus Data

## Kode Program 
```php
// Koneksi ke database
$koneksi = mysqli_connect('localhost', 'root', '', 'rental_hayril');
if ($koneksi) {
  echo "<br> Koneksi aman <br>";
} else {
  echo "Error, tidak bisa koneksi ke database";
}

// Jalankan query seleksi
$select = mysqli_query($koneksi, "SELECT * FROM data_mobil");
echo 'Berikut nama-nama pemilik mobil sebelum penghapusan<br>';
$a = 1;
foreach ($select as $key => $data) {
 echo $a++ . ", " . $data['no_plat'] . " : " . $data['pemilik'] . '<br>';
}
// Hapus data dalam tabel daftar_mobil
$no_plat_hapus = "DD 1312 UY";

$delete = mysqli_query($koneksi, "DELETE FROM data_mobil WHERE no_plat='$no_plat_hapus'");
if ($delete) {
 echo "Data berhasil dihapus<br>";
} else {
 echo "Gagal menghapus data";
}

// Jalankan query seleksi setelah penghapusan
$select_after_delete = mysqli_query($koneksi, "SELECT * FROM data_mobil");
echo 'Berikut nama-nama pemilik mobil setelah penghapusan<br>';
$a = 1;
foreach ($select_after_delete as $key => $data) {
  echo $a++ . ", " . $data['no_plat'] . " : " . $data['pemilik'] . '<br>';
}
```

## Hasil 
![GAMBAR](hapusdb.png)

## Analisis

- Menggunakan fungsi `mysqli_connect()` untuk membuat koneksi ke database MySQL dengan parameter host ('localhost'), username ('root'), password (''), dan nama database ('rental_hayril').
- `$mysql_query`  menjalakan perintah query untuk menampilkan semua data dari tabel `data_mobil` sebelum melakukan perubahan
- `$no_plat_hapus = "DD 1312 UY";` adalah mendefinisikan nomor plat yang akan dihapus
- Menjalankan query `delete` untuk menghapus salah satu  data  yang ada pada tabel `data_mobil`.
- `if ($delete)` untuk menampilkan statement apakah berhasil atau tidak 
- `foreach($select_after_delete as $key => $data` adalah perintah menampilkan tabel setelah di hapus.

## Kesimpulan
Program di atas adalah perintah untuk menampilkan semua data pada tabel `data_mobil` lalu menghapus salah satu datanya kemudian menampilkan lagi data tabel `data_mobil` setelah dihapus.

# Session/Login

## Session
### Kode Program Session
```php
<?php

  

session_start();

  

// $username = "Raihan";

// $alamat = "Bulsar";

  

// $_SESSION['username'] = $username;

// $_SESSION['alamat'] = $alamat;

  

if(isset($_POST['submit'])){

    $username = $_POST['username'];

    $password = $_POST['password'];

  

    $koneksi = mysqli_connect('localhost', 'root', '', 'praktikum_hayril') or die('error koneksi');

  

    $result = mysqli_query($koneksi, "SELECT * FROM user2 WHERE username = '$username' AND password = '$password'");

  

    $data = mysqli_fetch_assoc($result);

    var_dump($data);

  

if(isset($data)) {

    $_SESSION['Nama'] = $data['Nama'];

    $_SESSION['username'] = $data['username'];

    $_SESSION['status'] = 'login';

    header('Location: user.php');

} else {

    echo "username dan pasword salah";

}

}

  

?>

<!DOCTYPE html>

<html>

<head>  

    <title>Login Session</title>

</head>

<body>

    <form method="post">

        <label>Username</label>

        <input type="text" name="username">

        <br>

        <label>Password</label>

        <input type="password" name="password">

        <br></br>

        <button type="submit" name="submit">Login</button>

    </form>    

</body>
</html>
```
### Hasil Session
![GAMBAR](sessiondb.png)

### Analisis Session
- `session_start();` sebagai perintah dimulainya session.
- HTML di bagian bawah program menyediakan form dengan metode `POST` yang memiliki dua input untuk username dan password serta sebuah tombol untuk submit.
- Jika tombol submit ditekan (`isset($_POST['submit'])`), maka nilai dari username dan password akan diambil dari input form.
- Koneksi ke database `praktikum_hayril` diinisialisasi.
- Query `SELECT` dijalankan untuk mencari pengguna dengan username dan password yang sesuai.
- Hasil query diambil sebagai array asosiatif dan diperiksa.
- Jika pengguna ditemukan (`isset($data)`), maka session akan diatur dengan informasi pengguna, dan pengguna akan diarahkan ke halaman `user.php`.
- Jika pengguna tidak ditemukan, pesan error akan ditampilkan.
### Analisis Session
Program di atas adalah perintah untuk membuat suatu program login dengan menampilkan syaratnya adalah dengan memasukkan username dan password.

## Login User 
### Kode Program User
```php
<?php

session_start();

if ($_SESSION['status'] == 'login' && $_SESSION['username'] == 'admin') {

    header("Location: admin.php");

}

if ($_SESSION['status'] != 'login') {

    header('Location: session.php');

}

  

?>

<!DOCTYPE html>

<html lang="en">

  

<head>

    <title>Document</title>

</head>

  

<body>

    <h1>Halaman User</h1>

  

    <h1>Halo, <?= $_SESSION['Nama'] ?></h1>

    <a href="logout.php">Logout</a>

  

</body>

  

</html>
```
### Hasil User
![GAMBAR](userdb.png)
### Analisis Login User
- `session_start();` sebagai perintah dimulainya session.
- Program memeriksa apakah session `status` bernilai 'login' dan `username` bernilai 'admin'.
- Jika kondisi tersebut benar, pengguna diarahkan ke halaman `admin.php`.
- Jika session `status` tidak bernilai 'login', pengguna diarahkan ke halaman `session.php`.
- Jika pengguna lolos dari pengecekan di atas (berarti pengguna telah login dan bukan admin), maka halaman HTML akan ditampilkan.
- Halaman ini menampilkan sapaan kepada pengguna menggunakan nama yang disimpan dalam session (`$_SESSION['Nama']`).
- Terdapat juga link untuk logout yang mengarah ke `logout.php`.
### Kesimpulan Login User
Program di atas bertujuan untuk memastikan hanya pengguna dengan status login tapi tidak dengan username `admin` yang dapat mengakses halaman user.

## Login Admin

### Kode Program Admin
```php
<?php

session_start();

  

if ($_SESSION['status'] == 'login' && $_SESSION['username'] != 'admin') {

    header("Location: user.php");

}

  

if ($_SESSION['status'] != 'login') {

    header('Location: session.php');

}

  

?>

<!DOCTYPE html>

<html lang="en">

  

<head>

    <title>Document</title>

</head>

  

<body>

    <h1>Halaman Admin</h1>

  

    <h1>Halo, <?= $_SESSION['Nama'] ?></h1>

    <a href="logout.php">Logout</a>

  

</body>

  

</html>
```

### Hasil Admin
![GAMBAR](admindb.png)

### Analisis Login Admin
-  `session_start();` sebagai perintah dimulainya session.
- Program memeriksa apakah session `status` bernilai 'login' dan `username` bernilai 'admin'.
- Jika kondisi tersebut benar, pengguna diarahkan ke halaman `admin.php`.
- Jika pengguna lolos dari pengecekan di atas (berarti pengguna telah login dan tercatat bahwa dia adalah admin), maka halaman HTML akan ditampilkan.
- Halaman ini menampilkan sapaan kepada pengguna menggunakan nama yang disimpan dalam session (`$_SESSION['admin']`).
- Terdapat juga link untuk logout yang mengarah ke `logout.php`.
### Kesimpulan Login Admin
Program PHP ini berfungsi untuk membatasi akses ke halaman admin hanya untuk pengguna yang berstatus login dan memiliki username 'admin'.

# Upload & Download
## Upload 

### Kode Program Upload
```php
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>index tabel</title>

</head>

<body>

    <h2>Data Siswa Berprestasi</h2>

    <a href="tambah.php">+Tambah Data Baru</a><br><br>

    <p>

        <a href="export.php">Export Excel</a>

    </p>

    <table border="5">

    <tr>

        <th>id_siswa</th>

        <th>gambar</th>

        <th>nama</th>

        <th>email</th>

        <th>jenis_kelamin</th>

        <th>alamat</th>

        <th>Aksi</th>

    </tr>

  

    <?php

    include "koneksi.php";

    $i = 1;

    $query = mysqli_query($koneksi, "SELECT * FROM siswa");

    while ($data = mysqli_fetch_array($query)) {

    ?>

  

    <tr>

        <td><?php echo $i; ?></td>

        <td>

            <img src="img/<?= $data['gambar'] ?> " width=100px>

        </td>

        <td><?php echo $data['nama']; ?></td>

        <td><?php echo $data['email']; ?></td>

        <td><?php echo $data['jenis_kelamin']; ?></td>

        <td><?php echo $data['alamat']; ?></td>

  

        <td>

            <a href="ubah.php?id=<?= $data['id_siswa']; ?>">Ubah</a> |

            <a href="hapus.php?id=<?= $data['id_siswa']; ?>">Hapus</a> |

        </td>

    </tr>

    <?php

    $i++;

    }

    ?>

    </table>

</body>

</html>
```

```php
<!DOCTYPE html>

<html lang="en">

  

<head>

    <title>Document</title>

</head>

  

<body>

    <h2>Tambah Data</h2>

    <?php

  

    include "koneksi.php";

  

    function upload(): string

    {

        $nameImage = $_FILES['gambar']['name'];

        $directoryFile = $_FILES['gambar']['tmp_name'];

        $errorImage = intval($_FILES['gambar']['error']);

        $sizeFile = $_FILES['gambar']['size'];

  

        // cek apakah gambar ada

        if ($errorImage === 4) {

            echo "<script>alert('Anda Belum Upload Gambar')</script>";

            return false;

        }

  

        // mengambil ekstensi file

        $validType = ['svg', 'jpg', 'png', 'jpeg', 'webp'];

        $extensionFile = explode(".", $nameImage);

        $extensionValid = strtolower(end($extensionFile));

  

        // cek apakah yang diupload gambar atau bukan

        if (!in_array($extensionValid, $validType)) {

            echo "<script>alert('yang anda Upload bukan gambar')</script>";

            return false;

        }

  

        // cek size file

        if ($sizeFile > 3_000_000) {

            echo "<script>alert('Ukuran File Terlalu Besar!!(Maks 3MB)')</script>";

            return false;

        }

  

        // upload file

        $nameImage = uniqid() . "." . $extensionValid;

        move_uploaded_file($directoryFile, "img/{$nameImage}");

  

        // mengembalikan namafile yg sudah divalidasi

        return $nameImage;

    }

  
  

    if (isset($_POST['simpan'])) {

        $nama = $_POST['nama'];

        $email = $_POST['email'];

        $jenis_kelamin = $_POST['jenis_kelamin'];

        $alamat = $_POST['alamat'];

  

        $gambar = upload();

        if (!$gambar) {

            return false;

        }

  

        // * true / false

        $query = mysqli_query($koneksi, "INSERT into siswa(nama,email,jenis_kelamin,alamat,gambar)

  

        values ('$nama','$email','$jenis_kelamin','$alamat', '$gambar')");

  

        if ($query == true) {

            echo "<script>

            alert('Tambah data Berhasil')

            window.location.href='table.php'

            </script>";

        } else {

            echo '<script>alert("Tambah data gagal")</script>';

        }

    }

  
  

    ?>

    <form method="post" enctype="multipart/form-data">

        <table>

            <tr>

                <td>Nama</td>

                <td><input type="text" name="nama"></td>

            </tr>

            <tr>

                <td>Email</td>

                <td><input type="text" name="email"></td>

            </tr>

            <tr>

                <td>Jenis Kelamin</td>

                <td>>

                    <select name="jenis_kelamin">

                        <option>Laki-laki</option>

                        <option>Perempuan</option>

                    </select>

                </td>

            </tr>

  

            <tr>

                <td>Alamat</td>

                <td><input type="text" name="alamat"></td>

            </tr>

  

            <tr>

                <td>Gambar</td>

                <td><input type="file" name="gambar"></td>

            </tr>

  

            <tr>

                <td></td>

                <td>

                    <button name="simpan" type="submit">Simpan</button>

                    <button type="reset">Reset</button>

                    <a href="table.php">Kembali</a>

                </td>

            </tr>

        </table>

    </form>

  

</body>

  

</html>
```
### Hasil Upload
![GAMBAR](tambahuploaddb.png)

![GAMBAR](uploadb.png)

### Analisis Upload
- Membuat halaman HTML sederhana dengan form untuk menambahkan data.
- Menggunakan elemen `table` untuk menata form input.
- Form menggunakan metode POST dan memiliki atribut `enctype="multipart/form-data"` untuk menghandle upload file.
- Script ini mengimpor file `koneksi.php` yang diasumsikan berisi koneksi ke database.
- Mengecek apakah gambar telah di-upload.
- Memvalidasi ekstensi file yang diizinkan (`svg`, `jpg`, `png`, `jpeg`, `webp`).
- Memeriksa ukuran file (maksimal 3MB).
- Mengunggah file ke direktori `img/` dengan nama unik.
- Mengembalikan nama file yang telah divalidasi atau `false` jika ada kesalahan.
- Berisi input untuk `nama`, `email`, `jenis kelamin`, `alamat`, dan `gambar`.
- Tombol `Simpan` untuk mengirim data, `Reset` untuk menghapus isian form, dan `Kembali` untuk kembali ke halaman `table.php`.

### Kesimpulan Upload 
Program PHP ini membuat sebuah halaman web untuk menambahkan data siswa ke dalam database dengan upload gambar.
## Dowload 
### Kode Program Download
```php
<?php

include "koneksi.php";

  

$query = mysqli_query($koneksi, 'SELECT * FROM siswa');

  

$data = [];

$data[] = ["ID", "Nama","email","Jenis Kelamin", "Alamat"];

while ($row = mysqli_fetch_assoc($query)) {

    $data[] = [

        $row['id_siswa'],

        $row['nama'],

        $row['email'],

        $row['jenis_kelamin'],

        $row['alamat']

    ];

}

  

$namafile = "excel_data.xls";

header("Content-Type: application/vnd.ms-excel");

header("Content-Disposition: attachment;filename=\"$namafile\"");

header("Cache-Control: max-age=0");

  

$output = fopen("php://output", "w");

  

foreach ($data as $row) {

    fputcsv($output, $row, "\t");

}

  

fclose($output);

exit;
```

### Hasil Download
![GAMBAR](downloaddb.png)

### Analisis Download

- `include="koneksi.php";` Script ini mengimpor file `koneksi.php` yang berisi koneksi ke database.
- `$query = mysqli_query` Melakukan query untuk mengambil semua data dari tabel `siswa`.
-  Membuat array `$data` untuk menyimpan hasil query.
- Menambahkan header kolom ke array `$data`
- Menggunakan `mysqli_fetch_assoc()` untuk mengambil setiap baris hasil query dan menambahkannya ke array `$data`.
- Mengatur header HTTP untuk menginformasikan bahwa konten yang dikirim adalah file Excel (`application/vnd.ms-excel`).
- Mengatur header untuk memaksa browser mengunduh file dengan nama `excel_data.xls`.
- Mengatur header untuk cache control.
- Membuka aliran keluaran (`php://output`) untuk menulis data.
- Menggunakan `fputcsv()` untuk menulis data ke aliran keluaran dalam format yang dipisahkan oleh tab (`\t`).
- Menutup aliran keluaran.
- Menghentikan eksekusi skrip dengan `exit`.
### Kesimpulan Download
Program PHP ini menghasilkan file Excel yang berisi data dari tabel `siswa` dalam database dan memaksa browser untuk mengunduh file tersebut.