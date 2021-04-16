<? php
	/**
	 * 
	 */
	/*Make a Car class. Take EngineStatus,BodyPart property for Car class. 
Take another class named Audi. Take property color, Seats . 
then Print all of them EngineStatus,BodyPart,property color by inherit Car Class. 
You can use Getter Setter if you want.*/
	include 'Car.php';
	class Audi extends Car
	{
		public $color="Red";
		public $Seats="2";

		public function print(){
				echo "Color: ".$color."Seats ".$Seats."Others ".getter();

		}

	}
?>