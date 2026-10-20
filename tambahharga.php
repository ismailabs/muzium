<?php
include 'config.php';

if(isset($_POST['hantar'])){
    $kategori = $_POST['kategori'];
    $harga    = $_POST['RMharibiasa'];

    $query = mysqli_query($connect, "INSERT INTO infotiket (kategori, RMharibiasa) VALUES ('$kategori', '$harga'");

    if($query){
        header("Location: tiketmuzium.php");
        exit();
    }
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