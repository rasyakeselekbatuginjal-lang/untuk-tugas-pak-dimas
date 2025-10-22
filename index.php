<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata Pak Dimas</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .bg {
            background: url("penus.jpeg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            filter: blur(8px);
            box-shadow: inset 0 0 0 2000px rgb(16 16 16 / 28%);
            transform: scale(1.1);
            -webkit-transform: scale(1.1);
            position: fixed;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0;
            z-index: -999;
        }

        .judul h2{
            color: #1b16206f;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 2rem;
        }

        form {
            margin-top: 5%;
            background: white;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 500px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
             color: #1f2b2bff;
        }
        input, textarea, select {
            width: 100%;
            padding: 8px;
            margin: 6px 0 12px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            background-color: #422f8893;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #3f12df93;
        }
    </style>
</head>
<body>
    <div class="bg"></div>
    <form action="hasil.php" method="POST">
        <div class="judul"><h2>Form Biodata</h2></div>
        <label>Nama Lengkap:</label>
        <input type="text" name="nama" placeholder="Masukkan Nama Lengkap" required>

        <label>Kelas:</label>
        <select name="kelas" required>
            <option value="">-- Pilih Kelas --</option>
            <option value="X RPL 1">X RPL 1</option>
            <option value="X RPL 2">X RPL 2</option>
        </select>

        <label>Kelamin:</label>
        <select name="kelamin" required>
            <option value="">-- Pilih Jenis Kelamin Anda --</option>
            <option value="Laki-laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>

        <label>Tanggal Lahir:</label>
        <input type="date" name="tgl_lahir" placeholder="Masukkan Tangga-Lahir" required>

        <label>Alamat:</label>
        <textarea name="alamat" rows="3" placeholder="Masukkann Alamat Lengkap" required></textarea>

        <label>Hobi:</label>
        <input type="text" name="hobi" placeholder="Masukkan Kegemaranmu" required>

        <label>Agama:</label>
        <select name="agama" required>
            <option value="">-- Masukkan Agama mu --</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Budhha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
            <option value="Katolik">Katolik</option>
        </select>

        <label>Nis:</label>
        <input type="number" name="nis" placeholder="Masukkan NIS mu" required>

        <button type="submit">Kirimkan</button>
        </form>
</body>
</html>