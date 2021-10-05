<?php
$categorias = ['Infantil','Adolecente','Adulto'];
$nome = 'Eduardo';
$idade = 7 ;
if($idade >= 6 && $idade <=12){ 
    for($i = 0 ; $i <=  count($categorias); $i++){
        if($categorias == [0]){
            echo " O nadador" .$nome. "compete na categoias" .$categorias[$i];
        }
        
    }
}
else if($idade >= 13 && $idade <18){
    print_r($categorias[1]);
}
else if ($idade >18){
    print_r($categorias[2]);
}

?>