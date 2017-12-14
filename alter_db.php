<html>
 <head>
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

        $name = $_FILES['arquivo']['name']; 
        preg_match_all('/\.[a-zA-Z0-9]+/', $name, $extensao);
        if (!in_array(strtolower(current(end($extensao))), array('.txt', '.pdf', '.doc', '.xls', '.xlms'))) {
            echo('Permitido apenas arquivos doc,xls,pdf e txt.');
            header('Location: '.altera.php);
            die;
        }

        
        if (move_uploaded_file($tmpName, $dir.$name)) {    
            echo('Arquivo adicionado com sucesso.');
        } else {
            echo('Erro ao adicionar arquivo.');
        }    
    }  
} 
?>

 
<?php
					$id_task = $_POST['id_task'];
					$titulo = $_POST['titulo'];
					$datai = $_POST['datai'];
					$dataf = $_POST['dataf'];
					$nome_ex = $_POST['nome_ex'];
					$arquivo = $_POST['arquivo'];
					$descricao = $_POST['descricao'];


$strcon = mysqli_connect('localhost','root','admin','cadastro') or die('Impossível cadastrar agora. Por favor tente mais tarde');
					$sql = "UPDATE tarefa set titulo='$titulo', datai='$datai', dataf='$dataf', nome_ex='$nome_ex', arquivo='$arquivo', descricao='$descricao' WHERE id_task='$id_task'";
					mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
					mysqli_close($strcon);
					echo "Cliente cadastrado com sucesso! <p> <a href='exibir.php'>Voltar</a>";
					
?>
</body>
</html>