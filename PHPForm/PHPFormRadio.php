<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * PHP 单选按钮表单中 name 属性的值是一致的，value 值是不同的，代码如下所示：
 */
$radio = isset($_GET['radio'])? htmlspecialchars($_GET['radio']) : '';
if($radio) {
        if($radio =='RUNOOB') {
                echo '菜鸟教程<br>http://www.runoob.com';
        } else if($radio =='GOOGLE') {
                echo 'Google 搜索<br>http://www.google.com';
        } else if($radio =='TAOBAO') {
                echo '淘宝<br>http://www.taobao.com';
        }
} else {
?>
<form action="" method="get"> 
    <input type="radio" name="radio" value="RUNOOB" />Runoob
    <input type="radio" name="radio" value="GOOGLE" />Google
    <input type="radio" name="radio" value="TAOBAO" />Taobao
    <input type="submit" value="提交">
</form>
<?php
}
?>