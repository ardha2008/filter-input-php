<?php 

function filter($input){
    $input=trim($input);
    $input=strip_tags($input);
    $input=nl2br($input);
    $input=addslashes($input);
    $input=stripslashes($input);
    $input=str_ireplace("'", "%", $input);
    $input=str_ireplace( "''", '%', $input );
    $input=str_ireplace( '""', '%', $input );
    $query = preg_replace( '|(?<!%)%s|', "'%s'", $input );
    $input=htmlentities($input, ENT_QUOTES);
    $input=ltrim($input);
    $input=rtrim($input);
    return $input;
    }

?>
