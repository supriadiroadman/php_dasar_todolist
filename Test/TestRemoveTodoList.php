<?php
require_once "../Model/TodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";

addTodoList("Supriadi");
addTodoList("Roadman");
addTodoList("Siagian");
addTodoList("Empat");
addTodoList("Lima");

showTodoList();
removeTodoList(3);
showTodoList();

// Remove todo yang tidak ada
$success = removeTodoList(5);
var_dump($success);
showTodoList();


