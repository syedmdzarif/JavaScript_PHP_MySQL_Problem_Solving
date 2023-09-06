<?php
$name = $_POST['content_name'];
$school = $_POST['school'];
$file_path = $_FILES['content']['tmp_name'];
$file_name = $name . "." . $school . "." . $_FILES['content']['name'];
$server_path = "uploads/" . $file_name;

$file_type = $_FILES['content']['type'];
$file_size = $_FILES['content']['size'];

// move_uploaded_file($file_path, $server_path);

// echo $file_type . "<br>";
// echo $file_size . "<br>";
// echo $file_name . "<br>";
// echo $file_path . "<br>";
// echo $server_path . "<br>";

$content_name = explode('.', $file_name);
// echo $content_name[3];      // 3 no. index has the pdf

if($file_size <= (1000 * 1024)){
    // if($file_type == "application/pdf"){     //can do with explode or file type
        if($content_name[3] == "pdf"){
        if(move_uploaded_file($file_path, $server_path)){
            echo "Upload successfull!";
        }
        else{
            echo "Upload Error!";
        }
    }
    else{
        echo "Error! File type not PDF";
    }
}
else{
    echo "Error! File too large";
}

?>