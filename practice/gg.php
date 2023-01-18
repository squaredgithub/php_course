<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
//breaks
echo nl2br("this is a line \r\n break <br>");
echo "like this"."<br>";
echo "like this";

//variables starts with a letter or underscore
$var = "Him";
$Var = "you";
$_age = 22;
$_6age = 132;
//arrays
$cars1 = "BMW";
$cars2 = "Audi";
$cars3 = "Mercedes";

$cars = array("BMW", "Audi", "Mercedes");
echo $cars[2];

echo "<br>";

$myCar = array("Audi", 2015, 75.304);
print_r($myCar);

$cars2 = array("Volve", "Chevy", "Volkswagen");
echo "<br>";
print_r($cars);
//asociative arrays
$cars = array("Audi" => 50.500, "BMW" => 40.700, "Mercedes" => 60.300);
foreach ($cars as $key => $value) {
    echo "My" . $key . "has" . $value . " mileage <br>";
}


//multidimensional array
$cars = array(
    "Expensive" => array("Audi", "Mercedes"),
    "Inexpensive" => array("Ford", "Toyota")
);
echo $cars["Inexpensive"][1];

//Exercise
$price = 9876;
$vat = 0.56;

$totalPrice = ($price * $vat) +$price;

echo "Price: " . $price . "<br>";
echo "Vat: " . $vat . "<br>";
echo "Total price: " . $totalPrice . "<br>";


//expenses
$expenses = array(40,70,20,85,40);
$totalAmount = 0;
$amountOfExpenses = 0;

foreach ($expenses as $expense) {
    $totalAmount= $expense + $totalAmount;
    $amountOfExpenses = $amountOfExpenses + 1;
}
echo "My " . $amountOfExpenses . " biggest expense were " . $totalAmount;


//functions

$str = "My name is Francis, I am 21 years old and I live in Kenya.... ";

$punctuation = 0;

function searchText ($str, $punctuation) {
    for ($i = 0; $i < strlen($str);$i++) {
        if ($str($i)== ".") {
            $punctuation++;
        }
    }
    echo "The text has " . $punctuation . " punctuation";
}

?>  

</body>
</html>