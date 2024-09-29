<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Mendefinisikan karakter encoding sebagai UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Memastikan halaman responsive di perangkat mobile -->
    <title>Fill The Guestbook</title> <!-- Judul halaman -->
    <style>
        body {
            font-family: Arial, sans-serif; /* Mengatur font bawaan halaman */
            background-color: #f0f0f0; /* Warna latar belakang */
            text-align: center; /* Mengatur teks menjadi rata tengah */
        }
        h2 {
            color: #333; /* Mengatur warna teks */
            margin-top: 20px; /* Menambahkan margin atas pada heading */
        }
        form {
            display: inline-block; /* Membuat form tampil sebagai elemen blok tetapi inline */
            background-color: #fff; /* Warna latar belakang form */
            padding: 20px; /* Padding di dalam form */
            border-radius: 8px; /* Membuat sudut form menjadi melengkung */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan pada form */
            text-align: left; /* Mengatur teks di dalam form menjadi rata kiri */
            width: 100%; /* Mengatur lebar form */
            max-width: 600px; /* Lebar maksimum form */
        }
        label {
            display: block; /* Membuat label tampil dalam satu baris */
            margin-bottom: 8px; /* Memberi jarak bawah pada label */
            font-weight: bold; /* Membuat teks label tebal */
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: calc(100% - 20px); /* Mengatur lebar input dan textarea agar tidak terlalu rapat ke tepi */
            padding: 8px; /* Padding dalam input dan textarea */
            margin-bottom: 15px; /* Memberi jarak bawah pada input */
            border-radius: 4px; /* Membuat sudut input menjadi melengkung */
            border: 1px solid #ccc; /* Mengatur warna dan ketebalan border */
        }
        textarea {
            height: 100px; /* Mengatur tinggi textarea */
        }
        input[type="radio"] {
            margin-right: 10px; /* Memberi jarak kanan pada tombol radio */
        }
        .gender-label {
            margin-bottom: 8px; /* Memberi jarak bawah pada label gender */
        }
        .gender-options {
            margin-bottom: 15px; /* Memberi jarak bawah pada opsi gender */
        }
        button {
            background-color: #3498db; /* Warna latar tombol */
            color: #fff; /* Warna teks tombol */
            padding: 10px 20px; /* Padding dalam tombol */
            border: none; /* Menghilangkan border tombol */
            border-radius: 5px; /* Membuat sudut tombol melengkung */
            cursor: pointer; /* Menampilkan pointer saat hover di atas tombol */
            display: block; /* Mengatur tombol sebagai blok */
            width: 100%; /* Mengatur lebar tombol */
            max-width: 150px; /* Lebar maksimum tombol */
            margin: 0 auto; /* Memposisikan tombol di tengah */
        }
        button:hover {
            background-color: #2980b9; /* Mengubah warna tombol saat di-hover */
        }
        a {
            display: inline-block; /* Membuat link tampil sebagai blok inline */
            margin-top: 20px; /* Memberi jarak atas pada link */
            text-decoration: none; /* Menghilangkan garis bawah pada link */
            color: #3498db; /* Warna teks link */
        }
    </style>
</head>
<p>
<h2>Isi Buku Tamu</h2> <!-- Judul form -->
<form action="proses.php" method="POST"> <!-- Form dikirim ke proses.php menggunakan metode POST -->
    <label for="nama">Nama:</label> <!-- Label untuk input nama -->
    <input type="text" id="nama" name="nama" value="<?php echo isset($_COOKIE['nama']) ? $_COOKIE['nama'] : ''; ?>" required> <!-- Input teks untuk nama, menampilkan nilai dari cookie jika ada -->

    <label for="email">Email:</label> <!-- Label untuk input email -->
    <input type="email" id="email" name="email" required> <!-- Input email -->

    <label for="komentar">Komentar:</label> <!-- Label untuk komentar -->
    <textarea id="komentar" name="komentar" required></textarea> <!-- Textarea untuk komentar -->

    <div class="gender-label">
        <label>Gender:</label> <!-- Label untuk pilihan gender -->
    </div>
    <div class="gender-options">
        <input type="radio" id="pria" name="gender" value="Pria" required> Pria <!-- Opsi radio untuk gender pria -->
        <input type="radio" id="wanita" name="gender" value="Wanita" required> Wanita <!-- Opsi radio untuk gender wanita -->
    </div>

    <button type="submit">Submit</button> <!-- Tombol submit form -->
</form>

<p><a href="index.php">Kembali ke halaman utama</a></p> <!-- Link kembali ke halaman utama -->
</body>
</html>
