<html>
 <head>
 <style type="text/css">

body {
	background-color: #FC0;
}
</style>

 
   </head>
   
 <body>
 <?php
$pathToSave = $_SERVER["DOCUMENT_ROOT"].
"/pasta onde quer salvar/";

if (!file_exists($pathToSave)) {
    mkdir($pathToSave);
}

if ($_FILES) { 

    if ($_FILES['arquivo']) { 
        $dir = $pathToSave; 
        $tmpName = $_FILES['arquivo']['tmp_name']; 

        $name = $_FILES['arquivo']['name']; // Recebe o nome do arquivo.
        preg_match_all('/\.[a-zA-Z0-9]+/', $name, $extensao);
        if (!in_array(strtolower(current(end($extensao))), array('.txt', '.pdf', '.doc', '.xls', '.xlms'))) {
            echo('Permitido apenas arquivos doc,xls,pdf e txt.');
            header('Location: '.cadastro_task.php);
            die;
        }

        // move_uploaded_file( $arqTemporário, $nomeDoArquivo )
        if (move_uploaded_file($tmpName, $dir.$name)) { // move_uploaded_file irá realizar o envio do arquivo.        
            echo('Arquivo adicionado com sucesso.');
        } else {
            echo('Erro ao adicionar arquivo.');
        }    
    }  
} 
?>

<?php
					$titulo = $_POST['titulo'];
					$datai = $_POST['datai'];
					$dataf = $_POST['dataf'];
					$nome_ex = $_POST['nome_ex'];
					$arquivo = $_POST['arquivo'];
					$descricao = $_POST['descricao'];
								
					$strcon = mysqli_connect('localhost','root','admin','cadastro') or die('Impossível cadastrar agora. Por favor tente mais tarde');
					$sql = "INSERT INTO tarefa (titulo, datai, dataf, nome_ex, arquivo, descricao) VALUES";
					$sql .= "('$titulo','$datai', '$dataf', '$nome_ex', '$arquivo', '$descricao')"; 
					mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar task <p> <a href='cadastro_task.php'>Voltar</a>");
		mysqli_close($strcon);
echo "




Task cadastrada com sucesso! <p> <a href='cadastro_task.php'>Voltar</a>";
?>

 </body>
</html>