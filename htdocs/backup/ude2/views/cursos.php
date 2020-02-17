
	<table style="border:1px solid #ccc; width: 75% ;">
	<tr>
		<th> Nome curso </th>
		<th> Carga Horária </th>
	</tr>

		<?php 
			while($linha = mysqli_fetch_array($consulta_cursos)){

				echo '<tr><td>'.$linha['nm_curso'].'</td>';
				echo '<td>'.$linha['carga_horaria'].'</td></tr>';
			}
		?>	
	
	</table>

			 