<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<body>
    <img src="muziumbanner.png">
    
    <a href="logout">Logout</a>

    <h2>SENARAI HARGA TIKET</h2>

    <table border="1">
        <tr>
            <th>KATEGORI</th>
            <th>HARGA</th>
        </tr>
        
        <?php
        $result = mysqli_query($connect, "SELECT * FROM table");

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$row['kategori']."</td>";
            echo "<td>".$row['RMharibiasa']."</td>";
            echo "</tr>";
        
        ?>
    </table>
    
    <a href="tambahharga.php">Tambah Harga</a>
</body>
</html>