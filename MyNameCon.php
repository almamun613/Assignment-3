<? php
/*Make a Class MyName, use constructor to set your name in the $name variable.(use $this).
 Now print that name with welcome by calling method.*/
/**
 * 
 */
class MyNameCon 
{
	public $name;
	
	function __construct($name)
	{
		$this->name= $name;
	}

	public function welcome(){
		echo "welcome ".$name;
	}
}




?>