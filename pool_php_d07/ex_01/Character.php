<?php

class Character{

    private $_name;
    private $_life;
    private $_agility;
    private $_strength;
    private $_wit;
    const CLASSE = get_class($this);

    public function __construct($name)
    {
        $this->_name = $name;
        $this->_life = 50;
        $this->_agility = 2;
        $this->_strength = 2;
        $this->_wit = 2;


    }

    public function getName()
    {
        return $this->_name;
    }

    public function getLife()
    {
        return $this->_life;
    }

    public function getAgility()
    {
        return $this->_agility;
    }

    public function getStrength()
    {
        return $this->_strength;
    }

    public function getWit()
    {
        return $this->_wit;
    }
    public function getClasse()
    {
        return CLASSE;
    }


}