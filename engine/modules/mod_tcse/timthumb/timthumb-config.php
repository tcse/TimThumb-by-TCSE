<?php
/** переменные для engine/data/config.php 
*	'{$config["timthumb_ALLOW_ALL_EXTERNAL_SITES"]}'
* 	'{$config["timthumb_FILE_CACHE_TIME_BETWEEN_CLEANS"]}'
* 	'{$config["timthumb_FILE_CACHE_MAX_FILE_AGE"]}'
* 	'{$config["timthumb_MAX_FILE_SIZE"]}'
*/

//define('ALLOW_ALL_EXTERNAL_SITES', true);
//define ('FILE_CACHE_TIME_BETWEEN_CLEANS', 86400);
//define ('FILE_CACHE_MAX_FILE_AGE', 86400); 
//define ('MAX_FILE_SIZE', 10485760);      
     

define('ALLOW_ALL_EXTERNAL_SITES', '{$config["timthumb_ALLOW_ALL_EXTERNAL_SITES"]}');

define ('FILE_CACHE_TIME_BETWEEN_CLEANS', '{$config["timthumb_FILE_CACHE_TIME_BETWEEN_CLEANS"]}');

define ('FILE_CACHE_MAX_FILE_AGE', '{$config["timthumb_FILE_CACHE_MAX_FILE_AGE"]}'); 

//define ('MAX_FILE_SIZE', '{$config["timthumb_MAX_FILE_SIZE"]}');      
     
?>