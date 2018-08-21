<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * 什么是 $_SERVER["PHP_SELF"] 变量?
 * $_SERVER["PHP_SELF"]是超级全局变量，返回当前正在执行脚本的文件名，与 document root相关。
 * 所以， $_SERVER["PHP_SELF"] 会发送表单数据到当前页面，而不是跳转到不同的页面。
 * 
 * $_SERVER["PHP_SELF"] 变量有可能会被黑客使用！
 * 当黑客使用跨网站脚本的HTTP链接来攻击时，$_SERVER["PHP_SELF"]服务器变量也会被植入脚本。
 * 原因就是跨网站脚本是附在执行文件的路径后面的，
 * 因此$_SERVER["PHP_SELF"]的字符串就会包含HTTP链接后面的JavaScript程序代码。
 * 
 * XSS又叫 CSS (Cross-Site Script) ,跨站脚本攻击。
 * 恶意攻击者往Web页面里插入恶意html代码，
 * 当用户浏览该页之时，嵌入其中Web里面的html代码会被执行，
 * 从而达到恶意用户的特殊目的。
 * 
 * $_SERVER["PHP_SELF"] 可以通过 htmlspecialchars() 函数来避免被利用。
 * form 代码如下所示：
 * <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 * htmlspecialchars() 把一些预定义的字符转换为 HTML 实体。
 * 现在如果用户想利用 PHP_SELF 变量, 结果将输出如下所示：
 * <form method="post" action="test_form.php/&quot;&gt;&lt;script&gt;alert('hacked')&lt;/script&gt;">
 */


/*
 * 什么是 htmlspecialchars()方法?
 * 
 * htmlspecialchars() 函数把一些预定义的字符转换为 HTML 实体。
 * 
 * 预定义的字符是：
 * & （和号） 成为 &amp;
 * " （双引号） 成为 &quot;
 * ' （单引号） 成为 &#039;
 * < （小于） 成为 &lt;
 * > （大于） 成为 &gt;
 */

//使用 PHP trim()          函数去除用户输入数据中不必要的字符 (如：空格，tab，换行)。
//使用 PHP stripslashes()  函数去除用户输入数据中的反斜杠 (\)
//接下来让我们将这些过滤的函数写在一个我们自己定义的函数中，这样可以大大提高代码的复用性。

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = $age = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // 检测名字是否只包含字母跟空格
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "只允许字母和空格";
        }
    }

    if (empty($_POST["age"])) {
        $age = "";
    } else {
        $age = test_input($_POST["age"]);
    }
    
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // 检测邮箱是否合法
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
            $emailErr = "非法邮箱格式";
        }
    }

    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $webArr = array(
            'RUNOOB' => 'http://www.runoob.com',
            'GOOGLE' => 'http://www.google.com',
            'TAOBAO' => 'http://www.taobao.com',
        );
        
        $website = test_input($_POST["website"]);
        $weburl = $webArr[$website];
        // 检测 URL 地址是否合法
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $weburl)) {
            $websiteErr = "非法的 URL 的地址";
        }
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "性别是必需的";
    } else {
        $gender = test_input($_POST["gender"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>form verify</title>
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            名字: 
            <input type="text" name="name" value="<?php echo $name; ?>">
            <span class="error">* <?php echo $nameErr; ?></span>
            <br><br>
            性别:
            <input type="radio" name="gender" value="female" <?php if (isset($gender) && $gender == "female") echo "checked"; ?>>女
            <input type="radio" name="gender" value="male" <?php if (isset($gender) && $gender == "male") echo "checked"; ?>>男
            <span class="error">* <?php echo $genderErr; ?></span>
            <br><br>
            年龄: 
            <input type="text" name="age" value="<?php echo $age; ?>"><br><br>
            E-mail: 
            <input type="text" name="email" value="<?php echo $email; ?>">
            <span class="error">* <?php echo $emailErr; ?></span>
            <br><br>
            网址: 
            <select name="website">
                <option value="">选择一个站点:</option>
                <option value="RUNOOB" <?php if (isset($website) && $website == "RUNOOB") echo 'selected'; ?>>Runoob</option>
                <option value="GOOGLE" <?php if (isset($website) && $website == "GOOGLE") echo 'selected'; ?>>Google</option>
                <option value="TAOBAO" <?php if (isset($website) && $website == "TAOBAO") echo 'selected'; ?>>Taobao</option>
            </select>
            <span class="error"><?php echo $websiteErr; ?></span>
            <br><br>
            备注: 
            <textarea name="comment" rows="5" cols="40" title="title"><?php echo $comment; ?></textarea><br><br>
            <input type="submit" value="提交">
        </form>
    </body>
</html>

<?php
echo $name . "<br>";
echo $gender . "<br>";
echo $age . "<br>";
echo $email . "<br>";
echo $website . "<br>";
echo $comment . "<br>";

if (!empty($name)) {
    //重定向，页面跳转
    header("location:../PHPBasic/welcome.php");    
}
?>