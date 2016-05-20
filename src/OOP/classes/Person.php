<?php

class Person
{
    public $name;
    protected $skill;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setSkill($skill)
    {
        $this->skill = $skill;
    }

    public function getSkill()
    {
        return $this->skill;
    }
    
    public function __toString()
    {
        return "{$this->name} has {$this->skill->name}";
    }
}