<?php 
$connect = mysqli_connect(
    getenv('DB_HOST') ?: 'localhost',
    getenv('DB_USER') ?: 'root',
    getenv('DB_PASSWORD') !== false
        ? getenv('DB_PASSWORD') : '',
    getenv('DB_NAME') ?: 'muzium'
);

if (!$connect) {
    http_response_code(500);
    exit('Sambungan pangkalan data gagal.');
}

mysqli_set_charset($connect, 'utf8mb4');
?>
