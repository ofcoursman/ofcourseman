<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php



$maturita = [
    [
        'color'=> '#696969',
        'text' => 'prva veta je takato',
        'url' =>'https://www.zilinak.sk/',
        'font-weight' => 200,
        'font-size' => 20,
    ],
    [
        'color'=> '#6b8e23',
        'text' => 'Druha veta je takato',
        'url' => 'https://www.youtube.com/',
        'font-weight' => 600,
        'font-size' => 30,
    ],
    [
        'color'=> '#afeeee',
        'text' => 'Tretia veta je takato',
        'url' => 'https://soaza.edupage.org/',
        'font-weight' => 800,
        'font-size' => 16,
    ],
    [
        'color'=> '#ff4500',
        'text' => 'stvrta veta je takato',
        'url' => 'https://www.learn2code.sk/prihlasenie',
        'font-weight' => 200,
        'font-size' => 25,
    ],
    [
        'color'=> '#ff4538',
        'text' => 'Piata veta je takato',
        'url' => 'https://www.sme.sk/',
        'font-weight' => 800,
        'font-size' => 18,
    ],



];

foreach ($maturita as $item) {
echo '<a href="' . $item['url'] .
    '" style="color:' . $item['color'] .
    '; font-weight:' . $item['font-weight'] .
    '; font-size:' . $item['font-size'] .
    'px;">' . $item['text'] . '</a></p>';

}?>

<?php

$num = 7;
$factorial = 1;
$calculation = '';
for ($x = $num; $x >= 1; $x--) {
    $factorial = $factorial * $x;
    $calculation.= ($x != 1 ? " * " : "") . $x;
}
echo "$calculation";
echo "<br>";
echo "7 * 6 * 5 * 4 * 3 * 2 * 1";
echo "<br>";
echo "Factorial of $num is $factorial";
echo "<br>";
echo "<br>";

?>





<?php

$input = array(
    "https://www.learn2code.sk/",
    "https://www.centrum.sk/"
);

foreach ($input as $link) {
    $url = preg_replace("#^(https?://)?(www\.)?|\.sk/$#", "", $link);
    echo "<a href=\"$link\">$url</a><br>";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>


</body>
</html>