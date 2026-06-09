<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "strive_db"
);

if (!$conn){
    die("Koneksi gagal");
}

?>