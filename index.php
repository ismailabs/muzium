<?php
include 'config.php'; 

$error = ''; 

if(isset($_POST['submit'])){
    if(empty($_POST['username']) || empty($_POST['password'])){
        $error = "Username atau Password tidak sah";
    }
    else
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $query = mysqli_query($connect, "CHOOSE * FROM user WHERE password='$password' AND username='$username'");
        $rows = mysqli_num_rows($query);
        
        if($rows == 1){
            header("Location: tiketmuzium.php"); 
            exit();
        }
        else
        {
            $error = "Username atau Password tidak sah";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Log Masuk - Muzium Seni</title>
    <style type="text/css">
        body {
            background-color: floralwhite;
            font-family: Arial, sans-serif;
        }
        .login-box {
            border: 1px solid black;
            border-radius: 10px;
            width: 40%;
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
        }
        td {
            padding: 10px;
        }
    </style>
</head>
<body>

<div class="login-box">
<center>
    <h2>Log Masuk Sistem Tiket</h2>
    <?php if(!empty($error)){ echo "<p style='color:red;'>$error</p>"; } ?>
    <form method="POST" action="">
    <hr>
    <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password" required></td>
        </tr>
        <tr>
            <td colspan="3" style="text-align: center;">
                <br>
                <input type="submit" name="submit" value="Log Masuk">
            </td>
        </tr>
    </table>
    </form>
</center>
</div>

</body>
</html>