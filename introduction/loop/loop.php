<?php
    //loop for while do while foreach

    // for($i = 1; $i<=10; $i++){
    //     echo "$i Hello crush...<br>";
    // }

    //while loop
    // $i = 1; //i = 1
    // while($i <= 5){
    //     echo ''.$i.'Hello etec center<br>'; 
    //     $i++; 
    // }


    // do while
    // $j = 10;
    // do{
    //     echo "Hello rithy<br>";
    // }while($j<=100);

    $array = [
            'id' => '01',
            'name' => 'thearo',
            'gender' => 'male',
            'address' => 'PP'
    ];
    echo $array['id'];
    foreach($array as $value){
        echo $value.'<br>';
    }


    
    $users = [
    ['id' => 1, 'name' => 'Sothea', 'gender' => 'Male', 'address' => 'Phnom Penh', 'phone' => '0123456789'],
    ['id' => 2, 'name' => 'Sokha', 'gender' => 'Female', 'address' => 'Siem Reap', 'phone' => '0987654321'],
    ['id' => 3, 'name' => 'Vannak', 'gender' => 'Male', 'address' => 'Battambang', 'phone' => '0171234567'],
    ['id' => 4, 'name' => 'SreyNeang', 'gender' => 'Female', 'address' => 'Kampong Cham', 'phone' => '0169876543'],
    ['id' => 5, 'name' => 'Rithy', 'gender' => 'Male', 'address' => 'Kampot', 'phone' => '0151122334'],
    ['id' => 6, 'name' => 'Channy', 'gender' => 'Female', 'address' => 'Takeo', 'phone' => '0185566778'],
    ['id' => 7, 'name' => 'Piseth', 'gender' => 'Male', 'address' => 'Kandal', 'phone' => '0192233445'],
    ['id' => 8, 'name' => 'Sreymom', 'gender' => 'Female', 'address' => 'Prey Veng', 'phone' => '0123344556'],
    ['id' => 9, 'name' => 'Ravy', 'gender' => 'Male', 'address' => 'Svay Rieng', 'phone' => '0176677889'],
    ['id' => 10, 'name' => 'Chantha', 'gender' => 'Female', 'address' => 'Pursat', 'phone' => '0167788990'],
    ['id' => 11, 'name' => 'Sokhom', 'gender' => 'Male', 'address' => 'Kep', 'phone' => '0159988776'],
    ['id' => 12, 'name' => 'SreyPich', 'gender' => 'Female', 'address' => 'Koh Kong', 'phone' => '0181122334'],
    ['id' => 13, 'name' => 'Borey', 'gender' => 'Male', 'address' => 'Mondulkiri', 'phone' => '0193344556'],
    ['id' => 14, 'name' => 'SreyLeang', 'gender' => 'Female', 'address' => 'Ratanakiri', 'phone' => '0125566778'],
    ['id' => 15, 'name' => 'Soklin', 'gender' => 'Male', 'address' => 'Stung Treng', 'phone' => '0179988776'],
    ['id' => 16, 'name' => 'Sreypov', 'gender' => 'Female', 'address' => 'Kratie', 'phone' => '0163344556'],
    ['id' => 17, 'name' => 'Vutha', 'gender' => 'Male', 'address' => 'Preah Vihear', 'phone' => '0156677889'],
    ['id' => 18, 'name' => 'Sreymey', 'gender' => 'Female', 'address' => 'Siem Reap', 'phone' => '0184455667'],
    ['id' => 19, 'name' => 'Chan', 'gender' => 'Male', 'address' => 'Phnom Penh', 'phone' => '0195566778'],
    ['id' => 20, 'name' => 'Sreynoch', 'gender' => 'Female', 'address' => 'Battambang', 'phone' => '0126677889'],
];


?>
