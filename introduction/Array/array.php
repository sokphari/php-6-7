<?php

    // array 1D
    $arr = array(
        "IPHONE","NOKIA","SAMSUNG","OPPO","LG","SAMSUNG","OPPO","LG","SAMSUNG","OPPO","LG","SAMSUNG","OPPO","LG","SAMSUNG","OPPO","LG","SAMSUNG","OPPO","LG"
        
    );
    // $arr = [];
    // echo $arr[0]."<br>";
    // echo $arr[1]."<br>";
    // echo $arr[2]."<br>";
    // echo $arr[3]."<br>";
    // echo $arr[4]."<br>";
    // echo $arr[5]."<br>";
    // echo $arr[6];
    for($i = 0; $i < 5; $i++){
        echo "<br>".$arr[$i];
    }
    //array 2D
    $arr2D = array(
        array(1,1,1,1),
        array(1,1,1,1)
    );
    $arr2D = [
        ["litong","rithy","vichai"],
        ["thearo","meng sae","sothea"],
        ["Ratha","Sovannary","somnang"],
        ["Meng Hour","seng Hak"]
    ];
    print_r($arr2D);
    echo "My name is :".$arr2D[0][2]."💖";
    for($i=0; $i<count($arr2D);$i++){
        for($j=0; $j<count($arr2D[$i]); $j++){
            echo $arr2D[$i][$j]."<br>";
        }
    }

    $arrAccs = [
            //key => value
            "id" => "1",
            "name" => "Sokphari",
            "gender" => "male",
            "addres" => "banteay meanchey"
    ];
    
    echo "<br>".$arrAccs['id']."<br>";
    // echo "<br>".$arrAccs['name']."<br>";
    // echo "<br>".$arrAccs['gender']."<br>";
    // echo "<br>".$arrAccs['addres'];
    foreach($arrAccs as $key => $value){
        echo $key." => ".$value."<br>🥰";
    }
    

    $image = [
        "https://www.pinterest.com/pin/699817229646557554/",
        "https://www.pinterest.com/pin/35817759532742697/",
        "https://www.pinterest.com/pin/35817759532742697/",
        "https://www.pinterest.com/pin/35817759532742697/"
    ]

?>