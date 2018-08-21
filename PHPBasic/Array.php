<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * 在 PHP 中，有三种类型的数组：
 * 
 * 数值数组 - 带有数字 ID 键的数组
 * 关联数组 - 带有指定的键的数组，每个键关联一个值
 * 多维数组 - 包含一个或多个数组的数组
 */

/*
 * PHP 数值数组
 * 这里有两种创建数值数组的方法：
 * 1. 自动分配 ID 键（ID 键总是从 0 开始）：
 * 2. 人工分配 ID 键：
 */
//自动分配 ID 键
$cars=array("Volvo","BMW","Toyota");

echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

echo '<br>';

//人工分配 ID 键
$cars[2]="Volvo";
$cars[1]="BMW";
$cars[0]="Toyota";
$cars[3]="beike";

echo "I like " . $cars[3] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo '<br>';
echo 'car count is ' . count($cars);

echo '<br>';
$arrlength=count($cars);
 
for($x=0;$x<$arrlength;$x++)
{
    echo $x . ":" . $cars[$x];
    echo "<br>";
}

echo "<br>";
/*
 * PHP 关联数组
 * 关联数组是使用您分配给数组的指定的键的数组。
 * 这里有两种创建关联数组的方法：
 */
//方法一：
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
//方法二：
$age['Peter']="35";
$age['Ben']="37";
$age['Joe']="43";

echo "Peter is " . $age['Peter'] . " years old.";

echo "<br>";
foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}