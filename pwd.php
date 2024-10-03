/controlli per la password:
1: avere almeno 8 caratteri
2: avere almeno 1 maiuscola
3: avere almeno 1 numero
4: avere almeno un carattere speciale
<?php

function lunghezza($stringa){
    $pwdLength = false;
    if (strlen($stringa)>=8) {
        $pwdLength = true;
    } else {
        $pwdLength = $pwdLength;
    }var_dump($pwdLength);

}


function maiuscolo($stringa)
{    $pwdCaps = false;
    for ($i=0; $i<strlen($stringa); $i++) {
        if (ctype_upper($stringa[$i]) == true) {
            $pwdCaps = true;
        } else {
            $pwdCaps = $pwdCaps;
        }
    }    var_dump($pwdCaps);

}

function numero($stringa)
{    $pwdNum = false;
    for ($i=0; $i<strlen($stringa); $i++) {
        if (is_numeric($stringa[$i]) == true) {
            $pwdNum = true;
        } else {
            $pwdNum = $pwdNum;
        }
    }    var_dump($pwdNum);
}

function speciale($stringa)

{
    $speciali=['£', '$', '%', '&'];

    $pwdSpecial = false;
    for ($i=0; $i<strlen($stringa); $i++) {
        if (in_array($stringa[$i] , $speciali) == true) {
            $pwdSpecial = true;
        } else {
            $pwdSpecial = $pwdSpecial;
        }
    }    var_dump($pwdSpecial);
}




// function pwd($stringa){

// if ($pwdLength && $pwdCaps && $pwdNum && $pwdSpecial) {
// echo"password accettata";

// } else {
// echo"password non conforme";
// }

// }

// pwd("Bellac1ao£");


lunghezza("Bellac1ao£");
maiuscolo("Bellac1ao£");
numero("Bellac1ao£");
speciale("Bellac1ao£");

?>