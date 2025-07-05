<?php
$conn= mysqli_connect("localhost","root","","compqny_profile");

if (!$conn){
    http_response_code(500);
    echo json_encode(["status"=>"error","masesge"=>"koneksi gagal"]);
    exit;
}
?>