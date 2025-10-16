<?php
    /*condition*/ #command stop code 
    // $name = 'menghav';
    // $x = 18;
    // if($x==17){
    //     echo "$x you are man";
    // }else{
    //     echo "you are not a man ";
    // }
    
    // $x = 20;
    // $y = 20;
    // if($x>$y){
    //     echo "x bigger than y";
    // }else if($x<$y){
    //     echo "y bigger than x";
    // }else{
    //     echo"y Equel x";
    // }

    // if($name == 'menghav'){
    //     echo "Hello I'm menghav boy smos";
    // }else{
    //     echo "menghave not single";
    // }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
    </body>
    </html>
    <?php
    echo "Hello etec-center";

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = "";
    $num = 10;
    $number = 10.5;
    $bool = false;
    $arry = [
        'a','b'
    ];
    $array_accoss = [
        [
            'name' => "tola",
        ],
    ];
    echo "value".$bool;
    echo "<pre>";
    print_r($arry);
    echo "<pre>";
    echo $array_accoss[0]['name'];
    echo '<pre>';
    print_r($array_accoss);
    echo '<pre>';
    function index(){
    $name = "tola"."<br>";
    echo "$name";
    }
    index();
    $x = 10;
    function name(){
        global $x;
        echo $x;
    }
    echo "<br>". name();
    
    ?>
</body>
</html>
