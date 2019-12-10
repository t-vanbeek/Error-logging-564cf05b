<?php


$input = $argv[1];

function countdown($input){

    if ($input < 0 || $input > 10) {
        error_log("Error 579: Enkel getallen tussen de 0 en 10 worden geaccepteerd" . PHP_EOL , 3, "error.log");
        
        echo "NO";

        exit;
    } 

for ($i=$input; $i >= 0; $i--) { 
    echo $i . " Seconden" . PHP_EOL;
}
     
}

try{

    echo countdown($input);
}

catch(exception $error){
    echo 'Fout gevonden: '.$error->getMessage();
    exit;
}
echo $input . ' seconden afgeteld';
exit;