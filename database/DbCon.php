<?php
/**
 * Created by PhpStorm.
 * User: Saffet
 * Date: 25.09.2014
 * Time: 13:31
 */

namespace myapp;
class DbCon {
    const HOST        = "host=127.0.0.1";
    const PORT        = "port=5432";
    const DBNAME      = "dbname=postgres";
    const CREDENTIALS = "user=postgres password=1234";
    private $dbCon;
    function __construct()
    {
        echo("DBCON");
        $conString = sprintf("%s %s %s %s",DbCon::HOST,DbCon::PORT,DbCon::DBNAME,DbCon::CREDENTIALS);
        $this->dbCon=pg_connect($conString)or die("Could not connect\n");
    }
    function __destruct()
    {
        pg_close($this->dbCon);
    }

    /**
     * @return resource
     */
    public function getDbCon()
    {
        return $this->dbCon;
    }

} 