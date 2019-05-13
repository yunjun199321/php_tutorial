<?php
// without return type
function writeMsg($num1, $num2)
{
    return $num1 + $num2;
}

echo writeMsg(1, 2.3);
echo "\n";

// with return type
function calculate($num1, $num2): int
{
    return $num1 + $num2;
}

echo calculate(1.2, 2.3);
echo "\n";

// function with default parameter
function cal2($num1, $num2 = 100)
{
    return $num1 + $num2;
}

echo cal2(1);
echo "\n";

function loop()
{
    //indexed array
    $colors = array("red", "green", "orange", "blue");

    //associative array
    $ages = array("peter"=>"35", "Ben"=>"23", "Joe"=>"43");
    /*
     * or
        $age['Peter'] = "35";
        $age['Ben'] = "37";
        $age['Joe'] = "43";
     */

    // for loop
    for ($i = 0; $i < count($colors); $i++) {
        echo $i. " is ". $colors[$i];
        echo "\n";
    }

    // foreach loop
    foreach ($colors as $color) {
        echo $color;
        echo "\n";
    }

    // foreach loop 2
    foreach ($ages as $index => $age) {
        echo "Key = $index, value = $age";
        echo "\n";
    }
}
loop();

/*
sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key
 */
