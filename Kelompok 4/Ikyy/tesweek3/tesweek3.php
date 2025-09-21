<!-- <?php
$salam = "Selamat Pagi";
$nama_pengguna = " Ikyy";
$umur = 20;

echo $salam. ", Nama saya". $nama_pengguna . ".";
echo "<br>";
echo "Umur Saya " . $umur . " tahun";
?> -->


<!-- <?php
if (isset($_POST['nama_lengkap'])) {
    $nama_dari_form = htmlspecialchars($_POST['nama_lengkap']);
    echo "<h1>Halo, " .$nama_dari_form. "</h1>";
    echo "<p>Selamat datang di website kami.</p>";
}
?> -->

<?php
if (isset($_POST['nama_lengkap']) && isset($_POST['email']) && isset($_POST['password'])){
    $nama = htmlspecialchars($_POST['nama_lengkap']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    echo "<h1>Halo, " .$nama. "</h1>";
    echo "<h1>Email yang Anda gunakan " .$email. "</h1>";
    echo "<h1>Password Anda adalah: " .$password. "</h1>";
    echo "<p>Selamat datang di website kami.</p>";
}
?>