<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Supriadi");
addTodoList("Roadman");
addTodoList("Siagian");

var_dump($todoList);