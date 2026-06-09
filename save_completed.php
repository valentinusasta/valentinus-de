<?php

$conn=mysqli_connect(
"localhost",
"root",
"",
"strive_db"
);

$data=json_decode(
file_get_contents(
"php://input"
),
true
);

$minggu=$data["minggu"];
$tanggal=$data["tanggal"];
$list=$data["latihan"];

foreach($list as $item){

$sql="
INSERT INTO beranda
(
minggu,
tanggal,
latihan,
completed
)

VALUES

(
'$minggu',
'$tanggal',
'$item',
1
)
";

mysqli_query(
$conn,
$sql
);

}

echo "ok";

?>