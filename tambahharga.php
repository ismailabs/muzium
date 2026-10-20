<?php
include 'config.php';

$kategori = trim((string) ($_POST['kategori'] ?? ''));
$harga = trim((string) ($_POST['RMharibiasa'] ?? ''));
$cuti = trim((string) ($_POST['RMcutiumum'] ?? ''));

if (
    $kategori === '' ||
    strlen($kategori) > 50 ||
    !preg_match('/^RM\d+\.\d{2}$/', $harga) ||
    !preg_match('/^RM\d+\.\d{2}$/', $cuti)
) {
    $error = 'Maklumat kategori atau harga tidak sah.';
} else {
    $stmt = mysqli_prepare(
        $connect,
        'INSERT INTO infotiket
         (kategori, RMharibiasa, RMcutiumum)
         VALUES (?, ?, ?)'
    );

    mysqli_stmt_bind_param(
        $stmt,
        'sss',
        $kategori,
        $harga,
        $cuti
    );

    $saved = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    if ($saved) {
        header('Location: tiketmuzium.php');
        exit();
    }

    $error = 'Data gagal disimpan.';
}
?>
<!DOCTYPE html>
<html>
<body>
    <form method="POST">
        Kategori: <input type="text" name="kategori_tiket"><br>
        Harga: <input type="text" name="RMharibiasa"><br>
        <input type="submit" name="hantar" value="Hantar>
    </form>
</body>
</html>
