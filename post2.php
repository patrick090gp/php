<?php 

if(isset($_POST['num1'], $_POST['num2'])){ 
    
    $N1 = $_POST['num1'];
    $N2 = $_POST['num2'];
    
    $som = $N1 + $N2;

    echo $som;

} 

?>