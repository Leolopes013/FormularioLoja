	<html>
	<?php
			
		// Cria uma conexão
		$con = mysqli_connect("localhost", "root", "", "loja_bd");

		// verifica a conecção
		if (!$con) {
			die("Conexão com falha: " . mysqli_connect_error());
		}
		echo "Conectado com sucesso";

		$query = "SELECT * FROM cidades_tb";
		
		$result = mysqli_query($con, $query);
		
		echo'<br>';
				
		while($row = mysqli_fetch_array($result)){  
            echo   '<tr> 
					    <td>'.$row["cidade"].'</td>                                      
						<td>'.$row["estado"].'</td>
	               </tr>';
		}
		
		mysqli_close($con);

	?>
	<br>
	<button onclick="history.go(-1);">Voltar 1</button>
	
</html>
