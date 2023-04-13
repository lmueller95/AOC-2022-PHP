<?php
ini_set('error_reporting', 0);
$data = file_get_contents('input.txt');
$input = explode("\n", $data);
$elf_arr = [];

//$input = array_map('intval', $input);

$i = 0;
foreach ($input as $elf => $row){
    if ($row == "") $i++;
    $elf_arr[$i] += (int) $row;
}

echo max($elf_arr) . PHP_EOL;

rsort($elf_arr);

echo ($elf_arr[0] + $elf_arr[1] + $elf_arr[2]);