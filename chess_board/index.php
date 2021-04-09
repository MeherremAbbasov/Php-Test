<table style="border: 1px solid black">
<?php

	for ($row=1; $row <=10 ; $row++) { 
		echo "<tr>";
		
            for ($col=1; $col <=10 ; $col++) { 
            	if (($row + $col) % 2 == 0) {
            		echo "<td style='padding:20px;border:1px solid black;background:black'> </td>";
            	}
            	else{
            		echo "<td> </td>";
            	}
            }

		echo "</tr>";
		    
	}


?>
	




</table>