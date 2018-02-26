<?php  
	
	$myfile = fopen( "bettin.txt", "w") or die ("Unable to create file");
	fwrite($myfile, $_GET["win"]);
	if (isset($_GET["win"])) 
	{
		$number = $_GET["win"];

		switch ($number) 
		 {
			case 1:
			echo "<h2>Confirmed!!! YOU HAVE WON Ksh 10,000</h2>";
			break;

			case 2:
			echo "<h2>Confirmed!!! YOU HAVE WON Ksh 50,000</h2>";
			break;

			case 3:
			echo "<h2>Confirmed!!! YOU HAVE WON Ksh 1,000,000</h2>";
			break;

			case 4:
			echo "<h2>OOPS!!YOU HAVE LOST!!</h2>";
			break;

			case 5:
			echo "<h2>Confirmed!!! YOU HAVE WON Ksh 500,000,000</h2>";
			break;

			case 6:
			echo "<h2>OOPS!! YOU HAVE LOST</h2>";
			break;

			default:                                                                                       echo "<h3>Enter a number between 1-6 and place a bet</h3>"; 

		}
	}
	?>
	
	


?>
