<?php

// For loop
for ($num = 1; $num <= 10; $num += 2) {
    echo "$num \n";
}

// while loop
$num = 2;

while ($num < 12) {
    $num += 2;
    echo $num, "\n";
}

// while loop
$num = 2;

do {
    $num += 2;
    echo $num, "\n";
} while ($num < 12);



// foreach loop  
// foreach ($array as $value) {
//    code to be executed
// }
$arr = array(10, 20, 30, 40, 50, 60);
foreach ($arr as $val) {
    echo "$val \n";
}

// The syntax for associative arrays:
$assArray = array(
    "name" => "Eric",
    "email" => "Eric@gmail.com",
    "age" => 22,
    "gender" => "male"
);
foreach ($assArray as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
