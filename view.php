
<?php


// Read JSON file
$myFile = 'todo.txt';
$json = file_get_contents($myFile);
//Decode JSON
$json_data = json_decode($json,true);
//Print data
// var_dump($json_data);
echo '<pre>';
print_r($json_data);

