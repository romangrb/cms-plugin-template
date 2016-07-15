<?php

/*
Plugin Name: e-Register-Now plugin
Plugin URI: http://..
Description: This is wordpress plugin for e-Register-now service
Version: 1.0
Author: Roman Hrabar
Author URI: http://...
*/


/**
* created by romangrb on 15.07.2016
* get the base class of EventCalendar
*/

if(!class_exists('Tribe__Events__Main')) {
    require_once dirname( __FILE__ ) . 'plugins/the-events-calendar/src/Tribe/Main.php';
}

/**
 * Class Definition
 */
 
class MyChildClass extends Tribe__Events__Main{
    // class definition
    function __construct() {
       parent::__construct();
    }
    
    function print_hello() { 
      echo "<h1>Hello</h1>"; 
    }
    
}

$cl = new MyChildClass;

$cl->print_hello();

// class Cat {
//   function parent_funct() { echo "<h1>Это родительская функция</h1>"; }
//   function test () { echo "<h1>Это родительский класс</h1>"; }
// }

// class Tiger extends Cat {
//   function child_funct() { echo "<h2>Это дочерняя функция</h2>"; }
//   function test () { echo "<h2>Это дочерний класс</h2>"; }
// }

// $cat = new Cat;
// $tiger = new Tiger;



?>