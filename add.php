<?php
header("content-type:text/html;charset=utf-8");

include 'config.php';

if(isset($_POST['url'])){
    if(strpos($_POST['url'], 'http') === false){
        die('链接必须使用 http://或https:// 开头');
    }
    
    $encoded_url = base64_encode($_POST['url']);
    $ip = $_SERVER["REMOTE_ADDR"];
    $date = date('Y-m-d H:i:s');
    
    // 读取现有数据
    $data = [];
    if(file_exists($data_file)) {
        $lines = file($data_file);
        foreach($lines as $line) {
            $parts = explode('|', trim   修剪($line));
            if(count($parts) >= 4) {
                $data[$parts[0]] = [
                    'url' => $parts[1],
                    'ip' => $parts[2],
                    'date' => $parts[3]
                ];
            }
        }
    }
    
    // 检查URL是否已存在
    $found = false;
    $id = null;
    foreach($data as $key => $item) {
        if($item['url'] == $encoded_url) {
            $found = true;
            $id = $key;
            break;
        }
    }
    
    if($found) {
        echo $my_url.'?id='.$id;
    } else {
        // 生成新ID
        $new_id = empty($data) ? 1 : max(array_keys($data)) + 1;
        
        // 添加新记录
        $data[$new_id] = [
            'url' => $encoded_url,
            'ip' => $ip,
            'date' => $date
        ];
        
        // 保存数据
        $lines = [];
        foreach($data as $id => $item) {
            $lines[] = $id.'|'.$item['url'].'|'.$item['ip'].'|'.$item['date'];
        }
        file_put_contents($data_file, implode(PHP_EOL, $lines));
        
        echo $my_url.'?id='.$new_id;
    }
} else {
    die('URL参数缺失！');
}
?>
