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
    
        <input type="submit" value="Submit"> <br><br>
    </form>

<?php
    class Mahasiswa {
        private $nim;      //atribut
        private $nama;

        public                             //method untuk mengatur data mahasiswa
        function setData($nim, $nama) {
            $this->nim = $nim;
            $this->nama = $nama;
        }

        public
        function tampilInfo() {
            echo "NIM : " . $this->nim . "<br>";      //method menampillkan info
            echo "Nama : " . $this->nama . "<br>";
        }
    }

    //cek form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mahasiswa = new Mahasiswa();

        $nim = $_POST["nim"];       //mengambil data dari form
        $nama = $_POST["nama"];

        $mahasiswa->setData($nim, $nama);

        echo "<b>Menampilkan Data Mahasiswa :</b> <br>"; //menampilkan data
        $mahasiswa->tampilInfo();   
    }
?>
</body>
</html>