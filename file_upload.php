<?php

$file_path = $_FILES['content']['tmp_name'];
$file_name = $_FILES['content']['name'];
$server_path = "uploads/" . $file_name;

$only_name = explode('.', $file_name);      //to get only the name, not extension

$full_name = implode('.', $only_name);      // jei array er elements join, give that 
echo $full_name[3] . "<br>";                // still an array, each character can print
echo $full_name . "<br>";                   // full name of the file print
echo $only_name[0] . "<br>";
echo $only_name[1] . "<br>";


$arr = ["cat", "mouse", "dog", "horse"];    // implode function joins the elements of the given array
$animals = implode('/', $arr);
echo $animals . "<br>";



if(move_uploaded_file($file_path, $server_path)){
    echo $only_name[0] . " has been uploaded successfully!";
}
else{
    echo "Unsuccessfull upload!";
}

?>