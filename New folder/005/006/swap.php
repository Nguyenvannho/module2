<?php
// $books = ['van','su','dia'];
// $t = $books[1];
// $books[1] = $books[0];
// $books[0] = $t;

// echo '<pre>';
// print_r($books);
// die();

$A = [5, 8, 6, 34, 22, 40, 11, 18, 23, 44];
$n = count($A);
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = $n - 1; $j > $i; $j--) {
        if ($A[$j] < $A[$j - 1]) {
            $t = $A[$j - 1];
            $A[$j - 1] = $A[$j];
            $A[$j] = $t;
        }
    }
}
echo '<pre>';
print_r($A);
die();
