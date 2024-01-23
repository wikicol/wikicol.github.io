<?php
// 读取txt文件中的数字
$file = 'count.txt';
$handle = fopen($file, 'r');
$count = fread($handle, filesize($file));
fclose($handle);

// 将数字加一
$count = intval($count) + 1;

// 更新txt文件中的数字
$handle = fopen($file, 'w');
fwrite($handle, $count);
fclose($handle);

// 返回txt文件中的数值
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
echo json_encode(['count' => $count]);
?>