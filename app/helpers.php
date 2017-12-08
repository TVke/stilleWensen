<?php
/*
    |--------------------------------------------------------------------------
    | Custom Helper functions
    |--------------------------------------------------------------------------
    |
    | These functions are available throughout this project and can be helpfull
	| when the Laravel helper functions are not enough.
    |
*/

/**
 * creates initials for a given string
 *
 * @param $string
 * @param $element
 * @return string
 */

function starToElement($string,$element){
	$string = e($string);
	while(substr_count($string,"*")>=2){
		$parts = explode("*",$string,3);
		$string = $parts[0]."<".$element.">".$parts[1]."</".$element.">".$parts[2];
	}
	return $string;
}
