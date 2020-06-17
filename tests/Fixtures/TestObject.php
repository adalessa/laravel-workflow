<?php
namespace Tests\Fixtures;

class TestObject
{
    public $marking;

    public function getMarking()
    {
        return $this->marking;
    }

    public function setMarking($marking, $context = [])
    {
        $this->marking = $marking;
    }
}
