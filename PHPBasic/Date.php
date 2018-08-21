<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/*
 * PHP Date() - 格式化日期
 * date() 函数的第一个必需参数 format 规定了如何格式化日期/时间。
 * 
 * 这里列出了一些可用的字符：
 * 
 * d - 代表月中的天 (01 - 31)
 * m - 代表月 (01 - 12)
 * Y - 代表年 (四位数)
 */

echo date("Y/m/d") . "<br>";
echo date("Y.m.d") . "<br>";
echo date("Y-m-d") . "<br>";

echo '<br>';

echo '星期 --- ---';
echo '<br><br>';
echo date("D") . '<br>D <br>星期中的第几天，<br>文本表示，3个字母 Mon 到 Sun';
echo '<br><br>';
echo date("l") . '<br>l <br>星期几，<br>完整的文本格式 Sunday 到 Saturday';
echo '<br><br>';
echo date("N") . '<br>N <br>ISO-8601 格式数字表示的星期中的第几天（PHP 5.1.0 新加）<br> 1（表示星期一）到 7（表示星期天）';
echo '<br><br>';
echo date("w") . '<br>w <br>星期中的第几天，<br>数字表示 0（表示星期天）到 6（表示星期六）';
echo '<br><br>';
echo date("W") . '<br>W <br>ISO-8601 格式年份中的第几周，<br>每周从星期一开始（PHP 4.1.0 新加的） 例如：42（当年的第 42 周）';
echo '<br><br>';
echo '月 --- ---';
echo '<br><br>';
echo date("d") . '<br>d <br>月份中的第几天 <br>2位数字 01~31';
echo '<br><br>';
echo date("j") . '<br>j <br>月份中的第几天，<br>没有前导零 1 到 31';
echo '<br><br>';
echo date("S") . '<br>S <br>每月天数后面的英文后缀，<br>2 个字符 st，nd，rd 或者 th。可以和 j 一起用';
echo '<br><br>';
echo date("F") . '<br>F <br>月份，<br>完整的文本格式，例如 January 或者 March January 到 December';
echo '<br><br>';
echo date("M") . '<br>m <br>数字表示的月份，<br>有前导零 01 到 12';
echo '<br><br>';
echo date("M") . '<br>M <br>三个字母缩写表示的月份 <br>Jan 到 Dec';
echo '<br><br>';
echo date("b") . '<br>n <br>数字表示的月份，<br>没有前导零 1 到 12';
echo '<br><br>';
echo date("t") . '<br>t <br>给定月份所应有的天数 <br>28 到 31';
echo '<br><br>';
echo '年 --- ---';
echo '<br><br>';
echo date("z") . '<br>z <br>年份中的第几天 <br>0 到 365';
echo '<br><br>';
echo date("L") . '<br>L <br>是否为闰年 <br>如果是闰年为 1，否则为 0';
echo '<br><br>';
echo date("o") . '<br>o <br>ISO-8601 格式年份数字。这和 Y 的值相同，只除了如果 ISO 的星期数（W）属于前一年或下一年，则用那一年。（PHP 5.1.0 新加） <br>Examples: 1999 or 2003';
echo '<br><br>';
echo date("Y") . '<br>Y <br>4 位数字完整表示的年份 <br>例如：1999 或 2003';
echo '<br><br>';
echo date("y") . '<br>y <br>2 位数字表示的年份 <br>例如：99 或 03';
echo '<br><br>';
echo '时间 --- ---';
echo '<br><br>';
echo date("a") . '<br>a <br>小写的上午和下午值 <br>am 或 pm';
echo '<br><br>';
echo date("A") . '<br>A <br>大写的上午和下午值 <br>AM 或 PM';
echo '<br><br>';
echo date("B") . '<br>B <br>Swatch Internet <br>标准时 000 到 999';
echo '<br><br>';
echo date("g") . '<br>g <br>小时，12 小时格式，<br>没有前导零 1 到 12';
echo '<br><br>';
echo date("G") . '<br>G <br>小时，24 小时格式，<br>没有前导零 0 到 23';
echo '<br><br>';
echo date("h") . '<br>h <br>小时，12 小时格式，<br>有前导零 01 到 12';
echo '<br><br>';
echo date("H") . '<br>H <br>小时，24 小时格式，<br>有前导零 00 到 23';
echo '<br><br>';
echo date("i") . '<br>i <br>有前导零的分钟数 <br>00 到 59';
echo '<br><br>';
echo date("s") . '<br>s <br>秒数，<br>有前导零 00 到 59>';
echo '<br><br>';
echo date("u") . '<br>u <br>毫秒 （PHP 5.2.2 新加）。需要注意的是 date() 函数总是返回 000000 因为它只接受 integer 参数， 而 DateTime::format() 才支持毫秒。 <br>示例: 654321';
echo '<br><br>';
echo '时区 --- ---';
echo '<br><br>';
echo date("e") . '<br>e <br>时区标识（PHP 5.1.0 新加） <br>例如：UTC，GMT，Atlantic/Azores';
echo '<br><br>';
echo date("I") . '<br>I <br>是否为夏令时 <br>如果是夏令时为 1，否则为 0';
echo '<br><br>';
echo date("O") . '<br>O <br>与格林威治时间相差的小时数 <br>例如：+0200';
echo '<br><br>';
echo date("P") . '<br>P <br>与格林威治时间（GMT）的差别，小时和分钟之间有冒号分隔（PHP 5.1.3 新加） <br>例如：+02:00';
echo '<br><br>';
echo date("T") . '<br>T <br>本机所在的时区 <br>例如：EST，MDT（【译者注】在 Windows 下为完整文本格式，例如"Eastern Standard Time"，中文版会显示"中国标准时间"）。';
echo '<br><br>';
echo date("Z") . '<br>Z <br>时差偏移量的秒数。UTC 西边的时区偏移量总是负的，UTC 东边的时区偏移量总是正的。 <br>-43200 到 43200';
echo '<br><br>';
echo '完整的日期／时间 --- ---';
echo '<br><br>';
echo date("c") . '<br>c <br>ISO 8601 格式的日期（PHP 5 新加） <br>2004-02-12T15:19:21+00:00';
echo '<br><br>';
echo date("r") . '<br>r <br>RFC 822 格式的日期 <br>例如：Thu, 21 Dec 2000 16:01:07 +0200';
echo '<br><br>';
echo date("U") . '<br>U <br>从 Unix 纪元（January 1 1970 00:00:00 GMT）开始至今的秒数 <br>参见 time()';
?>