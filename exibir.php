<?php
// Conexão
$link = mysql_connect('localhost','root','admin');
$conexao = mysql_select_db('cadastro',$link); if($conexao){

//Tarefa
$sql = "SELECT  id_task, titulo, datai, dataf, nome_ex, arquivo, descricao  FROM tarefa";

//Consulta
$consulta = mysql_query($sql);
	echo '
	
	
	 <style type="text/css">
 table {
	background-color: #C93;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	position: relative;
	color: #FFF;
	
}

body {
	background-color: #FC0;
	}
 h3 {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
}
 </style>
	
	
	
	
	';


	echo '<table border="1" width="100%">';

	echo '<tr>';

	echo '<td><b>Codigo de Tarefa</b></td>';

	echo '<td><b>Titulo</b></td>';

	echo '<td><b>Data Inicial</b></td>';

	echo '<td><b>Data Final</b></td>';

	echo '<td><b>Nome da pessoa que ira executar</b></td>';

	echo '<td><b>Arquivo</b></td>';

	echo '<td><b>Descricao</b></td>';

	echo '<td><b>Alteração</b></td>';

	echo '<td><b>Deletar</b></td>';

	echo '</tr>';

// Armazenamento
	while($registro = mysql_fetch_assoc($consulta)){

	echo '<tr>';

	echo '<td>'.$registro['id_task'].'</td>';

	echo '<td>'.$registro['titulo'].'</td>';

	echo '<td>'.$registro['datai'].'</td>';

	echo '<td>'.$registro['dataf'].'</td>';

	echo '<td>'.$registro['nome_ex'].'</td>';

	echo '<td>'.$registro['arquivo'].'</td>';

	echo '<td>'.$registro['descricao'].'</td>';

//echo '  <td><a href="' altera.php '?id='.$registro['id_task'].'">Editar</a></td>';

	echo '<td><a href="'. "altera.php" .'?id='.$registro["id_task"].'">Editar</a></td>';

	echo '<td><a href="'. "deleta_db.php" .'?id='.$registro["id_task"].'">Deletar</a></td>';

	echo '</tr>';

}

	echo '</table>';

}

?>