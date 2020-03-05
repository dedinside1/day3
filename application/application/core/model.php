<?php

class Model
{
	public function __construct()
	{
			mysqli_set_charset($this->link = new mysqli(
				$GLOBALS['host'],
				$GLOBALS['username'],
				$GLOBALS['password'],
				$GLOBALS['database'],
			), 'utf8');
			if ($this->link->connect_error){
				die('error' . $this->link->connect_error);
			}
	}
	public function get_data()
	{
	}
}
