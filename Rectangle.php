<?php 

class Rectangle 

{
	private $height;
	private $width;
	private $area;
	private $perimeter;

	public function __construct($inheight, $inwidth) 
	{

		$this->height = $inheight;
		$this->width = $inwidth;
	}

	public function area()
	{
		$area = $this->width * $this->height;

		$this->area = $area;
	}

	public function perimeter()
	{
		$perimeter = ($this->width*2) + ($this->height*2);
		$this->perimeter = $perimeter;
	}

}




