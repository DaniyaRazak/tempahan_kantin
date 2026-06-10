<?php
//sambungan ke database
$conn = mysqli_connect("localhost", "root", "", "tempahan_kantin");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$nama = $_POST['nama'];
$menu = $_POST['menu'];

// Masukkan data dalam table tempahan
$tempahan = "INSERT INTO tempahan (id,nama,menu) VALUES ('','$nama','$menu')";
$result =mysqli_query($conn,$tempahan);

echo "<script>
    alert('TEMPAHAN BERJAYA!')
    window.location='index.php';
    </script>"

?>