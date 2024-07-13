<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Rental Kamera Mika</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section id="admin">
        <div class="container">
            <h2>Data Pemesanan</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Kamera</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $file = fopen("orders.txt", "r");
                    while (($line = fgets($file)) !== false) {
                        $data = explode(",", trim($line));
                        echo "<tr>";
                        foreach ($data as $value) {
                            echo "<td>" . htmlspecialchars($value) . "</td>";
                        }
                        echo "</tr>";
                    }
                    fclose($file);
                    ?>
                </tbody>
            </table>
        </div>
    </section>
   
</body>
</html>
