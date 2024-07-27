<?php


$name = ["name" => ["Nitish" ,"Kishan" , "harsh" ] , "Technology" => ["Computer" , "Html" , "Css"] , "semester" => ["2nd" , "3rd" , "4th"]];
echo "<pre>";
print_r($name);


// function multi ($x , $y ,$z){
//     if ( array_key_exists($x , $y) && in_array($z , $y)){
//         echo "true";
//     }
//     else{
//         echo "false";
//     }
// }



// check value which is exist on exact key 

function checkValueExistsOnKey($name , $key , $value ){ 
    $columnInput = array_column($name , $key);
    print_r($columnInput);
    if (in_array($value , $columnInput)){
        echo "true";
    }
    else{
        echo "false";
    }
}

checkValueExistsOnKey($name ,  2, '4th');

// echo multi('0' , $name ,'Nitish');

// function multitype ($z , $x , $y){
//     // foreach($name as $x => $y){
//     if ( array_search($x , $z) == array_keys($y , $z)){
//         echo "true";
//     }
//     else{
//         echo "false";
//     }
// }
// // }

// echo multitype($name , 0 , "Nitish");


    // if( array_search(  'Nitish' ,$name) == in_array(5, $name )){
    //         echo "True";
    //     }
    //     else{
    //         echo "false";
    //         }
            
    // function checkValueExistsOnKey($name , $key , $value ){ 
    //     $columnInput = array_column($name , $key);
    //     print_r($columnInput);
    //     $findKey = array_search($value ,$name);
    //     $findvalue = in_array($key ,$name);

    //     if ($findKey  == $findvalue){
    //         echo "true";
    //     }
    //     else{
    //         echo "false";
    //     }
    
echo "<br><br><br>";

    $contact = ['name' => ["Raju" , "Dinesh" , "Omprakash" , "Kishan"] , 'mobNumber' => ['1234567890' , '4589632541'  , '5486624452'] , 'pinCode' => ['548962' , '380068' , '879546' , '785243']];


    echo "<pre>";
    print_r($contact);

    function biodata ($name , $key , $value){
        $countColumn = array_column($name , $key);
        print_r($countColumn);

        if(in_array($value , $countColumn)){
            echo "true";
        }
        else{
            echo "false";
        }  
        }

    biodata($contact , 1 , 'Dinesh');

?>
