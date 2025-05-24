<?php

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';


$valid_email = 'g221210575@ogr.sakarya.edu.tr';
$valid_password = 'g221210575';

if (!empty($email) && !empty($password)) {
    
    if ($email === $valid_email && $password === $valid_password) {
        $username = explode('@', $email)[0];
        echo "<b>Hoşgeldiniz $username</b><br>";
        echo "<p><a href='index.html'>&lt;Hakkimda sayfasina git&gt;</a></p>";
    } else {
        echo "Bilgileriniz Hatalı. Lütfen tekrar deneyin.<br>";
        echo "<p><a href='login.html'>&lt;GERİ DÖN&gt;</a></p>";
    }

} else {
    echo "Eksik bilgi girdiniz. Lütfen tüm alanları doldurun.<br>";
    echo "<p><a href='login.html'>&lt;GERİ DÖN&gt;</a></p>";
}
?>