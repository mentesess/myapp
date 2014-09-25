<?php
/**
 * Created by PhpStorm.
 * User: Saffet
 * Date: 25.09.2014
 * Time: 14:21
 */

namespace myapp;
include_once("DbCon.php");

class DbEmployee extends DbCon{
    private $dbCon;

    function __construct(DbCon $dbCon)
    {
        $this->dbCon = $dbCon;
    }

    /**
     *Bu fonksiyon Employee tablosunu oluşturuyor
     */
    public function createTable(){
        $sql =<<<EOF
      CREATE TABLE EMPLOYEE
      (ID SERIAL PRIMARY KEY  NOT NULL,
       USERNAME       TEXT    NOT NULL,
       NAME           CHAR(20),
       SURNAME        CHAR(30),
       SALARY         REAL,
       UNIQUE(USERNAME)
       );
EOF;

        $ret = pg_query($this->dbCon->getDbCon(), $sql);
        if(!$ret){
            echo pg_last_error($this->dbCon->getDbCon());
        }
    }

    /**
     *Bu fonksiyon Employee tablosunu siliyor
     */
    public function deleteTable(){
        $sql =<<<EOF
      DROP TABLE EMPLOYEE;
EOF;

        $ret = pg_query($this->dbCon->getDbCon(), $sql);
        if(!$ret){
            echo pg_last_error($this->dbCon->getDbCon());
        }
    }
    /**
     * Bu fonksiyon Employee tablosuna veri yazıyor
     */
    public function addEmployee($userName,$name,$surname,$salary){
        $tempName=pg_escape_string($this->dbCon->getDbCon(),$name);
        $tempUserName=pg_escape_string($this->dbCon->getDbCon(),$userName);
        $tempSurname=pg_escape_string($this->dbCon->getDbCon(),$surname);
        $tempSalary=pg_escape_string($this->dbCon->getDbCon(),$salary);
        $sql =<<<EOF
      INSERT INTO EMPLOYEE (USERNAME,NAME,SURNAME,SALARY)
      VALUES ('$tempUserName', '$tempName', '$tempSurname', $tempSalary );

EOF;

        $ret = pg_query($this->dbCon->getDbCon(), $sql);
        if(!$ret){
            echo pg_last_error($this->dbCon->getDbCon());
        }
    }

    /**
     * Bu fonksiyon Employee tablosundaki tüm elemanları getiriyor
     */
    public function getEmployee(){
        $sql =<<<EOF
      SELECT * from EMPLOYEE;
EOF;

        $ret = pg_query($this->dbCon->getDbCon(), $sql);

        if(!$ret){
            echo pg_last_error($this->dbCon->getDbCon());
            exit;
        }
        $newarray = array();
        while($row = pg_fetch_row($ret)){
            array_push($newarray,$row);
        }
        return $newarray;
    }
    /**
     * Bu fonksiyon id si verilmiş bir
     */
    public function deleteEmployee($id){
      $tempId = pg_escape_string($this->dbCon->getDbCon(),$id);
        $sql =<<<EOF
      DELETE from EMPLOYEE where ID=$tempId;
EOF;
        $ret = pg_query($this->dbCon->getDbCon(), $sql);
        if(!$ret){
            echo pg_last_error($this->dbCon->getDbCon());
        }
    }

}