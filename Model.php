<?php 
class Model 
{
	protected static $table;
	protected $attributes = [];

	public function __set($name, $value)
	{

		return $this->attributes[$name] = $value;
	}

	public function __get($name) 
	{

		if (array_key_exists($name, $this->attributes)) {
			
			return $this->attributes[$name];

		}

		return ("nice try you silly little puppy" . PHP_EOL . $name . "is not part of this object" . PHP_EOL);
	}

	public static function getTableName()
	{

		return static::$table;
	}

}