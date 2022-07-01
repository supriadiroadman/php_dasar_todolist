<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../View/ViewRemoveTodoList.php";

addTodoList("Supriadi");
addTodoList("Roadman");
addTodoList("Siagian");
addTodoList("Empat");
addTodoList("Lima");

showTodoList();
viewRemoveTodoList();
showTodoList();
