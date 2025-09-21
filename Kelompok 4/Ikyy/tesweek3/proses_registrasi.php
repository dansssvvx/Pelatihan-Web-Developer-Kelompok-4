<?php
require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nama = htmlspecialchars($_POST['nama_lengkap']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if (empty($nama) || empty($email) || empty($_POST['password'])) {
        echo "Error: Semua field harus diisi! <a href='tesweek3.html'>Kembali</a>";
    } else {
        $query = "INSERT INTO users (nama, email, password) VALUES (?, ?, ?)";
        $stmt = $koneksi->prepare($query);
        $stmt->bind_param("sss", $nama, $email, $password);

        if ($stmt->execute()) {
        echo "<h1>Registrasi Berhasil!</h1>";
        echo "<p>Selamat, " . $nama . "! Data Anda telah disimpan.</p>";
        echo "<a href='tesweek3.html'>Kembali ke form</a> | <a href='tampil_data.php'>Lihat Data</a>";
        } else {
            if ($koneksi->errno == 1062) {
                echo "Error: Email " . $email . " sudah terdaftar. <a href='tesweek3.html'>Kembali</a>";
            } 
            else {
                echo "Error saat registrasi: " . $stmt->error . ". <a href='tesweek3.html'>Kembali</a>";
            }
        } $stmt->close();
    }
} else {
    header('Location: tesweek3.html');
    exit();
}
$koneksi->close();
?>