<?php
$name = $_POST['name'];
$id = $_POST['id'];
$email = $_POST['email'];

$host = "localhost";
$user = "root";
$pass = "";
$db = "school";

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_error){
    echo "Unable to connect!";
}
$sql = "UPDATE students SET name='$name', email = '$email' WHERE id = '$id'";

$result = $conn->query($sql);

if($result == TRUE){
    echo "Successfully updated!";
}
else{
    echo "Error!";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button>
        <a href="show.php">
            Back
        </a>
    </button>
</body>
</html>