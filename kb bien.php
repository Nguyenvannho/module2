<!-- <?php
$txt = 'Hello World';
$x = 5;
$y = 10.5;
echo $x + $y;

$txt = "w3School.com";
echo "I love $txt!";
$txt = "w3School.com";
echo "I love " . $txt."!";
?> -->
<?php
$x = 5;
$y = 10;
function myTest(){
    // global $x,  $y;
    // $y = $x + $y;
    $GLOBALS['y'] = $GLOBALS['x'] + $Globasly['y'];

}
myTest();
echo $y; /* outputs 15 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>