<?php 

class Square extends Rectangle 
{
	private $indim;

	public function __construct($indim) 
	{
		parent::__construct($indim, $indim);

		$this->indim = $indim;
	}

}