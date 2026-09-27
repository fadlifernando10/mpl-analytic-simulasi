<?php

try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=mpl_analytic_db",
        "root",
        ""
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}

?>