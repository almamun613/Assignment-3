<? php
/*7.Make a class named 'Assignment'. Now take a variable and set "ADVANCED WEB APPLICATION DEVELOPMENT"
 as the value by constructor. Now make 3 methods where you can do, 
7.1. count number of word of the sentence and return the result,
 7.2. Find the lowest number of word from the sentence and print it, 
7.3. Find the "Application" word from the sentence and replace the word with
 "WEBSITE" and print the full Sentence again with the replaced word.*/

 /**
  * 
  */
 class Assignment 
 {
 	$note= "ADVANCED WEB APPLICATION DEVELOPMENT";
 	function __construct($note)
 	{
 		$this->note= $note;
 	}
 	


 	function __destructor(){
 		/*step-1*/
 		$count=str_word_count($this->note);

 		/*step-2*/

 		$split_note= explode(' ',$this->note);
 		$lowest="aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
 		foreach ($split_note as $x) {
			if (strlen($x)<strlen($lowest)) {
			  $lowest=$x;
			}
    
		}
		echo $lowest;

		/*step-3*/
		str_replace("APPLICATION", "WEBSITE", "ADVANCED WEB APPLICATION DEVELOPMENT");

 	}
 }

?>
