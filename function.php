<?php
function verifyInput($var){

$var =htmlspecialchars($var);
$var=trim($var);
// s;
return $var;
}

 function Email($var){

 return filter_var($var,FILTER_VALIDATE_EMAIL);  
}

function isPhone($var){
 return preg_match("#^[0-9]{2}([-. ]?[0-9]{2}){3}$#", $var);
}

?>