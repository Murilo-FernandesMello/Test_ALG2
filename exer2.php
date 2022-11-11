<?php
$v1 = $_POST['v1'];
$v2 = $_POST['v2'];
$calc = $_POST['calc'];



switch($calc){
    case 'adi':
         $res = $v1 + $v2;
         break;
    case 'sub': 
        $res = $v1 - $v2;
        break;
    case 'mult': 
        $res = $v1 * $v2;
        break;
    case 'div': 
        if($v2 == 0){
            $res = "Impossível Dividir por Zero!";
        }else{
            $res = $v1 / $v2;
        }
        break;      
}

echo "Resposta: $res"
?>