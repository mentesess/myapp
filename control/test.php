<?php
/**
 * Created by PhpStorm.
 * User: Saffet
 * Date: 24.09.2014
 * Time: 15:07
 */
namespace myapp;
echo <<<EOF
      <pre>
      <!DOCTYPE html>
        <html>
    <head>
    <meta charset="utf-8"/>
    <link href="../style/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script>
function showHint(str) {
  if (str.length==0) {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","gethint.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>
EOF;
include_once("../model/Employee.php");
include_once("../database/DbCon.php");
include_once("../database/DbEmployee.php");

$dbCon= new DbCon();
$dbEmp = new DbEmployee($dbCon);
//$dbEmp->createTable();
if($_SERVER['REQUEST_METHOD']==POST&&isset($_POST['userName'])){

    $userName = test_input($_POST['userName']);
    $name = test_input($_POST['name']);
    $surname = test_input($_POST['surname']);
    $salary = test_input($_POST['salary']);
    if(!empty($userName)&&!empty($name)&&!empty($surname)&&!empty($salary)){
        checkUserName();
        $dbEmp->addEmployee($userName,$name,$surname,$salary);
        $dbEmp->getEmployee();
        unset($dbCon);
   }
    unset($_POST['userName']);
}else if($_SERVER['REQUEST_METHOD']==GET){
    exit;
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function checkUserName(){
    $userName = $_REQUEST['userName'];
    global $dbEmp;
    $userNameArray=$dbEmp->getEmployee();
    echo($userNameArray['1']);

}