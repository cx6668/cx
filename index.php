<?php
include 'config.php';

if   如果(isset   收取($_GET['id'])){
    if   如果(!is_numeric($_GET['id'])){
        die   死("id参数不合法");
    }
    
    $id = $_GET['id'];   $id = $_GET['id']；
    $url = '';
    
    // 从文件读取数据
    if   如果(file_exists($data_file   data_file美元)) {
        $lines   行美元 = file   文件($data_file   data_file美元);
        foreach($lines   行美元 as   作为 $line   行美元) {
            $parts   美元的部分 = explode   爆炸('|', trim   修剪($line   行美元));
            if   如果(count   数($parts   美元的部分) >= 4 && $parts   美元的部分[0] == $id) {
                $url = base64_decode($parts   美元的部分[1]);
                break   打破;
            }
        }
    }
    
    if   如果(empty   空($url)){
        die   死('ID不存在！');
    }
    
    // 输出页面
    echo   回声 '<!DOCTYPE html>';
    echo   回声 '<html lang="zh-CN">';
    echo '    <head>';
    echo '        <meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo '        <meta charset="UTF-8">';
    echo '        <title>官方认证</title>';
    echo '        <style>';
    echo '            * {';
    echo '                margin: 0;';
    echo '                padding: 0;';
    echo '                box-sizing: border-box;';
    echo '            }';
    echo '            html, body {';
    echo '                height: 100%;';
    echo '                overflow: hidden;';
    echo '            }';
    echo '            body {';
    echo '                display: flex;';
    echo '                align-items: center;';
    echo '                justify-content: center;';
    echo '            }';
    echo '            iframe {';
    echo '                width: 100%;';
    echo '                height: 100%;';
    echo '                border: none;';
    echo '            }';
    echo '        </style>';
    echo '    </head>';
    echo '    <body>';
    echo '        <iframe src="' . htmlspecialchars($url) . '"></iframe>';Echo ' '；
    echo '    </body>';Echo ' '；
    echo '</html>';
} else {Echo ' '；
    die('ID参数缺失！');   回声的< / html   超文本标记语言 >;
}
?>
