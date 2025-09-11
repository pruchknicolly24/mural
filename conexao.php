<?php

$host    = "localhost";   
$usuario = "root";      
$senha   = "";            
$banco   = "muralnicolly";       

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro ao conectar: " . mysqli_connect_error());
}

mysqli_set_charset($conexao, "utf8");
?>
<?php

$cloud_name = "dgkhpcl6b";  
$api_key    = "499661376514168";
$api_secret = "5pWKfj--RJ5CN1nY1knneskF-NY"; 

?>
