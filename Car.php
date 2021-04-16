<? php
/*Make a Car class. Take EngineStatus,BodyPart property for Car class. 
Take another class named Audi. Take property color, Seats . 
then Print all of them EngineStatus,BodyPart,property color by inherit Car Class. 
You can use Getter Setter if you want.*/


 class Car
 {
 	private $EngineStatus;
 	private $BodyPart;



 	public function getter (){
			return $this->EngineStatus. $this->BodyPart;
		}

		public function setter($EngineStatus, $BodyPart){
			$this->EngineStatus=$EngineStatus;
			$this->BodyPart=$BodyPart;
		}

 }


?>
