<?php
$id = $_POST['id'];

$host = "localhost";
$user = "root";
$pass = "";
$db = "school";

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_error){
    echo "Connection Error!";
}

$sql = "DELETE FROM students WHERE id = '$id'";

$result = $conn->query($sql);

if($result == TRUE){
    echo "Deleted Successfully!";
}
else{
    echo "Delete Error!";
}

$conn->close();

echo "<a href=\"show.php\">Home</a>"

?>