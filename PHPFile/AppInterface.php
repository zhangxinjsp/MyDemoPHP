<?php

$array = array("username" => "bohua", "password" => "123456");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (file_get_contents('php://input')) {
        $receiveStr = file_get_contents('php://input');
        echo $receiveStr;
//        echo json_encode($array);
//        $json = json_decode($receiveStr, TRUE);
//        echo $json['FirstName'];        
    } else {
        echo json_encode($array);
//        echo 'args:' . $_POST['args'] . ' ; FirstName:' . $_POST['FirstName'] . ' ; LastName:' . $_POST['LastName'] . ' ; Age:' . $_POST['Age'];
//        $_FILES['args']['name']上传文件是需要用到
    }
}
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo json_encode($array);
}

//$con = mysql_connect("localhost", "root", "123456");
//if (!$con) {
//    die('Could not connect: ' . mysql_error() . '<br>');
//}
//
//mysql_select_db("zx_db", $con);
//
//$result = mysql_query("SELECT * FROM Persons");
//
//$array = array();
//while ($row = mysql_fetch_array($result)) {
//    array_push($array, array("FirstName" => $row['FirstName'], "LastName" => $row['LastName'], "Age" => $row['Age']));
//}
//echo json_encode($array);
//mysql_close($con);





