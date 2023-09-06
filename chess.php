<?php
$size = $_POST['size'];

echo "<table border=1>";
for($i = 0; $i < $size; $i++){
    echo "<tr>";
    for($j = 0; $j < $size; $j++){
        if($i % 2 == 0){
            if($j % 2 == 0){
                echo "<td style=\"background-color: red;\">.</td>";
            }
            else{
                echo "<td style=\"background-color: white;\">.</td>";
            }
        }
        else{
            if($j % 2 == 0){
                echo "<td style=\"background-color: white;\">.</td>";

            }
            else{
                echo "<td style=\"background-color: red;\">.</td>";
                
            }

        }
        
    }
    echo "</tr>";
}
echo "</table>";
?>

