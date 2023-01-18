<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
//SESSION
// Good to use for sensitive information
// Session exists as long as the browser is open

session_start();

//storing information
$_SESSION["Name"] = "Dary";
$SESSION["Age"] = 24;

echo "Hello " . $_SESSION["Name"];
session_destroy();
?>
    
</body>
</html>