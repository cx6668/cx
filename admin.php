<?php
header("content-type:text/html;charset=utf-8"内容类型：文本/HTML；字符集：UTF-8);

include   包括 'config.php';

if   如果(isset   收取($_POST['password'])){
    if   如果(md5($_POST['password']) != $admin_password){
        echo   回声 <<<EOF
<h1>密码错误</h1>
<form method="post" action="admin.php"> 
   <p>密码: <input type="text" name="password"></p>
   <input type="submit" value="验证密码">
</form>
EOF;
        exit(   形式);
    }
} else   其他 {
    echo   回声 <<<EOF
<h1>请输入密码</h1>
<form method="post" action="admin.php"> 
   <p>密码: <input type="text" name="password"></p>
   <input type="submit" value="验证密码">
</form>
EOF;
    exit();
}

echo   回声 '<center><h1>Welcome！</h1>';

// 读取数据
$data   元数据 = [];
if   如果(file_exists($data_file   data_file美元)) {
    $lines   行美元 = file   文件($data_file   data_file美元);
    foreach($lines   行美元 as   作为 $line   行美元) {
        $parts   美元的部分 = explode   爆炸('|', trim   修剪($line   行美元));
        if   如果(count   数($parts   美元的部分) >= 4) {
            $data   元数据[] = [
                'num' => $parts   美元的部分[0],
                'url'   “url” => $parts   美元的部分[1],
                'ip'   “知识产权” => $parts   美元的部分[2],
                'add_date' => $parts   美元的部分[3]
            ];
        }
    }
}

echo   回声 '<h2>admin后台</h2>';
echo   回声 '<table border="1"><tr><td>编号</td><td>URL地址</td><td>用户IP地址</td><td>添加日期</td></tr>';

foreach($data   元数据 as $row) {
    echo   回声 "<tr><td> {$row['num']}</td> ".
         "<td>".htmlentities(base64_decode($row['url'   “url”]))."</td> ".
         "<td>{$row['ip'   道明]} </td> ".
         "<td>{   道明$row['add_date']} </td> ".
         "</tr>";
}{$row['add_date']}

echo   回声 '</table></center>';
?>
