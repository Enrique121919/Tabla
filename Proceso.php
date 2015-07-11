<?php

echo "<link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\" >";

creartablas($_POST["Operacion"]);

function crearTablas($estructura){ 	
	if($estructura==="For"){ 	
	echo "<h1>Estructura For</h1>"; 
	echo "<table>";
	echo "<tr>";
	for($primero=1;$primero<=10;$primero++){
		echo "<td>";
		echo "<table border=2>";
		echo "<tr align=center><td colspan=5>Tabla de multiplicar del ".$primero.":</td></tr>";

		for($segundo=1;$segundo<=10;$segundo++){
			$multiplicar=$primero*$segundo;
			echo "<tr align=center><td>".$primero."</td><td> X </td><td>".$segundo."</td><td> = </td><td>".$multiplicar."</td></tr>";
		}
		echo "</table>";
		echo "</td>";
	}		
		echo "</tr>";
		echo "</table>";
	}elseif($estructura==="While"){ 
	echo "<h1>Estructura While</h1>";		
		$primero=1; 		
		echo "<table>"; 		
		echo "<tr>"; 		
		while($primero<=10){ 			
			echo "<td>"; 			
			echo "<table border=3><tr align=center><td colspan=5>Tabla de multiplicar del ".$primero."</td></tr>"; 			
			$segundo=1; 			
				while($segundo<=10){ 			
					$multiplicar=$primero*$segundo; 			
					echo "<tr align=center><td>".$primero."</td><td> X </td><td>".$segundo."</td><td> = </td><td>".$multiplicar."</td></tr>"; 			
					$segundo++; 			
				} 			
				echo "</table>"; 			
				echo "</td>"; 			
				$primero++; 		
		} 		
		echo "</tr>"; 		
		echo "</table>"; 	
	}elseif($estructura==="Do-while"){ 	
	echo "<h1>Estructura Do-while</h1>";	
		echo "<table>"; 		
		echo "<tr>"; 		
		$primero=1; 		
		do{ 		
			echo "<td>"; 		
			echo "<table border=3><tr align=center><td colspan=5>Tabla de multiplicar del ".$primero.":</td></tr>"; 		
			$segundo=1; 		
			do{ 		
				$multiplicar=$primero*$segundo; 		
				echo "<tr align=center><td>".$primero."</td><td> X </td><td>".$segundo."</td><td> = </td><td>".$multiplicar."</td></tr>"; 		
				$segundo++; 		
			}while($segundo<=10); 		
			echo "</table>"; 		
			echo "</td>"; 		
			$primero++; 		
		}while($primero<=10); 		
		echo "</table>";
	}
}
?>	



