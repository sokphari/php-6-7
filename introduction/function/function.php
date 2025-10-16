<?php
    //None return none paramater
    //None Return has paramater
    // Return has paramater
    // Return none paramater



     //None return none paramater
     function sum(){
        $x = 10;
        $y = 10;
        $Sum = $x + $y;
        echo $Sum;
        
     }
     sum();
     echo "Please enter again".sum()-5; //can't calculate none param
     echo "<br>";
                //20-10
    $calculate = sum()-10;
    echo $calculate;
    echo "<br>";

    //None Return has paramater
    function mul($a,$b){
        $Mul = $a * $b;
        echo $Mul;
    }
    echo "<br>".mul(10,10);
    echo "<br>".mul(5,5);
    $sum = mul(10,15)+10; //can't calculate with param
    echo $sum;

    //Return none paramater
    function Summ(){
        $i = 10;
        $j = 10;
        $Mul = $i * $j;
        return $Mul;
    }
    echo '<br>'.Summ();
    $Calculate = Summ()*100;
    echo '<br>'.$Calculate;

    //return has paramater
    function calculate($x,$y){
        $madulo = $x % $y;
        return $madulo;
    }
    
    echo "<br>".calculate(10,10);
    $div = calculate(5,1)+5;
    echo "<br>".$div;
     

?>