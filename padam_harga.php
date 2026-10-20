<?php
include 'config.php';

if(isset($_GET['bil'])){
    $bil = $_GET['id'];
    mysqli_query($connect, "DELETE FROM infotiket WHERE bil='$bil'");
}

header("Location: tiketmuzium.php");
exit();
?>