<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Registrasi</title>
    <style>
        body {
            background-color: #E6E6FA; /* Warna latar belakang lavender */
            color: #333; /* Warna teks */
            font-family: 'Arial', sans-serif; /* Font */
            text-align: center; /* Memusatkan teks */
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #6A5ACD; /* Warna judul */
            font-size: 2.5em; /* Ukuran font yang lebih besar */
            margin-bottom: 20px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); /* Efek bayangan pada teks */
        }
        h2 {
            color: #5F4B8C; /* Warna judul */
            margin: 20px 0; /* Margin untuk jarak */
        }
        a {
            display: inline-block; 
            padding: 10px 20px; 
            background-color: #6A5ACD; /* Warna lavender tua */
            color: white; 
            text-decoration: none; 
            border-radius: 4px; 
            transition: background-color 0.3s; /* Transisi untuk hover */
        }
        a:hover {
            background-color: #8D4585; /* Warna tombol saat hover */
        }
        .message {
            background-color: #ffffff; /* Warna latar belakang pesan */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: auto;
        }
    </style>
</head>
<body>
    <h1>Hasil Registrasi</h1>
    <div class="message">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Mengambil data dari form dan membersihkannya
            $data = [
                filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING),
                filter_input(INPUT_POST, 'nisn', FILTER_SANITIZE_STRING),
                filter_input(INPUT_POST, 'nik', FILTER_SANITIZE_STRING),
                filter_input(INPUT_POST, 'tempat_lahir', FILTER_SANITIZE_STRING),
                filter_input(INPUT_POST, 'tanggal_lahir', FILTER_SANITIZE_STRING),
                filter_input(INPUT_POST, 'agama', FILTER_SANITIZE_STRING),
                filter_input(INPUT_POST, 'jenis_kelamin', FILTER_SANITIZE_STRING),
                filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL),
                filter_input(INPUT_POST, 'program_studi', FILTER_SANITIZE_STRING),
                filter_input(INPUT_POST, 'nama_ayah', FILTER_SANITIZE_STRING),
                filter_input(INPUT_POST, 'pekerjaan_ayah', FILTER_SANITIZE_STRING),
                filter_input(INPUT_POST, 'penghasilan_ayah', FILTER_SANITIZE_STRING),
                filter_input(INPUT_POST, 'no_telp_ayah', FILTER_SANITIZE_STRING),
                filter_input(INPUT_POST, 'nama_ibu', FILTER_SANITIZE_STRING),
                filter_input(INPUT_POST, 'pekerjaan_ibu', FILTER_SANITIZE_STRING),
                filter_input(INPUT_POST, 'penghasilan_ibu', FILTER_SANITIZE_STRING),
                filter_input(INPUT_POST, 'no_telp_ibu', FILTER_SANITIZE_STRING),
                filter_input(INPUT_POST, 'nama_sekolah', FILTER_SANITIZE_STRING),
                filter_input(INPUT_POST, 'jurusan', FILTER_SANITIZE_STRING),
                filter_input(INPUT_POST, 'lulus_tahun', FILTER_SANITIZE_STRING),
                filter_input(INPUT_POST, 'alamat_sekolah', FILTER_SANITIZE_STRING)
            ];

            // Menyimpan data ke dalam file CSV
            $file = fopen('data.csv', 'a');
            if ($file === false) {
                die("Error: Unable to open file.");
            }

            if (fputcsv($file, $data) === false) {
                fclose($file);
                die("Error: Unable to write to file.");
            }
            fclose($file);

            // Menampilkan pesan berhasil
            echo "<h2>Registrasi berhasil!</h2><hr>
                  <a href='index.php'>Kembali ke Halaman Awal</a>";
        }
        ?>
    </div>
</body>
</html>
