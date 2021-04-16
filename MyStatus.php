<? php
	/*Make a interface class named Gorib. Make another class called MyStatus. 
Implement Gorib class in MyStatus. Then implement lowMOney,Homeless method in MyStatus Class.*/
	


	include 'Gorib.php';
	class MyStatus implements Gorib
	{
		public function lowMOney(){
			echo "Low Money";
		}
		public function Homeless(){
			echo "Now Homeless";
		}
	}
?>