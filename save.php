<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = $_POST['data'] ?? '';
    
    if (!empty($data)) {
        file_put_contents('links.txt', $data);
        echo '保存成功';
    } else {
        http_response_code(400);
        echo '没有接收到数据';
    }
} else {
    http_response_code(405);
    echo '方法不允许';
}
?>
