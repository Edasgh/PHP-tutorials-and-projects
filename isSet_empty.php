<?php
//isset() => returns TRUE if a variable is declared & not null

//empty() => returns TRUE if a variable is not declared, false, null or ""

$userNm = "Eshita";

// if (isset($userNm)) {
//     // any boolean value or empty string will aslo return true in isset()
//     echo "This variable is set";
// } else {
//     echo "This variable is NOT set";
// }



if (empty($userNm)) {

    echo "This variable is empty";
} else {

    echo "This variable is NOT empty";
}
