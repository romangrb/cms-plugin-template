<?php



/**
* created by romangrb on 15.07.2016
* get the base class of EventCalendar
*/

// if(!class_exists('Tribe__Events__Main')) {
//     require_once '.plugins/the-events-calendar/src/Tribe/Main.php';
// }

/**
 * Class Definition
 */
 
// class MyChildClass extends Tribe__Events__Main{

//     // class definition
//     function user_id(){
//         return $this->$addOnPath;
//     }

// }


class Parent {
  function parent_funct() { echo "<h1>Это родительская функция</h1>"; }
  function test () { echo "<h1>Это родительский класс</h1>"; }
}

class Child extends Parent {
  function child_funct() { echo "<h2>Это дочерняя функция</h2>"; }
  function test () { echo "<h2>Это дочерний класс</h2>"; }
}

$object = new Parent;
$object = new Child;

$object->parent_funct(); // Выводит 'Это родительская функция'
$object->child_funct(); // Выводит 'Это дочерняя функция'
$object->test(); // Выводит 'Это дочерний класс'

?>