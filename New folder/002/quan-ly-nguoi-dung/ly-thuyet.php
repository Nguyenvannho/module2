<?php
// json
// javascript object
$string = '
[
    {
        "name":"nho",
        "age":"19"
    },
    {
        "name":"huyen",
        "age":"19"
    },
     {
        "name":"phong",
        "age":"19"
     }
]
';

// chuyen chuoi sang mang
$data = json_decode($string, true);
// tao phan tu moi
$newItem = [
    'name' => 'tam',
    'age' => 20
];
// them phan tuvao mang
array_push($data,$newItem) ;
// chuyen tu mang sao chuoi
$string = json_encode($data);

// luu vao file
file_put_contents('users.json', $string);   
// echo $string;
/*
Array
(
    [name] => nho
    [age] => 19
)
*/
// var_dump($data);

echo "<pre>";
print_r($data);
die();
