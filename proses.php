<?php
// Cek apakah form dikirim menggunakan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Fungsi untuk membersihkan data input agar aman
    function clean_input($data) {
        $data = trim($data); // Menghapus spasi di awal dan akhir
        $data = stripslashes($data); // Menghapus karakter backslash
        $data = htmlspecialchars($data); // Mengonversi karakter berbahaya menjadi entitas HTML untuk mencegah XSS
        return $data;
    }

    // Membersihkan semua input dari form menggunakan fungsi clean_input
    $nama = clean_input($_POST['nama']);
    $email = clean_input($_POST['email']);
    $komentar = clean_input($_POST['komentar']);
    $gender = clean_input($_POST['gender']);

    // Simpan nama di cookies selama 1 hari (86400 detik)
    // Cookie disimpan dengan HttpOnly flag untuk meningkatkan keamanan
    setcookie('nama', $nama, time() + 86400, "", "", false, true);

    // Format data yang akan disimpan ke file, dipisahkan dengan " | "
    $data = "$nama | $email | $komentar | $gender\n";

    // Simpan data ke file 'bukutamu.txt'
    // FILE_APPEND menambahkan data baru di akhir file tanpa menghapus data sebelumnya
    // LOCK_EX mencegah file diakses bersamaan oleh proses lain
    file_put_contents("bukutamu.txt", $data, FILE_APPEND | LOCK_EX);

    // Tampilkan pesan konfirmasi kepada pengguna setelah data tersimpan
    echo "Thank you for filling the guestbook!";
    echo "<br><a href='index.php'>Kembali ke halaman utama</a>"; // Link untuk kembali ke halaman utama
}
?>
