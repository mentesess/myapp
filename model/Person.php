<?php
/**
 * Created by PhpStorm.
 * User: Saffet
 * Date: 24.09.2014
 * Time: 15:03
 */

namespace myapp;


class Person {
    private $userName;
    private $name;
    private $surname;
    private $pId;//kullanıcı id
    private $bhId; //fırın id

    public function __construct($bhId,$pId, $name, $surname, $userName)
    {
        echo("In person");
        $this->bhId = $bhId;
        $this->name = $name;
        $this->surname = $surname;
        $this->pId = $pId;
        $this->userName = $userName;
    }

    /**
     * @param mixed $bhId
     */
    public function setBhId($bhId)
    {
        $this->bhId = $bhId;
    }

    /**
     * @return mixed
     */
    public function getBhId()
    {
        return $this->bhId;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $uId
     */
    public function setPId($pId)
    {
        $this->pId = $pId;
    }

    /**
     * @return mixed
     */
    public function getPId()
    {
        return $this->uId;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

} 