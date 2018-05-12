<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-size: 20px;
            font-family: monospace;
            line-height: 1.5;
        }
    </style>
</head>
<body>

<?php
$variable = 8;
echo "Value is now $variable.";
echo "<br>";
$variable += 2;
echo "Add 2. Value is now $variable.";
echo "<br>";
$variable -= 4;
echo "Subtract 4. Value is now $variable.";
echo "<br>";
$variable *= 5;
echo "Multiply by 5. Value is now $variable.";
echo "<br>";
$variable /= 3;
echo "Divide by 3. Value is now $variable.";
echo "<br>";
$variable ++;
echo "Increment value by one. Value is now $variable.";
echo "<br>";
$variable --;
echo "Decrement value by one. Value is now $variable.";
?>

</body>
</html>