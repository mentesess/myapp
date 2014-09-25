<?php
/**
 * Created by PhpStorm.
 * User: Saffet
 * Date: 25.09.2014
 * Time: 17:13
 */
namespace myapp;
include_once("../database/DbCon.php");
include_once("../database/DbEmployee.php");

$dbCon= new DbCon();
$dbEmp = new DbEmployee($dbCon);

    $userName = $_REQUEST['userName'];
    global $dbEmp;
    $userNameArray=$dbEmp->getEmployee();
    foreach($userNameArray as $value){
        if($userName==$value[1]){
            echo "Bu kullanıcı adı bulunmaktadır.";
        }
    }
