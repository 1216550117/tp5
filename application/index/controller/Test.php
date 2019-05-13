<?php
namespace app\index\controller;

class Test
{

	private $name="test";

	public function setname($name)
	{
		$this->name=$name;
	}

	public function getname()
	{
		return $this->name;
	}

    public function index()
    {
        return "res";
    }

    public function test()
    {
    	return "aaa";
    }

}