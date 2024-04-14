<?php
$biodata = [
    "nama" => "danu",
    "pekerjaan" => "web developer",
    "pendidikan" => "S1",
    "umur"  => "19",
    "nilai" => "a",
    "hobi" => [
        "musik", "memasak", "main roblox"
    ]
];
foreach ($biodata as $key => $value) {
    if ($key == "hobi") {
        echo "hobi:" . PHP_EOL;
        $a = 1;
        foreach ($value as $hobi) {
            echo $a . ". " . $hobi . PHP_EOL;
            $a++;
        }
    } else {
        echo $key . ':' . $value . PHP_EOL;
}}