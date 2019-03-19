<?php
/*
+publi
-private
#protected	
*/
	class	Noticia{
		public $id, $titulo, $descricao, $autor;
		public $dataPublicacao, $curso;
		
		public function setTitulo($titulo){
			$this->titulo = $titulo;
			}
			public function setDescricao($descricao){
			$this->descricao = $descricao;
			}
			public function setAutor($autor){
			$this->autor = $autor;
			}
			public function setdataPublicacao($dataPublicacao){
			$this->dataPublicacao = $dataPublicacao;
			}
			public function setCurso($curso){
			$this->curso = $curso;
			}
			
			public function getTitulo(){
				return $this->titulo;
				}
				public function getDescricao(){
					return $this->descricao;
				}
				public function getAutor(){
					return $this->autor;
				}
				public function getDataPublicacao(){
					return $this->dataPublicacao;
				}
				public function getCurso(){
					return $this->curso;
				}
				
		
		public function cadastrar($dados){
		list($titulo, $descricao, $autor, $dataPublicacao, $curso) = $dados;
		
		$this->setTitulo ($titulo);
		$this->setDescricao ($descricao);
		$this->setAutor ($autor);
		$this->setDataPublicacao ($dataPublicacao);
		$this->setCurso ($curso);
		
		$conectar = new mysqli("localhost","root","","noticialisboa01");
		$sql = "insert into noticia (titulo, descricao, autor, dataPublicacao,curso)
					values (
					'{$this->getTitulo()}',
					'{$this->getDescricao()}',
					'{$this->getAutor()}',
					'{$this->getDataPublicacao()}',
					'{$this->getCurso()}')
					";				
		$gravar = $conectar->query($sql);
		$num = $conectar->affected_row;
		if($num==1){
			echo "<fieldset>";
			echo "<h1><center>Os dados abaixo foram armazenados na classe com sucesso!!!</h1>";
			echo "<hr>Título: ".$this->getTitulo();
			echo "<br>Descrição: ".$this->getDescricao();
			echo "<br>Autor: ".$this->getAutor();
			echo "<br>Publicado em: ".$this->getDataPublicacao();
			echo "<br>Curso: ".$this->getCurso();
			echo "<hr>";
			echo "<fieldset>";
		}else{
			echo "<fieldset>";
			echo "Erro ao gravar os dados";
			echo"</fieldset>";
			}
		}
		public function alterar($dados){}
		public function excluir($id){}
		public function buscarUm($id){}
		public function buscarTodos(){
		$sql = "SELECT * FROM noticia ORDER BY id ASC";
		$conectar = new mysqli("localhost","root","","noticialisboa01");
			$listar = $conectar->query($sql);
			
			$noticias = array();
			
		while($linha = $listar->fetch_array()){
			$noticias[] = $linha;
			 	}
			 	return $noticias;
		
				}
	}
?>
