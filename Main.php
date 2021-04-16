<? php
	


	/**
	 * 
	 */
	class Main
	{
		
		/*Proble-2: take a variable named "key", now set the key value by passing setter and print it via getter method.*/
		private $key="";

		public function getter (){
			return $this->key;
		}

		public function setter($key){
			$this->key=$key;
		}




	}
?>