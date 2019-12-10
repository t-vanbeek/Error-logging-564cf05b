<?php


$input = $argv[1];

function countdown($input){

    if ($input < 0 || $input > 10) {
        error_log("Error 579: Enkel getallen tussen de 0 en 10 worden geaccepteerd" . PHP_EOL , 3, "error.log");
        
        echo "NO, probeer onder de 10 te blijven.";

        exit;
    } 
       
       if ($input == NULL || !is_numeric($input)){ 
        error_log("Error 580: Veld kan niet leeg zijn" . PHP_EOL , 3, "error.log");

        echo "Veld kan niet leeg zijn";

        exit;
       }

        if(is_numeric($input) || $input >= 0 || $input <= 10 || $input !== NULL ){

for ($i=$input; $i >= 0; $i--) { 
    echo $i . " Seconden" . PHP_EOL;
}
}
}

try{

    echo countdown($input);
}

catch(exception $error){
    echo 'Fout gevonden: '.$error->getMessage();
    exit;
}
echo 'Vanaf ' . $input . ' seconden afgeteld';
exit;