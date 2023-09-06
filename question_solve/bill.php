<?php
$location = $_POST['location'];
$area = $_POST['area'];
$unit = $_POST['unit'];

// echo $location;
// echo $area;
// echo $unit;

$host = "localhost";
$user = "root";
$pass = "";
$db = "electricity_bill";

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_error){
    echo "Connection Error!";
}

$sql;

if($unit > 0 && $unit <=75){
    $sql = "SELECT rate_0_75 FROM bill_info WHERE `location` = '$location' AND `area` = '$area'";
}
elseif($unit > 75 && $unit < 201){
    $sql = "SELECT rate_76_200 FROM bill_info WHERE `location` = '$location' AND `area` = '$area'";
}
elseif($unit > 200 && $unit < 301){
    $sql = "SELECT rate_201_300 FROM bill_info WHERE `location` = '$location' AND `area` = '$area'";
}
else{
    $sql = "SELECT rate_301_above FROM bill_info WHERE `location` = '$location' AND `area` = '$area'";
}

$bill = 0;
$tax = 0;

$result = $conn->query($sql);

if($result == TRUE){
    while($row = $result->fetch_row()){
        // echo $row[0];
        $bill = $unit * $row[0];
    }

    if($location == "Dhaka"){
        $tax = ($bill * 20)/100;
        $bill = $bill + $tax;
    }
    elseif($location == "Chittagong"){
        $tax = ($bill * 15)/100;
        $bill = $bill + $tax;
    }
    else{
        $tax = ($bill * 10)/100;
        $bill = $bill + $tax;
    }

    echo "Your location: ". $location. "<br>";
    echo "Your area: ". $area. "<br>";
    echo "Unit consumed: ". $unit. "<br>";
    echo "<b>Total Bill: ". $bill. " BDT</b><br>";

}
else{
    echo "Error!";
}

$conn->close();

?>