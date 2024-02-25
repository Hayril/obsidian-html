DATA BASE
# Membuat data base 
Data base adalah kumpulan informasi yang disimpan secara  sistematik dalam komputer sehingga kemudian  dapat diperiksa denganb mudah melalui program komputer tertentu.
Berikut adalah cara membuat data base:
1.masuk pada aplikasi xampp
2.pilih mode  mysql lalu klik start
3.kemudian klik shell.
![GAMBAR BASIS DATA](AWAL.png)
berikut adalah tampilan sheel yang harus dimasuki
![gambar](shel.png)
4.ketik `xampp-setup-storage`.lalu klik `allow` agar xampp dapat mengakses penyimpanan ke file explorer pada laptop.
5.saat masuk kedalam admin  ketik `mysql -u root -p` untuk masuk kedalam user databases.
6.kemudian kita akan disuruh memasukkan password,klik enter jika tidak mempunyai password.
7.tahap awal pembuatan database telah selesai.

# Penerapan mysql
setelah pembuatan database telah selesai,kita dapat menerapkan mysql dengann menggunakan fitur adalah membuat,menghapus,melihat,dan menggunakan database.

- **Membuat Database**,dalam pembuatan database pada mysql,di awali dengan menggunakan query `CRATE DATABASE [NAMA DATABASE]` setelah pengetikan query database akan terbuat.
CONTOH GAMBAR:
![gambar](membuatdb.png)
a.Pada tabel pertama merupakan tampilan pertama tabel berisikan nama nama-nama database sebelum membuat database yang baru
b.Pada bagian yang diblok pada gambar adalah sebuah perintah dengan *query* `create database rayhanbatman;` sebagai perintah mysql untuk membuat sebuah database dengan nama `rayhanbatman` pada mysql.
c. pada tabel kedua merupakan tampilan tabel yang telah berhasil membuat database dengan nama `rayhanbatman`. 

- **Menghapus Database**, dalam peghapusan database pada mysql,diawali dengan meggunakan query `DROP DATABASE[NAMA DATABASE]` maka mysql akan melakukan penghapusan Database setelah perintah query ini.
CONTOH GAMBAR:
![gambar](menghapusdb.png)
a.Pada tabel pertama merupakan tampilan pertama tabel berisikan nama nama database sebelum menghapus database dengan nama `rayhanbatman` 
b.Pada bagian yang diblok pada gambar adalah sebuah perintah dengan *query* `drop database rayhanbatman;` sebagai perintah mysql untuk menghapus sebuah database dengan nama `rayhanbatman` pada mysql.
c. pada tabel kedua merupakan tampilan tabel yang telah berhasil mengahapus database dengan nama `rayhanbatman`. 

- **Menampilkan Database**,dalam peritah menampilan database pada mysql,diawali dengan query `SHOW DATABASES;` maka perintah mysql akan menampilkan Databases setelah perintah query.
CONTOH GAMBAR:
![GAMBAR](membuatdb.png)
pada gambar di atas menampilkan tabel yang telah ditampilkan setelah melakukan perintah mysql dengan menggunakan *query*  `SHOW DATABASES;` maka akan ditampilkan beberapa nama-nama database pada mysql.
- **Menggunakan Database**,dalam perintah menggunakan database pada mysql,maka perintahnya menggunakan query `USE[NAMA_DATABASE]`
CONTOH GAMBAR:
![GAMBAR](use.png)
pada gambar di atas tertampilkan bahwa *query* `MariaDB [("none")]`adalah database yang sedang digunakan,kemudian setelah melakukan perintah dengan *query* `use XI_RPL_1` maka pada tampilan yang diblok dengan *query*`MariaDB [XI_RPL_1]>` menandakan bawa user telah berada pada database `XI_RPL_1`

# Tabel 

## Buat tabel 
Tabel merupakan **susunan data dalam baris dan kolom, atau mungkin dalam struktur yang lebih kompleks**.Tabel juga dapat digunakan pada *Basisdata* untuk membuat data menjadi lebih terstruktur.

```mysql
CREATE TABLE pelanggan (
id_pelanggan INT(4) PRIMARY KEY NOT NULL,
nama_depan VARCHAR(25)NOT NULL,
nama_belakang VARCHAR(25)NOT NULL,
no_telp char(12)UNIQUE

);
```

