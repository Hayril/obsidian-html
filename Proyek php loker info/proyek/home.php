<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            
        }

        .navbar {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .sidebar {
            min-height: 100vh;
            padding-top: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .user-profile img {
            border: 2px solid #007BFF;
            margin-bottom: 10px;
        }

        .user-profile h4 {
            margin: 10px 0;
            color: #333;
        }

        .user-profile p {
            color: #777;
        }

.card {
    border: none;
    border-radius: 10px;
    transition: transform 0.3s;
    width: 100%; /* Lebarkan card agar mengisi kolom */
    height: 100%; /* Sesuaikan tinggi card */
}

.card:hover {
    transform: scale(1.05);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.card-body {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100%; /* Biarkan isi card terpusat */
}


        .btn-light {
            border-radius: 50px;
            transition: background-color 0.3s;
        }

        .btn-light:hover {
            background-color: #f1f1f1;
        }   
        a {
            text-decoration: none;
            color: #007BFF; /* Warna biru */
            display: block;
            text-align: center;
            margin-top: 10px;
            background-color: #007BFF; /* Warna latar belakang abu-abu */
            padding: 10px; /* Menambahkan padding agar tautan lebih terlihat */
            border-radius: 6px; /* Memberikan sudut yang melengkung pada tautan */
        }

        a:hover {
            text-decoration: underline;
            color: white; /* Warna biru yang lebih gelap saat dihover */
            background-color: #007BFF; /* Warna latar belakang abu-abu */
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <h3>Tempat Pencarian Loker se-Makassar</h3>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <div class="user-profile text-center mt-4">
                        <img src="uploads/kantor.jpeg" alt="Profile" class="img-fluid rounded-circle" width="80">
                        <h4>LORDI (Loker Ardi)</h4>
                        <p>Jasa Pencarian lowongan kerja</p>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <p>Tempat mencari lowongan kerja yang terpercaya</p>
                        </li>
                        <li class="nav-item">
                            <p>Data aman dan terjaga</p>
                        </li>
                        <li class="nav-item">
                            <p>Lowongan dari seluruh Makassar</p>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Home</h1>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card bg-primary text-white h-100">
                            <div class="card-body py-5">
                                <h2 class="card-title">Data Lowongan</h2>
                                <p class="card-text">Informasi tentang Lowongan kerja.</p>
                            </div>
                            <div class="card-footer d-flex">
                                <a href="dashboard_user.php" class="btn btn-light btn-block">More info</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card bg-info text-white h-100">
                            <div class="card-body py-5">
                                <h2 class="card-title">About Us</h2>
                                <p class="card-text">Informasi tentang data Kami.</p>
                            </div>
                            <div class="card-footer d-flex">
                                <a href="aboutus.php" class="btn btn-light btn-block">More info</a>
                            </div>
                        </div>
                    </div>
                   
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
