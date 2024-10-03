/controlli per la password:
1: avere almeno 8 caratteri
2: avere almeno 1 maiuscola
3: avere almeno 1 numero
4: avere almeno un carattere speciale
<?php

function lunghezza($stringa){
    $pwdLength = false;
    if (strlen($stringa)>=8) {
        return  $pwdLength = true;
    } else {
        $pwdLength = $pwdLength;
    } echo "La lunghezza della password è inferiore ad 8 caratteri \n";
// var_dump($pwdLength);

}


function maiuscolo($stringa)
{    $pwdCaps = false;
    for ($i=0; $i<strlen($stringa); $i++) {
        if (ctype_upper($stringa[$i]) == true) {
            return   $pwdCaps = true;
        } else {
            $pwdCaps = $pwdCaps;
        }
    } echo "La password deve avere almeno 1 carattere maiuscolo.\n";
    // var_dump($pwdCaps);

}

function numero($stringa)
{    $pwdNum = false;
    for ($i=0; $i<strlen($stringa); $i++) {
        if (is_numeric($stringa[$i]) == true) {
            return $pwdNum = true;
        } else {
            $pwdNum = $pwdNum;
        }
    }
    echo "La password deve avere almeno 1 numero. \n";
    //  var_dump($pwdNum);
}

function speciale($stringa)

{
    $specials = ['!', '@', '#', '$'];

    $pwdSpecial = false;
    for ($i=0; $i<strlen($stringa); $i++) {
        if (in_array($stringa[$i], $specials) == true) {
           return $pwdSpecial = true;
        } else {
            $pwdSpecial = $pwdSpecial;
        }
    }
    echo "La password deve avere almeno un carattere speciale. (!,@,#,$) \n";
    // var_dump($pwdSpecial);
}




function checkPassword($stringa){
$pwd = false;

    $pwdLengt= lunghezza($stringa);
    $pwdCap=maiuscolo($stringa);
    $pwdNu=numero($stringa);
    $pwdSpecia=speciale($stringa);

    if ($pwdLengt == true && $pwdCap == true && $pwdNu == true && $pwdSpecia == true) {
        echo"password conforme";
        $pwd = true;

    } else {
        echo"password non conforme \n";

    }

}

// checkPassword("Bellac1ao#");


$index = 0;

do {
    $pwd = readline('Inserire la password: ');
    $index++;
} while (checkPassword($pwd) == false && $index < 3);

?>