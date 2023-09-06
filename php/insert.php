<?php
$name = $_POST['name'];
$cgpa = $_POST['cgpa'];
$email = $_POST['email'];

$host = "localhost";
$user = "root";
$pass = "";
$db = "school";

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_error){
    die("Connection Error!". $conn->connect_error);
}

$sql = "INSERT INTO students (name, cgpa, email) VALUES ('$name', '$cgpa', '$email')";

$result = $conn->query($sql);

if($result == TRUE){
    echo "Data inserted successfully";
}
else{
    echo "Error in data insertion" . $sql;
}

$conn->close();

?>