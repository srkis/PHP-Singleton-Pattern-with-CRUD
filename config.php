<?php

define("DB_HOST", "YOUR DATABASE HOST");
define("DB_USER", "YOUR DATABASE USER");
define("DB_PASS", "YOUR DATABASE PASSWORD");
define("DB_NAME", "YOUR DATABASE NAME");

spl_autoload_register(function($className){
    require_once "classes/{$className}.php";

});


