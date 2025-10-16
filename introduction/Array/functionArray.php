<?php

    $array = [
        10,20,30,40,50,60
    ];
    foreach($array as $ar){
        echo $ar;
    }
    //pop push shift unshirt slice merg in_array 
    echo "<br>";
    echo "Element of array after pop : ";
    array_pop($array);
    foreach($array as $ar){
        echo $ar;
    }
    echo "<br>";
      echo "Element of array after push : ";
    array_push($array,100,200);
    foreach($array as $ar){
        echo $ar;
    }
    echo "<br>";
    echo "Element of array after shift : ";
    array_shift($array);
    foreach($array as $ar){
        echo $ar;
    }
    echo "<br>";
    echo "Element of array after unshift : ";
    array_unshift($array,300,500);
    foreach($array as $ar){
        echo $ar;
    }
    echo "<br>";
    // if(in_array(1,$array)){
    //     echo "10 has in array";
    // }else{
    //     echo "10 not in array";
    // }
    $arr1 = [1,2,3,4,5];
    $arr2 = [1,2,3,4,5];
    $num3 = array_merge($arr1,$arr2);
    foreach($num3 as $ar){
        echo $ar;
    }

?>