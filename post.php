
<!DOCTYPE html>
<html>
<body>
<?php
$myFile = "todo.txt";
// $title = $_POST['title'];
// $description = $_POST['description'];
$date = date("d-m-y : H:i:sa", time());
echo $date;


// .get file
$jsondata = (file_get_contents($myFile));

// .decode the file containing json to array
// push the $_post to the array
$arr_data = json_decode($jsondata, true);
$arr_data[] = $_POST;

// encode the file and save
$json = json_encode($arr_data, JSON_PRETTY_PRINT);

if (file_put_contents($myFile, $json)) {
    var_dump($arr_data);
    echo "Data successfully saved.";
}
else
    echo "error";
?>

<!-- back to main page -->
<button onclick="goBack()">Back</button>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>

</body>
</html>




