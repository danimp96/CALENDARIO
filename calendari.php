<!DOCTYPE html>
	<style>
		#calendario {
			border: 2px solid black;
			
		}
		
		#calendario tr{
			border: 2px solid black;
		}
		#calendario td{
			border: 2px solid black;
			padding:10px;
		}
	</style>
	
	
<html lang="es">
	<table id="calendario" cellspacing=0>
		<?php
		$año = date('y');
		$mes = date('m');
		$primerdia= mktime(01,01,01,$mes,01,$año);
		$diainicial=date('w', $primerdia);
		$a=1;
		$diafinal = date('t');
		$diaactual=date('j');
	for ($i=1;$i<=7;$i++){
		if($i==1){
			echo "<tr><td>Lunes</td><td>Martes</td><td>Miercoles</td><td>Jueves</td><td>Viernes</td><td>Sabado</td><td>Domingo</td></tr>";
		}
		else {
			echo "<tr>";
			
			for($j=1;$j<=7;$j++){
				if($j<$diainicial && $i==2){
					echo "<td></td>\n";
				}
				else if($a<=$diafinal){
					if($a==$diaactual){
						echo "<td style='background-color: blue'>$a</td>\n";
					}
					else{
						echo "<td>$a</td>\n";
					}	
					$a++;
				}
				else{
					echo "<td></td>";
					$i=8;
				}
				

			}
			echo"</tr>";
			
		}
	}
	

	?>
	</table>

</html>
