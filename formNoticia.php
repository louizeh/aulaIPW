<style>
	.form{
		border:1px dashed black;
		background-color: #e2e2e2;
		width: 400px;
	}
	.campos{
		width: 400px;
		height: 35px;
	}
	</style>
	<div class="form">
	<h1>Cadastro de Notícia</h1>
<form action = "controllerNoticia.php" method="post"> 
	<label>Titulo: </label>
	<input type="text" name="titulo" class="campos"><br>
	<label> autor:</label>
	<input type="text" name="autor"><br>
	<label> Curso </label>
	<input type="text" name="curso"><br>
	<label> Publicaso em:</label><br>
	<input type="date" name="dataPublicacao"><br>
	<label>Descrição:</label>
	<textarea name="descricao" rows="4" cols="50"></textarea><br>
	<input type="submit" value="ENVIAR">
	
	</form>
	</div>
	