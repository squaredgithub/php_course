<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $name = $_FILES['file']['name'];//find file name
    $tmp_name = $_FILES['file']['tmp_name'];//Temp loc
    $size = $_FILES['file']['size'];//find file size
    $error = $_FILES['file']['error'];//find file errors


    //Explode from punctuation   mark
    $tempExtension = explode('.', $name);

    $fileExtension = strtolower(end($tempExtension));

    //Allowed extensions
    $isAllowed = array('jpg', 'jpeg', 'png', 'pdf');

    //0= no error -1 = error
    if (in_array($fileExtension, $isAllowed)) {
        if ($error === 0) {
            if ($size < 80000) {
                $newFileName = uniqid('', true) . "." . $fileExtension;
                $fileDestination = "uploads/" .$newFileName;
                move_uploaded_file($tmp_name, $fileDestination);
                header("Location: files.php?uploaded success");
            }else {
                echo "Sorry, your file size is too big!";
            }
        }else {
            echo "Sorry, there was an error! please try again";
        }
    }else {
        echo "Sorry, file not acceptable!!";
    }
}


?>