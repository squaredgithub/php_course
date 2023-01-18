<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
//$_FILES
//How to upload files
//1. Upload it to the root
//2. Directly to the database

//enctype="multipat/form-data
//specifies how the form data should be encoded

echo $name = $_FILES['file']['name']."<br>";
echo $type = $_FILES['file']['type']."<br>";
echo $tmp_location = $_FILES['file']['tmp_name'] . "<br>";
echo $error = $_FILES['file']['error'] . "<br>";


?>

<form action="file.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit">SUBMIT</button>
</form>
    
</body>
</html>