<?php 

spl_autoload_register(function($className) {
    include str_replace('\\', '/', $className) . '.php';
});

new Person\Girl;
new Person\Boy;
new Animal\Dog;

