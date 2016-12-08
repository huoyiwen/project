{__NOLAYOUT__}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>跳转提示</title>
    <style type="text/css">
        *{margin:0;padding:0px;}
 
        #bacimg{height: 669px;width: 1366px;background: url("../../static/img/30.jpg") no-repeat;}
        #bacimg #regr{background:#F5F5F5;width: 400px;height: 180px;position: absolute;  top:50%;left:50%;margin-left: -200px;margin-top: -90px;border-radius: 7px;opacity:0.8;}
        #bacimg #regr .success{color:#63A9B3;text-align:center;height:60px;line-height:60px;}
        #bacimg #regr .div1{color:#FFA800;text-align:center;font-size:13px;}
        #bacimg #regr p{color:#FFA800;text-align:center;font-size:15px;}
        #bacimg #regr p b{color:red;text-align:center;font-size:25px;}
    </style>
</head>
<body>
    <div class="system-message" id="bacimg">
        <div id="regr">
            <?php switch ($code) {?>
            <?php case 1:?>
            <h2 class="success"><?php echo(strip_tags($msg));?></h2>
                    <div class="div1"></div>
            <?php break;?>
            <?php case 0:?>
            <h1>:(</h1>
            <p class="error"><?php echo(strip_tags($msg));?></p>
            <?php break;?>
            <?php } ?>
            <p class="detail"></p>
            <p class="jump">
                页面自动 <a id="href" href="<?php echo($url);?>">跳转</a> 等待时间为： <b id="wait"><?php echo($wait);?></b>
            </p>
        </div>

    </div>
    <script type="text/javascript">
        (function(){
            var wait = document.getElementById('wait'),
                href = document.getElementById('href').href;
            var interval = setInterval(function(){
                var time = --wait.innerHTML;
                if(time <= 0) {
                    location.href = href;
                    clearInterval(interval);
                };
            }, 1000);
        })();
    </script>
</body>
</html>
