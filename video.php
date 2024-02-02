<?php
header('Access-Control-Allow-Origin: *');
$file = $_GET['f']; // 获取 URL 中的参数值

if ($file) {
    $filePath = $file . '.txt'; // 根据参数值构建文件路径
    if (file_exists($filePath)) {
        $content = file_get_contents($filePath);
        echo $content;
    } else {
        echo "文件不存在";
    }
} else {
    echo "参数缺失";
}
?>