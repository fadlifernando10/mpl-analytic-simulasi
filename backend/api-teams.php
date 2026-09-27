<?php

try {
    include 'koneksi.php';
    
    $stmt = $pdo->query("SELECT team_id, team_name, short_code, logo_url FROM teams");
    $teams = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Mengembalikan data dalam bentuk JSON yang sukses
    echo json_encode([
        "status" => "success",
        "message" => "Berhasil mengambil data tim MPL",
        "data" => $teams
    ], JSON_PRETTY_PRINT);

} catch (Exception $e) {
    // Jika terjadi error pada query
    echo json_encode([
        "status" => "error",
        "message" => $e->getMessage()
    ]);
}



?>