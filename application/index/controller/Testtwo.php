<?php
namespace app\index\controller;

class Testtwo
{

	private $name="two";

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