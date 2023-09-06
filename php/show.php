<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "school";

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_error){
    die("Connection Error! ". $conn->connect_error);
}

$sql = "SELECT `id`, `name`, `cgpa`, `email` FROM students";

$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "<table border = 1>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>CGPA</th>";
    echo "<th>Email</th>";
    while($row = $result->fetch_assoc()){
        echo "<tr>";
            echo "<td>$row[id]</td>";
            echo "<td>$row[name]</td>";
            echo "<td>$row[cgpa]</td>";
            echo "<td>$row[email]</td>";
        echo "</tr>";

    }
    echo "</table>";
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
    <form action="update.php" method="post">
        <input type="text" name="id" id="" placeholder="Please input the ID">
        <input type="text" name="email" id="" placeholder="Please input the email">
        <input type="text" name="name" id="" placeholder="Please enter the name">
        <button type="submit">Submit</button>
    </form>

    <br><br>

    <form action="delete.php" method="post">
        <input type="text" name="id" id="">
        <input type="submit" value="Delete">
    </form>
</body>
</html>