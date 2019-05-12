<?php
ECHO "keyword, class, functions are NOT CASE SENSITIVE\n";
echo "echo and ECHO are both legal\n";
echo "Variables are case sensitive\n";

// output variables
$txt = "third example";
echo "I wrote $txt!\n";

// or combine twe string
echo "First string "."plus "."second string\n";
echo "I wrote ".$txt."!!!\n";

$num1 = 5;
$num2 = 10;
echo $num1 + $num2."\n";

//outside function: GLOBAL scope
//inside function: LOCAL scope
//参数只能在当前领域生效，global var 不能在其他方法里面使用，除非使用global 关键字在方法内，才能使用全局变量。
$x = 5;
$y = 10;

function myTest() {
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y."\n"; // outputs 15

//全部变量array。
function secondText() {
    static $staticVar = 0;
    $GLOBALS['x'] = $GLOBALS['y'] = 5;
    $staticVar ++;
    echo $staticVar."\n";
}
secondText();
echo $y."\n";