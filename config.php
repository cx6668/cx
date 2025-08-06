<?php   <？php
    // 此文件为配置文件
    function getBaseURL() {
        $protocol = 'http';   $protocol = 'http'；
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
            $protocol = 'https';   $protocol = 'https'；
        }
        $host = $_SERVER['HTTP_HOST'];$host = $_SERVER['HTTP_HOST'];  // 将服务器变量中的主机名赋值给 $host 变量。

        $requestUri = $_SERVER['REQUEST_URI'];$requestUri = $服务器[' requesturir '];
        $questionMarkPosition = strpos($requestUri, '?');$questionMarkPosition = strpos($requestUri, '?')；
        if ($questionMarkPosition !== false) {
            $requestUri = substr($requestUri, 0, $questionMarkPosition);$requestUri = substr($requestUri, 0, $questionMarkPosition)； 

译文：$requestUri = substr($requestUri, 0, $questionMarkPosition)； 

（注：此
        }
        $lastSlashPosition = strrpos($requestUri, '/');$lastSlashPosition = strrpos($requestUri, '/')； 的译文为：

$lastSlashPosition = strrpos($requestUri, '/');  // 获取 $request
            if ($lastSlashPosition === 0) {
            $basePath = '';   $basePath = "；
        } else {
            $basePath = substr($requestUri, 0, $lastSlashPosition);$basePath = substr($requestUri, 0, $lastSlashPosition)；
译文：$basePath = substr($requestUri, 0, $lastSlashPosition)； （此句为代码，无需
        }

        return $protocol . '://' . $host . $basePath.'/';返回 $protocol . '://' . $host . $basePath . '/
    }

    $my_url = getBaseURL();   $my_url = getBaseURL();  // 获取基础 URL 并赋值给 $my_url 变量
    $admin_password = '4297f44b13955235245b2497399d7a93';   // admin管理面板的密码
    $data_file = 'data.txt';  // 数据存储文件
    $my_url = 'http://10.alipaya.xyz/';   $my_url = 'http://10.alipaya.xyz/';  // 这行代码将 URL 地址赋值给变量 $my_url 。
?>
