<?php
/**
 * Created by PhpStorm.
 * User: Saffet
 * Date: 24.09.2014
 * Time: 15:01
 */

namespace myapp;


class BakeHouse {

    private $bhId;//fırın id
    private $name;
    private $aId;//Adres id


    function __construct($aId, $bhId, $name)
    {
        $this->aId = $aId;
        $this->bhId = $bhId;
        $this->name = $name;
    }
} 