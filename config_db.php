<?php
$host = "localhost";
$username = "workshop2023";
$password = "2023Workshop!";
$database = "workshop_web";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
}else {
    // echo "Koneksi Berhasil";
}

$sql = "SELECT * FROM tb_content";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()) {
        print_r($row['id']." , ".$row['content']." , ".$row['date_create']);
        print_r('<br>');
    }
} else {
    echo "0 results";
}

$conn->close();


?>