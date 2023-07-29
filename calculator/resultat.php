<?php
$number1=$_POST["number1"] ;
$number2=$_POST["number2"] ;
if(isset($_POST["send"])){
    if(!empty($_POST["number1"] and $_POST["number2"])){

if($_POST["operator"]=="+"){
    $result=$number1+$number2;
    echo "Результат".$result;
}
elseif($_POST["operator"]=="-"){
    $result=$number1-$nember2;
    echo "Результат".$result;
}
elseif($_POST["operator"]=="*"){
    $result=$number1*$number2;
    echo "Результат".$result;
}
elseif($_POST["operator"]=="/"){
    $result=$number1/$number2;
    echo "Результат".$result;
}

    }
    else{
        echo "Введите число";
    }

}

?>