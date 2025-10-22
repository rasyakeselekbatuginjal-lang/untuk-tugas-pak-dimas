<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 400px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        p {
            font-size: 16px;
            margin: 5px 0;
        }
        a {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            color: white;
            background: #007bff;
            padding: 8px 12px;
            border-radius: 5px;
        }
        a:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Hasil Biodata</h2>
        <p><strong>Nama:</strong> <?php echo $_POST['nama']; ?></p>
        <p><strong>Kelas:</strong> <?php echo $_POST['kelas']; ?></p>
        <p><strong>Jenis Kelamin:</strong> <?php echo $_POST['kelamin']; ?></p>
        <p><strong>Tanggal Lahir:</strong> <?php echo $_POST['tgl_lahir']; ?></p>
        <p><strong>Alamat:</strong> <?php echo $_POST['alamat']; ?></p>
        <p><strong>Hobi:</strong> <?php echo $_POST['hobi']; ?></p>
        <p><strong>Agama:</strong> <?php echo $_POST['agama']; ?></p>
        <p><strong>NIS:</strong> <?php echo $_POST['nis']; ?></p>

        <a href="index.php">Kembali</a>
    </div>
</body>
</html>