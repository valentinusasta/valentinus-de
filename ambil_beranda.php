<?php

$conn = mysqli_connect(
"localhost",
"root",
"",
"strive_db"
);

$sql = "SELECT * FROM beranda LIMIT 1";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    echo json_encode(
        mysqli_fetch_assoc($result)
    );
}else{
    echo json_encode([
        "profile_pic"=>"Profile.png",
        "minggu_1"=>0,
        "minggu_2"=>0,
        "minggu_3"=>0,
        "minggu_4"=>0,
        "completed"=>0
    ]);
}

?>