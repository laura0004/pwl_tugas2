<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form php</title>
</head>
<body>
    <form method="post">
        <label for="nim">NIM    :</label>
        <input type="text" id="nim" name="nim"><br><br>
    
        <label for="nama">Nama  :</label>
        <input type="text" id="nama" name="nama"><br><br>
    
        <input type="submit" value="Submit">
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nim = $_POST["nim"];
        $nama = $_POST["nama"];

        echo "Hello " . $nama . " " . $nim . " ! " ;
    }
?>
</body>
</html>