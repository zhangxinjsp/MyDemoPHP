
<html>
    <head>
        <meta charset="utf-8">
        <title>菜鸟教程(runoob.com)</title>
    </head>
    <body>
        <div class="leftmenu">
            <?php
//include 'IncludeMenu.php';
            require 'IncludeMenu.php';
            ?>
        </div>
        <h1>欢迎来到我的主页!</h1>
        <p>
            一些文本。
            <?php
            echo '<br>include php file: ' . $include;
            ?>
        </p>

    </body>
</html>