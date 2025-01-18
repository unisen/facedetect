<?php

var_dump($argv[1]);

if((isset($_GET['img1'])) && isset($_GET['img2'])) {
    $img1 = $_GET['img1'];
    $img2 = $_GET['img2'];

    var_dump($argv);

    //echo $img1 . "<br>" . $img2;
 
    $comando = "python recognize_face.py $img1 $img2";
    // Call the Python script for face recognition

    echo $comando;
    $output = shell_exec($comando);

    //header('Content-Type: application/json');
    //echo json_encode($output);

    echo "<br>Recognition Result: " . $output;
}
else {
    echo "Parâmetros errados, img1 e img2";
}


// Save the image to a file
//$img = 'captured_image.png';


?>