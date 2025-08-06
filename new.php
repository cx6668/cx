<?php header("content-type:text/html;charset=utf-8"); ?>

<html>
<head>

  <title>短链接</title>
  <script src="./js/jquery.js"></script>
  <script src="./js/sw.js"></script>
  <script src="./js/cookie.js"></script>
  
  <link rel="stylesheet" href="main.css" />
  <link rel="stylesheet" href="grid.css" />

</head>
<body>
  <script src="./js/main.js"></script>
  
  <button id="dark" class="btn" style="position:absolute;bottom:0;right:0;font-size:10px;">暗黑模式</button>
  
  <center>
    
    <div class="card">
      <h1 style="margin-bottom:20px;">意云短链接系统</h1>
    
      <p style="margin-bottom:20px;">
        长链接：<input type='text' id='link' value='http://' />
      </p>
    
      <button id='start' style="margin-bottom:20px;" class="color-blue-full">生成短链接</button>
    
      <p id='message'>您的短链接：http://请先生成短链接.com</p>
       <!-- 你偷你妈呢，有什么好看的 -->
      <p style="margin-top:20px;">
          二级域名前缀可改为单数字或英文-例如http://.这里.xx.cn
          </p>
          <p style="margin-top:20px;">
              支付宝无提示，不会用别怪我别烦我
              </p>
    </div>
  </center>
</body>
</html>