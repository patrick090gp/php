<?php 
if(isset($_POST['nome'], $_POST['idade'])){ 
$nome = $_POST['nome'];
$idade = $_POST['idade'];

if ($idade > 18){
    echo "Olá você é maior de idade";
}
else {
    echo "Você é menor de idade";

}
} 



?>