<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="n" id="">
        <button type="submit">Submit</button>
    </form>

   
</body>
</html>

<?php
    if($_POST['n'] != ''){
        $n = $_POST['n'];
        $i;
        for($i=1; $i<=$n;$i++){
            for($j = 1; $j<=$i; $j++){
            echo $j . " ";
            }
            echo "<br>";
        }
        
    }
?>

