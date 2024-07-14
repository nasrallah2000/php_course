<!-- <?php $userName = "Nasrallah" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $userName; ?></title>
</head>

<body>

    <div>Welcome <b> <?php echo $userName ?></b> in The Site</div>
    <div><b> <?php echo $userName ?></b> You Scored 1000 points</div>
    <div>
        <?php include ('score.php'); ?>
    </div>
</body>

</html>  -->


<!-- //////////////////////////// -->
<!-- // Variable Variable -->

<?php

// $a = "Nasrallah";
// $$a = "Alsaifi"; // That mean value of $a = Nasrallah = Alsaifi => $Nasrallah = "Alsaifi; 
// $$$a = "Hany";
// echo "$a";
// echo"<br>";
// echo $$a;
// echo"<br>";
// echo $$$a;


//////////////////////
/// Assign by value and reference

//first by value

$a = "Nasrallah";
$b = $a;
$b = "Alsaifi";

echo $a;
echo "<br>";
echo $b;

// Second by reference

echo "<br>";
echo "//////////";
echo "<br>";
$name = "Ali";
$n = &$name;

$n = "Abdallah";
echo $name ;
echo "<br>";
echo $n;












