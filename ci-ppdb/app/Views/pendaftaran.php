<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            color: #333;
            margin-bottom: 30px;
        }

        .form-icon {
            width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        .form-icon img {
            width: 100%;
            height: auto;
            max-width: 100%;
        }

        form {
            max-width: 5000px;
        }

        form label {
            display: block;
            margin-top: 10px;
            color: #666;
        }

        form input[type="text"],
        form input[type="date"],
        form input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        form input[type="submit"] {
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form input[type="submit"]:hover {
            background-color: #4cae4c;
        }

        .navbar {
            margin-bottom: 20px; /* Add margin-bottom to the navbar */
        }
    </style>
</head>
<body style="background-color:#F2F2F2">
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('img/kemendikbud.png') ?>" alt="Logo" style="max-width: 50px; max-height: 50px;"> 
            PPDB Online SMAN PBKK (A)
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-3">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link" href="#">Pengumuman</a>
                </li>
                <li class="nav-item ml-3 active">
                    <a class="nav-link" href="#">Mendaftar <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a>
                        <img src="<?= base_url('img/person.png') ?>" alt="" style="max-width: 35px; max-height: 35px;">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <h2 class="text-dark">Pendaftaran Tahun Ajaran 2023/2024</h2>
        <div class="row">
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <div class="form-icon">
                    <img src="<?= base_url('img/register.png') ?>" alt="Register Icon">
                </div>
            </div>

            <div class="container border rounded bg-light col-md-8">
                <div class="form-fields">
                    <h4 class="text-dark mt-3">Pendaftaran</h4>
                    <form action="submit_registration" method="post">
                        <div class="form-group">
                            <label for="nisn" class="text-muted font-weight-bold">NISN</label>
                            <input type="text" id="nisn" name="nisn" class="form-control" placeholder="NISN" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="full_name" class="text-muted font-weight-bold">Nama Lengkap</label>
                                    <input type="text" id="full_name" name="full_name" class="form-control" placeholder="Nama Lengkap" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nickname" class="text-muted font-weight-bold">Nama Panggilan</label>
                                    <input type="text" id="nickname" name="nickname" class="form-control" placeholder="Nama Panggilan" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="birth_place" class="text-muted font-weight-bold">Tempat Lahir</label>
                            <input type="text" id="birth_place" name="birth_place" class="form-control" placeholder="Tempat Lahir" required>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="day" class="text-muted font-weight-bold">Tanggal</label>
                                    <select id="day" name="day" class="form-control" required>
                                        <option value="">Tanggal</option>
                                        <!-- Generate day options dynamically -->
                                        <?php
                                        for ($i = 1; $i <= 31; $i++) {
                                            echo "<option value=\"$i\">$i</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="month" class="text-muted font-weight-bold">Bulan</label>
                                    <select id="month" name="month" class="form-control" required>
                                        <option value="">Bulan</option>
                                        <!-- Generate month options dynamically -->
                                        <?php
                                        $months = [
                                            "January", "February", "March", "April",
                                            "May", "June", "July", "August", "September",
                                            "October", "November", "December"
                                        ];
                                        foreach ($months as $key => $month) {
                                            echo "<option value=\"" . ($key + 1) . "\">$month</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="year" class="text-muted font-weight-bold">Tahun</label>
                                    <select id="year" name="year" class="form-control" required>
                                        <option value="">Tahun</option>
                                        <!-- Generate year options dynamically -->
                                        <?php
                                        $currentYear = date("Y");
                                        for ($i = $currentYear; $i >= 1900; $i--) {
                                            echo "<option value=\"$i\">$i</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>