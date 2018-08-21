<html>
    <head>
        <meta charset="utf-8">
        <title>菜鸟教程(runoob.com)</title>
    </head>
    <body>
        
        My name <?php echo $_REQUEST["name"]; ?><br>
        I am <?php echo $_REQUEST["age"]; ?> years old<br>
        I am <?php echo $_REQUEST["gender"]; ?> !<br>
        My email is <?php echo $_REQUEST["email"]; ?> !<br>
        My website is <?php echo $_REQUEST["website"]; ?> !<br>
        My website is <?php echo $_REQUEST["website1"]; ?> !<br>
        My comment is <?php echo $_REQUEST["comment"]; ?> !<br><br>
        
        
        <?php include 'PHPFormCheckBox.php'; ?>
        <br>
        <br>
        <?php include 'PHPFormRadio.php'; ?>
        <br>
        <br>
        <?php include 'PHPFormSelect.php'; ?>
        <br>
        <br>
        <?php include 'PHPFormSelectMul.php'; ?>
        <br>
        <br>
    </body>
</html>