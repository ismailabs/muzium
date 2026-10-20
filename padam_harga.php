<?php
include 'config.php';

<?php
session_start();

if (empty($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

require 'config.php';

if (
    $_SERVER['REQUEST_METHOD'] !== 'POST' ||
    !hash_equals(
        $_SESSION['csrf_token'] ?? '',
        (string) ($_POST['csrf_token'] ?? '')
    )
) {
    http_response_code(403);
    exit('Permintaan tidak sah.');
}

$bil = filter_input(
    INPUT_POST,
    'bil',
    FILTER_VALIDATE_INT,
    ['options' => ['min_range' => 1]]
);

if (!$bil) {
    http_response_code(400);
    exit('ID tiket tidak sah.');
}

$stmt = mysqli_prepare(
    $connect,
    'DELETE FROM infotiket WHERE bil = ?'
);

mysqli_stmt_bind_param($stmt, 'i', $bil);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

header('Location: tiketmuzium.php');
exit();
header("Location: tiketmuzium.php");
exit();
?>
