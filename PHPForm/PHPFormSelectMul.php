

<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
 * 如果下拉菜单是多选的（ multiple="multiple"），
 * 我们可以通过将设置 select name="q[]" 以数组的方式获取，
 */
$selectMul = isset($_GET['selectMul'])? $_GET['selectMul'] : '';
if(is_array($selectMul)) {
    $sites = array(
            'RUNOOB' => '菜鸟教程: http://www.runoob.com',
            'GOOGLE' => 'Google 搜索: http://www.google.com',
            'TAOBAO' => '淘宝: http://www.taobao.com',
    );
    foreach($selectMul as $val) {
        // PHP_EOL 为常量，用于换行
        echo $sites[$val] . PHP_EOL;
    }
      
} else {
    // action 属性值为空表示提交到当前脚本，
?>
<form action="" method="get"> 
    <select multiple="multiple" name="selectMul[]">
        <option value="">选择一个站点:</option>
        <option value="RUNOOB">Runoob</option>
        <option value="GOOGLE">Google</option>
        <option value="TAOBAO">Taobao</option>
    </select>
    <input type="submit" value="提交">
</form>
<?php
}
?>