`id_pelanggan` bertipe data **INT** untuk menyimpan data berupa bilangan bulat dengan panjang maksimum *4* digit, sebagai kunci utama ` (PRIMARY KEY)` yang tidak boleh kosong `(NOT NULL)`.
nama_depan bertipe data **VARCHAR** untuk menyimpan data berupa karakter dengan panjang maksimum*25* karakter, tidak boleh kosong `(NOT NULL)`.
nama_belakang bertipe data **VARCHAR** untuk menyimpan data berupa karakter dengan panjang maksimum *25* karakter, tidak boleh kosong` (NOT NULL)`.
`no_telp` bertipe data **CHAR** untuk menyimpan data berupa karakter (berbeda dengan VARCHAR tipe data ini menyimpan data terlepas dari panjang string yang sebenarnya ) dengan panjang maksimum *12* karakter, dan harus unik `(UNIQUE)`.

>[!INFO]-
>Setelah memasukkan query di atas,tekan ENTER lalu ketik `DESC [NAMA TABEL]`,Kemudian tekan ENTER.

## tampilan struktur tabel
![GAMBAR](strukturtabel.png)

 - `id` adalah nama data base atau variabel untuk mengisi **id**,`INT(4)`  adalah perintah untuk menambahkan data id pelanggan dengan menggunakan tipe data `INT` untuk menyimpan data berupa angka,dan angka 4 adalah jumlah data yang hanya dapat ditambahkan. `PRIMARY KEY NOT NULL` adalah perintah untuk membuat data menjadi terkunci yang artinya data tersebut wajib terisi.
 - `nama_depan` merupakan variabel untuk menambahkan data dengan inisialisasi **nama_depan** dan `VARCHAR` sebagai tipe data untuk menyimpan data berupa karakter dan *(25)* adalah sebuah keterangan yang hanya dapat berupa 25 data,`NOT NULL` adalah sebagai perintah agar menegaskan bahwa data tersebut bisa saja tidak terisi.
- sama seperti nama depan tadi `nama_belakang` merupakan variabel untuk menambahkan data dengan inisialisasi **nama_belakang** dan `VARCHAR` sebagai tipe data untuk menyimpan data berupa karakter dan *(25)* adalah sebuah keterangan yang hanya dapat berupa 25 data,`NOT NULL` adalah sebagai perintah agar menegaskan bahwa data tersebut bisa saja tidak terisi.
- pada struktur `no_telp` menggunakan variabel **no_telp** sebagai tempat menyimpan data nomor telpon ,`char(12)` tipe data char sebagai tempat menyimpan data berupa karakter,kemudian *(12)* sebagai keterangan bahwa data yang dapat diisi hanya dapat berjumlah 12 data,dan `UNIQUE`  adalah sebuah perintah bahwa data tersebut tidak boleh sama dengan data yang lainnya.
## menampilkan tabel
![GAMBAR](GAMBARBASDAT/menampilkantable.png)
pada saat telah masuk kedalam data base yang kita punya,ketik `show tables;` maka *query* tersebut akan menampilkan beberapa tabel yang kita punya atau yang telah dibuat.
## QnA
1) Mengapa hanya kolom id_pelanggan yang menggunakan constraint PRIMARY KEY?
2) Mengapa pada kolom no_telp yang menggunakan data CHAR bukan VARCHAR?
3)  Mengapa hanya kolom no_telp yang menggunakan constraint UNIQUE?
4)  Mengapa kolom no_telp tidak memakai constraint NOT NULL sementara kolom lainnya menggunakan constraint tersebut?
5) Tuliskan perbedaan antara PRIMARY KEY dengan UNIQUE?
JAWABAN:
1) .Untuk membedakan id Pelanggan  yang sama, mencegah duplikasi, dan mempermudah pencarian data.
2) Tipe data char menyimpan data dalam karakter panjang lebih efisien. pencarian pada kolom tipe data CHAR dapat lebih cepat
3) Karna no_telp tidak ada yang sama semua pasti berbeda dan nilainya unik maka menggunakan constrains unique artinya data dalam tabel id_telpon berbeda tidak ada yang sama. 
4) Nomor telpon dianggap opsional. nomor telepon hanya menjadi wajib saat pengguna melakukan langkah-langkah tertentu, Anda mungkin tidak ingin mengharuskan pengguna mengisinya pada tahap awal.
5) PRIMERY KEY untuk membedakan data yang sama dan hanya boleh 1 dan tidak boleh tidak ada. 
	Kalau UNiQUE sebuah kolom yang memiliki data yang berbeda atau tidak sama unique boleh 1,2,3 Dan seterusnya dan boleh tidak ada.
	
