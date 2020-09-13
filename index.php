<?php

require 'Cover/Get.php';
require 'Instrument/View.php';
require 'Musician/Person.php';
require 'Main/App.php';

function getClass( $project_path ){

    $classes = array();

    $dc = get_declared_classes();

    // Loop
    foreach ($dc as $class) {
        $reflect = new \ReflectionClass($class);

        $filename = $reflect->getFileName();

        if( ! $reflect->isInternal() ){

            $filename = str_replace(array('\\'), array('/'), $filename);
            $project_path = str_replace(array('\\'), array('/'), $project_path);

            $project_path = rtrim( $project_path, '/' );

            if( stripos( $filename, $project_path ) !== false ){
                $classes[] = $class;
            }

        }
    }

    return $classes;    
}
$classes = getClass(__DIR__);

$chosen = $classes[array_rand($classes)];

$app = new \Main\App();
$app->echoClass($chosen);


 
