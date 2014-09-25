<?php
/**
 * Created by PhpStorm.
 * User: Saffet
 * Date: 24.09.2014
 * Time: 14:57
 */

namespace myapp;
include "Person.php";


class Employee extends Person{
    private $salary;

    /**
     * @param $bhId
     * @param $name
     * @param $surname
     * @param $pId
     * @param $userName
     * @param double $salary
     */
    public function __construct($bhId, $pId, $name, $surname, $userName,$salary)
    {

        echo("In Employee");
        parent::__construct($bhId, $pId, $name, $surname, $userName);

        $this->salary = $salary;
    }

}