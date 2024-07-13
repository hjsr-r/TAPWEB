<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $class = htmlspecialchars($_POST['class']);
    $start_date = htmlspecialchars($_POST['start_date']);
    $comments = htmlspecialchars($_POST['comments']);

    // Here you can add code to save the form data to a database or send an email

    echo "Terima kasih, $name, Anda telah mendaftar di kelas $class yang akan dimulai pada $start_date. Informasi lebih lanjut telah dikirim ke $email.";
} else {
    echo "Formulir tidak valid.";
}
?>
