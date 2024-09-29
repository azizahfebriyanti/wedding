<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Mendefinisikan karakter encoding sebagai UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Memastikan halaman responsive di perangkat mobile -->
    <title>Lihat Buku Tamu</title> <!-- Judul halaman -->
    <style>
        body {
            font-family: Arial, sans-serif; /* Mengatur font halaman */
            background-color: #f0f0f0; /* Warna latar belakang halaman */
            text-align: center; /* Teks diatur agar rata tengah */
        }
        h2 {
            color: #333; /* Warna teks heading */
            margin-top: 20px; /* Margin atas untuk heading */
        }
        table {
            width: 80%; /* Lebar tabel diatur 80% dari lebar halaman */
            margin: 20px auto; /* Margin atas dan bawah, serta rata tengah secara horizontal */
            border-collapse: collapse; /* Menghilangkan jarak antar border */
            background-color: #fff; /* Warna latar belakang tabel */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan pada tabel */
        }
        table, th, td {
            border: 1px solid #ddd; /* Mengatur border tabel, header, dan cell */
        }
        th, td {
            padding: 12px; /* Memberi padding pada header dan cell */
            text-align: left; /* Teks rata kiri */
        }
        th {
            background-color: #3498db; /* Warna latar belakang header tabel */
            color: white; /* Warna teks pada header tabel */
        }
        tr:nth-child(even) {
            background-color: #f2f2f2; /* Warna latar belakang pada baris genap */
        }
        p {
            font-size: 14px; /* Ukuran teks paragraf */
            line-height: 1.5; /* Jarak antar baris dalam paragraf */
            margin-top: 20px; /* Margin atas pada paragraf */
        }
        .last-entry {
            font-weight: bold; /* Membuat teks menjadi tebal */
            color: #3498db; /* Warna teks untuk entry terakhir */
        }
        a {
            display: inline-block; /* Mengatur link sebagai blok inline */
            margin-top: 20px; /* Margin atas pada link */
            text-decoration: none; /* Menghilangkan garis bawah pada link */
            color: #3498db; /* Warna teks link */
        }
    </style>
</head>
<body>
<h2>Daftar Buku Tamu</h2>

<!-- Embed kode PHP di dalam HTML -->
<?php
// Cek apakah file buku tamu ada
if (file_exists("bukutamu.txt")) {
    // Baca isi file buku tamu
    $data = file("bukutamu.txt", FILE_IGNORE_NEW_LINES);

    if (!empty($data)) {
        // Jika data ada, tampilkan dalam bentuk tabel
        echo "<table>";
        echo "<tr><th>Nama</th><th>Email</th><th>Komentar</th><th>Gender</th></tr>";  // Baris header tabel

        // Loop melalui setiap baris data dan buat tabel
        foreach ($data as $line) {
            $guest = explode(" | ", $line);  // Memisahkan data setiap kolom berdasarkan " | "
            echo "<tr>";  // Membuat baris baru di tabel
            foreach ($guest as $info) {
                echo "<td>$info</td>";  // Menampilkan data di dalam sel tabel
            }
            echo "</tr>";
        }

        echo "</table>";  // Mengakhiri tabel
    } else {
        // Jika file kosong, tampilkan pesan
        echo "<p>Belum ada data buku tamu.</p>";
    }
} else {
    // Jika file tidak ditemukan, tampilkan pesan
    echo "<p>Belum ada data buku tamu.</p>";
}

// Tampilkan nama pengunjung terakhir yang tersimpan di cookies
if (isset($_COOKIE['nama'])) {
    echo "<p class='last-entry'>Terakhir diisi oleh: " . $_COOKIE['nama'] . "</p>";  // Menampilkan nama terakhir yang mengisi buku tamu
}
?>
<!-- Akhir kode PHP -->
<a href="index.php">Kembali ke halaman utama</a> <!-- Link untuk kembali ke halaman utama -->
</body>
</html>
