<?php

//连接数据库
echo 'start';
$con = mysqli_connect("127.0.0.1", "root", "123456");
if (!$con) {
    die('Could not connect: ' . mysql_error() . '<br>');
} else {
    echo 'connect successful', '<br>';
}
//创建数据库
//if (mysql_query("CREATE DATABASE zx_php_project", $con)) {
//    echo "Database created" . "<br>";
//} else {
//    echo "Error creating database: " . mysql_error() . '<br>';
//}
//选择需要操作的数据库
echo 'connect  to db';
mysqli_select_db($con, "zx_php_project");

//创建数据库表
//$sql = "CREATE TABLE Persons(FirstName varchar(15),LastName varchar(15),Age int)";
////        $sql = "CREATE TABLE Persons1 (personID int NOT NULL AUTO_INCREMENT, PRIMARY KEY(personID),FirstName varchar(15),LastName varchar(15),Age int)";
//if (mysql_query($sql, $con)) {
//    echo "create table successful" . "<br>";
//} else {
//    echo "Error create table: " . mysql_error() . '<br>';
//}
//向表中插入数据
//$sqlinsert = "INSERT INTO Persons (FirstName, LastName, Age) VALUES ('Peter', 'Griffin', '35')";
//mysql_query($sqlinsert);
//$sqlinsert = "INSERT INTO Persons (FirstName, LastName, Age) VALUES ('Glenn', 'Quagmire', '33')";
//mysql_query($sqlinsert);
//$sqlform = "INSERT INTO Persons (FirstName, LastName, Age)VALUES('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";
//$con参数可以不填
//if (!mysql_query($sqlform, $con)) {
//    die('Error: ' . mysql_error());
//} else {
//    echo "1 record added";
//}
$result = mysqli_query($con, "SELECT * FROM Persons");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
</tr>";

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['FirstName'] . "</td>";
    echo "<td>" . $row['LastName'] . "</td>";
    echo "<td>" . $row['Age'] . "</td>";
    echo "</tr>";
}
echo "</table>";


//$updateSql = "UPDATE Persons SET FirstName = 'zhao', LastName = 'qiang' WHERE FirstName = 'xxx'";
//mysql_query($updateSql, $con);


//$deleteSql = "DELETE FROM Persons WHERE FirstName='zhu'";
//mysql_query($deleteSql, $con);


mysql_close($con);


?>
