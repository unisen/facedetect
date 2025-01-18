<?php
// Receive JSON input
$data = json_decode(file_get_contents('php://input'), true);
$image_data = $data['image'];

// Remove the "data:image/png;base64," part from the image data
$image_data = str_replace('data:image/png;base64,', '', $image_data);
$image_data = str_replace(' ', '+', $image_data);
$image_data = base64_decode($image_data);

// Save the image to a file
$filename = 'captured_image.png';
file_put_contents($filename, $image_data);

// Call the Python script for face recognition
$output = shell_exec(escapeshellcmd("python recognize_face.py known_face.jpg $filename"));
var_dump($output);
echo "Recognition Result: " . $output;
?>