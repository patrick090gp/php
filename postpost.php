<?php 
//Pegar dados via URL
//Passamos a variáqvel global e o `name` que esta no input nome
//Ultilizamos o isset para verificar se existe valor via URL

if(isset($_POST[`nome`], $_POST[`email`])){

    $nome = $_POST [`nome`];
    $iemail = $_POST [`email`];

    echo "$nome e $email";
}

else{
    echo "Não existe valor via URL";
}
?>
