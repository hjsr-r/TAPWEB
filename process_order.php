<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $camera = htmlspecialchars($_POST['camera']);
    $start_date = htmlspecialchars($_POST['start_date']);
    $end_date = htmlspecialchars($_POST['end_date']);

    $orderData = "$name,$camera,$start_date,$end_date\n";

    file_put_contents('orders.txt', $orderData, FILE_APPEND);
    echo "Pesanan Telah Masuk, Sedang di Proses";
}
?>


