<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

if (isset($_POST['submit'])) {
    $myFile = fopen("uploads/file.txt", "w");

    $txt = "my age is " . $_POST['age'] . "\n";

    fwrite($myFile, $txt);

    fclose($myFile);
}


?>

<form action="fileput.php" method="post">
    <input type="text" name= "age">
    <button type="submit">SUBMIT</button>
</form>
    
</body>
</html>