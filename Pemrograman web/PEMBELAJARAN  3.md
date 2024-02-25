
# HTML
# STRUKUR DASAR HTML


> [!INFO]-
> Berikut adalah contoh program yang akan dijalankan 
> 

```HTML
<!DOCTYPE htm!>

<html>

    <head>

        <title>Youtube.com</title>

    </head>

    <body>

 <p>titik tertinggi jadi tukang cukur yaitu mengikhlaskan dia

 cukur ditempat lain </p>

    </body>

</html>
```

- tag `<!DOCTYPE html>` memberitahukan web browser bahwa dokumen *HTML* adalah versi 5 
- tag pembuka `<html>` menandai awal sebuah dokumen *HTML* sampai dengan tag penutup `</html>`.
- apapun tag yang berada di antara tag pembuka `<body>` sampai dengan tag penutup `</body>` akan tampil di web browser.
# ANATOMI ELEMEN HTML

> [!INFO]-
> Berikut adalah contoh program hyperlink yang akan dijalankan 

```html
<!DOCTYPE htm!>

<html>

    <head>

        <title>Youtube.com</title>

    </head>

    <body>

 <p>buka link untuk dapat pahala </p>

 <a href="https://www.instagram.com">pahala cuy !</a>

    </body>

</html>
```

 Hasil program

![asek](IMG8.png)

> [!INFO]-
> Gambar dibawah ini adalah hasil jika mengklik link tersebut

![asek](IMG7.png) 

# HEADING:
`<h>` adalah tag yang digunakan untuk menunjukkan sebuah bagian penting pada halaman website dan memiliki enam tingkatan yang berurutan yaitu `<h1>` hingga `<h6>`,dimana semakin tinggi angka pada tag heading maka semakin kecil ukuran heading.

CONTOH PROGRAM:

![GAMBAR](IMG1.png)
>[!info]-
>tag `<br` digunakan sebagai fungsi membuat baris baru
>

HASIL PROGRAM:

![GAMBAR](IMG4.png)

>[!note]-
>seperti yang telah dijelaskan tadi, heading dengan tag `<h1>` adalah heading dengan ukuran paling besar dan heading dengan tag `<h6>` adalah heading dengan ukuran paling kecil,dimana semakin angka pada tag maka akan membuat heading semakin mengecil


# TAG:
  - `<a>` adalah tag pembuka.
  - `</a>` adalah tag penutup.
  - `href` adalah sebuah nama atribut
  - `http://www.instagram.com` adalah sebuah nilai dari atribut
  - `<br>`adalah tag yang tidak memerlukan tag penutup 
  - `<p>` adalah tag untuk  membuat paragraf
  - `<b`  adalah tag untuk menebalkan teks
  - `<u>`adalah tag untuk menggaris bawahi teks
  - `<br>` adalah tag untuk membuat baris baru
  
  CONTOH PROGRAM:
  ![gambar](IMG6.png)

HASIL PROGRAM:

![gambar](IMG5.png)

# LINK:

 -  link adalah ==bagian dari antarmuka yang bisa menghubungkan suatu tujuan atau target==. pada pembuatan web site kita dapat menambahkan sebuah link agar dapat menghubungkan antara halaman web site dengan *link* yang biasa terhubung dengan bagian utama web site tersebut.pada program **HTML** kita dapat menambahkan sebuah *link* agar dapat terhubung dengan platfrom yang ditujukan *link* tersebut.

MENGAKSES LINK PADA PROGRAM HTML:
dimulai dengan tag `<a>` dan diakhiri dengan `</a>` ,dengan adanya tag `<a>` lalu dilanjutkan dengan tag `href` yang berperan sebagai *nama atribut* dan `"https://www.google.com"` sebagai *nilai atribut* dari program link, dan `klik link ini` adalah sebagai *konten/isi tagnya*.
contoh pemanggilan link:
`<a href="https://www.instagram.com">klik link ini</a>

contoh program
```html
<!DOCTYPE htm!>

<html>

    <head>

        <title>Youtube.com</title>

    </head>

    <body>

 <p>buka link untuk dapat pahala </p>

 <a href="https://www.instagram.com">klik link ini</a>

    </body>

</html>

```
 Hasil Program

![GAMBAR](IMG3.png)
2. **Atribut Align**
	di tag paragraf juga memiliki beberapa atribut yaitu align atribut ini berfungsi sebagai mengatur perataan teks atau paragraf seperti 
	 align="left" yang dimana  memiliki fungsi untuk megatur teks untuk rata kiri
	 align="right" yang dimana memiliki fungsi untuk mengatur teks utuk rata kanan
	 align="center" yang dimana memiliki fungsi untuk mengatur teks untuk rata tengah
	 align="justify" yang dimana memiliki fungsi untuk  teks untuk rata kiri dan kanan

```html
<doctype htm>
<html>
<head>
<title>bukan web site</title>
<head>
     <body>
                <h3>Belajar Menggunakan Elemen Tag html</h3>
        <p align="left">kiri 
        </p>
        <p align="right">kanan</p>
        <p align="center">tengah</p>
        <p align="justify">kiri kanan</p>
	</body>
</html>
```
HASIL PROGRAM:
![GAMBAR](IMG(9).png)
