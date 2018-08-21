<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
 * 以下实例我们设置了下拉菜单三个选项，表单使用 GET 方式获取数据，
 * action 属性值为空表示提交到当前脚本，
 * 我们可以通过 select 的 name 属性获取下拉菜单的值：
 */
$select = isset($_GET['select'])? htmlspecialchars($_GET['select']) : '';
if($select) {
        if($select =='RUNOOB') {
                echo '菜鸟教程<br>http://www.runoob.com';
        } else if($select =='GOOGLE') {
                echo 'Google 搜索<br>http://www.google.com';
        } else if($select =='TAOBAO') {
                echo '淘宝<br>http://www.taobao.com';
        }
} else {
?>
<form action="" method="get"> 
    <select name="select">
        <option value="">选择一个站点:</option>
        <option value="RUNOOB">Runoob</option>
        <option value="GOOGLE">Google</option>
        <option value="TAOBAO">Taobao</option>
    </select>
    <input type="submit" value="提交"></form>
<?php
}
?>