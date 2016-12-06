{__NOLAYOUT__}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>跳转提示</title>
    <style type="text/css">
        *{margin:0;padding:0px;}
        #bacimg{height: 669px;width: 1366px;background: url("../../static/img/20.jpg") no-repeat;}
        #bacimg #regr{background:#F5F5F5;width: 400px;height: 380px;position: absolute;  top:50%;left:50%;margin-left: -200px;margin-top: -150px;border-radius: 7px;}
        #bacimg #regr .form-group{margin-top: 10px;}
        #bacimg #regr .form-group #exampleInputEmail1{height: 30px;width: 260px;margin-left: 70px;}
        #bacimg #regr button{height: 40px;width: 260px;margin-left: 70px;font-size: 16px;font-weight: bold;background: #FFA800;line-height: 30px;
    color: #fff;}
        #bacimg #regr .reg1{margin-left: 70px;font-size: 13px;margin-top: 15px;}
        #bacimg #regr .reg2{margin-left: 180px;font-size: 13px;margin-top: 12px;border-radius:21px;}
        #bacimg #regr .reg2 img{border-radius:21px;}
        #bacimg #regr .reg3{margin-left: 140px;font-size: 13px;margin-top: 5px;}
        #bacimg #regr #div1{height: 20px;font-size: 12px;color: red;margin-left: 140px;margin-top: 5px;}
    </style>
</head>
<body>
    <div class="system-message" id="bacimg">
        <div id="regr">
            <?php switch ($code) {?>
            <?php case 1:?>
            <h1>:)</h1>
            <p class="success"><?php echo(strip_tags($msg));?></p>
            <?php break;?>
            <?php case 0:?>
            <h1>:(</h1>
            <p class="error"><?php echo(strip_tags($msg));?></p>
            <?php break;?>
            <?php } ?>
            <p class="detail"></p>
            <p class="jump">
                页面自动 <a id="href" href="<?php echo($url);?>">跳转</a> 等待时间： <b id="wait"><?php echo($wait);?></b>
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
