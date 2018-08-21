<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * PHP checkbox 复选框可以选择多个值：
 */
$q = isset($_GET['checkbox'])? $_GET['checkbox'] : '';
if(is_array($q)) {
    $sites = array(
            'RUNOOB' => '菜鸟教程: http://www.runoob.com',
            'GOOGLE' => 'Google 搜索: http://www.google.com',
            'TAOBAO' => '淘宝: http://www.taobao.com',
    );
    foreach($q as $val) {
        // PHP_EOL 为常量，用于换行
        echo $sites[$val]; 
        echo '<br><br>';
    }
      
} else {
?>
<form action="" method="get"> 
    <input type="checkbox" name="checkbox[]" value="RUNOOB"> Runoob<br> 
    <input type="checkbox" name="checkbox[]" value="GOOGLE"> Google<br> 
    <input type="checkbox" name="checkbox[]" value="TAOBAO"> Taobao<br>
    <input type="submit" value="提交">
</form>
<?php
}




?>
