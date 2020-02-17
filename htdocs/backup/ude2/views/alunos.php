
	<a href="?pagina=inserir_alunos">Inserir alunos</a>
	<table style="border:1px solid #ccc; width: 75% ;">
	<tr>
		<th> Nome aluno </th>
		<th> Data nascimento </th>
	</tr>

		<?php 
			while($linha = mysqli_fetch_array($consulta_alunos)){

				echo '<tr><td>'.$linha['nm_aluno'].'</td>';
				echo '<td>'.$linha['dt_nascimento'].'</td></tr>';
			}
		?>	
	
	</table>

			 