<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Mahasiswa Baru</title>
    <style>
        body {
            background-color: #E6E6FA; /* Warna latar belakang lavender */
            color: #333; /* Warna teks */
            font-family: 'Arial', sans-serif; /* Font */
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #6A5ACD; /* Warna judul (lavender tua) */
            text-align: center; /* Judul berada di tengah */
            margin-bottom: 20px;
            font-size: 2.5em; /* Ukuran font yang lebih besar */
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); /* Efek bayangan pada teks */
        }
        form {
            background-color: #ffffff; /* Warna latar belakang form */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: auto;
        }
        h2 {
            color: #5F4B8C; /* Warna judul bagian */
            border-bottom: 2px solid #6A5ACD; /* Garis bawah */
            padding-bottom: 5px;
            margin-bottom: 15px;
        }
        label {
            font-weight: bold; /* Menguatkan teks label */
            color: #6A5ACD; /* Warna teks label (lavender tua) */
            display: block;
            margin: 15px 0 5px;
        }
        input[type="text"], input[type="email"], input[type="date"], select {
            width: calc(100% - 20px); /* Membuat input lebar penuh */
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: background-color 0.3s; /* Transisi warna latar belakang */
        }
        input[type="text"].filled, input[type="email"].filled, input[type="date"].filled, select.filled {
            background-color: #E6E6FA; /* Warna latar belakang setelah diisi */
        }
        input[type="submit"] {
            background-color: #6A5ACD; /* Lavender tua */
            color: #CFF6FF; /* Warna teks tombol */
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block; /* Menjadikan tombol sebagai blok */
            margin: 20px auto; /* Mengatur margin otomatis untuk memusatkan */
            width: 100%; /* Mengatur lebar tombol */
            transition: background-color 0.3s; /* Transisi warna latar belakang */
            font-size: 16px; /* Ukuran font */
        }
        input[type="submit"]:hover {
            background-color: #8D4585; /* Warna tombol saat hover */
        }
    </style>
    <script>
        function markFilled() {
            const inputs = document.querySelectorAll('input[type="text"], input[type="email"], input[type="date"], select');
            inputs.forEach(input => {
                input.addEventListener('input', () => {
                    if (input.value) {
                        input.classList.add('filled');
                    } else {
                        input.classList.remove('filled');
                    }
                });
            });
        }
        window.onload = markFilled; // Memanggil fungsi saat halaman dimuat
    </script>
</head>
<body>
    <h1>Registrasi Mahasiswa Baru</h1>
    <form action="process.php" method="POST">
        <h2>Data Pribadi</h2>
        <!-- Data Pribadi Fields -->
        <label for="nama">Nama Lengkap :</label>
        <input type="text" id="nama" name="nama" required>
        <label for="nisn">NISN :</label>
        <input type="text" id="nisn" name="nisn" required>
        <label for="nik">NIK :</label>
        <input type="text" id="nik" name="nik" required>
        <label for="tempat_lahir">Tempat Lahir :</label>
        <input type="text" id="tempat_lahir" name="tempat_lahir" required>
        <label for="tanggal_lahir">Tanggal Lahir :</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
        <label for="agama">Agama :</label>
        <select id="agama" name="agama" required>
            <option value="">Pilih Agama</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
        </select>
        <label for="jenis_kelamin">Jenis Kelamin :</label>
        <select id="jenis_kelamin" name="jenis_kelamin" required>
            <option value="">Pilih Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        <label for="program_studi">Program Studi :</label>
        <input type="text" id="program_studi" name="program_studi" required>
        
        <h2>Data Orang Tua</h2>
        <!-- Data Orang Tua Fields -->
        <label for="nama_ayah">Nama Ayah :</label>
        <input type="text" id="nama_ayah" name="nama_ayah" required>
        <label for="pekerjaan_ayah">Pekerjaan Ayah :</label>
        <input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" required>
        <label for="penghasilan_ayah">Penghasilan Ayah :</label>
        <select id="penghasilan_ayah" name="penghasilan_ayah" required>
            <option value="">Pilih Penghasilan</option>
            <option value="≤ 1 juta">≤ Rp.1.000.000</option>
            <option value="1 juta - 3 juta">Rp.1.000.000 - Rp.3.000.000</option>
            <option value="3 juta - 5 juta">Rp.3.000.000 - Rp.5.000.000</option>
            <option value="5 juta - 10 juta">Rp.5.000.000 - Rp.10.000.000</option>
            <option value="≥ 10 juta">≥ Rp.10.000.000</option>
        </select>
        <label for="no_telp_ayah">No. Telepon :</label>
        <input type="text" id="no_telp_ayah" name="no_telp_ayah" required>
        <label for="nama_ibu">Nama Ibu :</label>
        <input type="text" id="nama_ibu" name="nama_ibu" required>
        <label for="pekerjaan_ibu">Pekerjaan Ibu :</label>
        <input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" required>
        <label for="penghasilan_ibu">Penghasilan Ibu :</label>
        <select id="penghasilan_ibu" name="penghasilan_ibu" required>
            <option value="">Pilih Penghasilan</option>
            <option value="≤ 1 juta">≤ Rp.1.000.000</option>
            <option value="1 juta - 3 juta">Rp.1.000.000 - Rp.3.000.000</option>
            <option value="3 juta - 5 juta">Rp.3.000.000 - Rp.5.000.000</option>
            <option value="5 juta - 10 juta">Rp.5.000.000 - Rp.10.000.000</option>
            <option value="≥ 10 juta">≥ Rp.10.000.000</option>
        </select>
        <label for="no_telp_ibu">No. Telepon :</label>
        <input type="text" id="no_telp_ibu" name="no_telp_ibu" required>
        
        <h2>Data Asal Sekolah</h2>
        <!-- Data Asal Sekolah Fields -->
        <label for="nama_sekolah">Nama Sekolah :</label>
        <input type="text" id="nama_sekolah" name="nama_sekolah" required>

        <label for="jurusan">Jurusan :</label>
        <input type="text" id="jurusan" name="jurusan" required>

        <label for="lulus_tahun">Lulus Tahun :</label>
        <input type="text" id="lulus_tahun" name="lulus_tahun" required>

        <label for="alamat_sekolah">Alamat Sekolah :</label>
        <input type="text" id="alamat_sekolah" name="alamat_sekolah" required>

        <input type="submit" value="Daftar">
   

    </form>
</body>
</html>
