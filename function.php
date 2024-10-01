<?php
function createPassword($len)
{
    $pass = "";

    $alpha = 'ABCDEFGHILMNOPQRSTUVZ';
    $beta = 'abcdefghilmnopqrstuvz';
    $number = '123456789';
    $symbols = '!@#$%^&*()';
    $allDatas = $alpha . $beta . $number . $symbols;

    $firstIndex = 0;
    $lastIndex = strlen($allDatas) - 1;

    for ($i = 0; $i < $len; $i++) {
        $randomNumber = rand($firstIndex, $lastIndex);
        var_dump($allDatas[$randomNumber]);
        $pass .= $allDatas[$randomNumber];
    }
    return $pass;
}

$length = null;
$password = null;

if (isset($_GET["length"])) {
    $length = intval($_GET["length"]);
    if ($length > 3 && $length < 10) {
        $password = createPassword($length);


    }
}

?>