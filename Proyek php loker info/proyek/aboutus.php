<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background:#007BFF;
            color: black;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #77aaff 3px solid;
        }
        header a {
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
            background-color: #333; /* Warna latar belakang abu-abu */
            padding: 10px; /* Menambahkan padding agar tautan lebih terlihat */
            border-radius: 6px; /* Memberikan sudut yang melengkung pada tautan */
        }
        header ul {
            padding: 0;
            list-style: none;
        }
        header li {
            float: left;
            display: inline;
            padding: 0 20px 0 20px;
        }
        header #branding {
            float: left;
        }
        header #branding h1 {
            margin: 0;
        }
        header nav {
            float: right;
            margin-top: 10px;
        }
        #showcase {
            min-height: 400px;
            background: url('uploads/kota.jpg'); 
            background-size:100%; 
            text-align: center;
            color: black;
        }
        #showcase h1 {
            margin-top: 100px;
            font-size: 55px;
            margin-bottom: 10px;
        }
        #main-content {
            background: #fff;
            padding: 20px;
            margin-top: 20px;
            line-height: 1.6em;
        }
        footer {
            background: #0078BF;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1>Loker Ardi</h1>
            </div>
            <nav>
         
                    <li><a href="home.php">Keluar</a></li>
            </nav>
        </div>
    </header>

    <section id="showcase">
        <div class="container">
            <h1>Selamat Datang di Halaman Tentang Kami</h1>
            <p>Mengenal lebih dekat tentang perusahaan kami.</p>
        </div>
    </section>

    <div class="container" id="main-content">
        <h2>Tentang Perusahaan Kami</h2>
        <p>
            Perusahaan kami didirikan pada tahun 2024, dengan tujuan utama untuk memberikan solusi terbaik bagi para pelanggan kami. Kami selalu berkomitmen untuk menyediakan lowongan dan layanan berkualitas tinggi yang dapat memenuhi kebutuhan pelanggan di berbagai sektor.
        </p>
        <p>
            Tim kami terdiri dari profesional berpengalaman yang berdedikasi untuk mencapai keunggulan dalam setiap aspek pekerjaan mereka. Kami percaya bahwa inovasi adalah kunci utama dalam mencapai kepuasan pelanggan dan menjaga hubungan jangka panjang dengan mereka.
        </p>
        <h3>Visi Kami</h3>
        <p>
            Menjadi pemimpin pasar dalam industri dengan menghadirkan inovasi berkelanjutan dan layanan unggul yang memberikan nilai tambah bagi pelanggan kami.
        </p>
        <h3>Misi Kami</h3>
        <ul>
            <li>Menyediakan lowongan dan layanan berkualitas tinggi yang memenuhi kebutuhan pelanggan.</li>
            <li>Membangun hubungan jangka panjang yang didasarkan pada kepercayaan dan kepuasan pelanggan.</li>
            <li>Mendorong para pencari kerja dan peningkatan berkelanjutan dalam semua aspek bisnis kami.</li>
            <li>Memberikan lowongan positif bagi masyarakat dan lingkungan di mana kami beroperasi.</li>
        </ul>
    </div>

    <footer>
        <p>Perusahaan Lordi, &copy; 2024</p>
    </footer>
</body>
</html>
