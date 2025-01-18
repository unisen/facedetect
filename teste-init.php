<?php


// Save the image to a file


// Call the Python script for face recognition
$output = shell_exec("php teste.php?img1=tchunai.jpg&img2=know_face.jpg");

//header('Content-Type: application/json');
//echo json_encode($output);

echo $output;
?>