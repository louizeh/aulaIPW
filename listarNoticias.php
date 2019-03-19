<?php
	include ("Noticia.php");
	$listarNoticia = new Noticia();
	$valor = $listarNoticia->buscarTodos();
	
	print_r($valor);
?>
<table border="1">
	<th>Item</th>
	<th>Título</th>
	<th>Autor</th>
	<th>Ação</th>
	<tr>
		<td></td>
	</tr>
</table>
	