<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <h1>String build in Method</h1>
    <?php
    $string = "Nasrallah Abo Omar";
    echo $string;
    echo "<br>";
    echo "###########";
    echo "<br>";
    echo "1) String Lower Case";
    echo "<br>";
    echo strtolower($string);
    echo "<br>";
    echo "###########";
    echo "<br>";
    echo "2) String Upper Case";
    echo "<br>";
    echo strtoupper($string);
    echo "<br>";
    echo "###########";
    echo "<br>";
    echo "3) String Lenght";
    echo "<br>";
    echo strlen($string);
    echo "<br>";
    echo "###########";
    echo "<br>";
    echo "4) String index";
    echo "<br>";
    echo $string[4] . "\tindex [4]";
    echo "<br>";
    echo "###########";
    echo "<br>";
    echo "5) String replace";
    echo "<br>";
    echo $string;
    echo "<br>";
    echo str_replace("Omar", "Hany", $string) . " => " . "The string after replace";
    echo "<br>";
    echo "###########";
    echo "<br>";
    echo "6) Take Sub of String ";
    echo "<br>";
    echo $string;
    echo "<br>";
    echo substr($string, 10) . " => " . "The string after take sub";
    ?>

</body>

</html>